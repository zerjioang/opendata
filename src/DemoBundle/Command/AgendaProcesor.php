<?php

namespace DemoBundle\Command;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;

class AgendaProcesor
{
	function runJson($data){

		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer(), new ArrayDenormalizer());
		$serializer = new Serializer($normalizers, $encoders);

		$class = 'DemoBundle\Entity\Row[]';
		$type = 'json';

		$data = str_replace("jsonCallback(", "", $data);
		$data = str_replace(");", "", $data);

		//fix utf8 enc
		$data = AgendaProcesor::array_utf8_encode($data);	
		return $serializer->deserialize($data, $class, $type);
	}

	function runXml($data){

		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
		$serializer = new Serializer($normalizers, $encoders);

		$class = 'DemoBundle\Entity\Rows';
		$type = 'xml';
		//eliminar la cabecera del xml antes de parsear
		//deserializar el objecto ya limpio
		$data = '<rows num="0">'.$data."</rows>";

		return $serializer->deserialize($data, $class, $type);
	}

	/**
	 * Encode array to utf8 recursively
	 * @param $dat
	 * @return array|string
	 */
	public static function array_utf8_encode($dat)
	{
	    if (is_string($dat))
	        return utf8_encode($dat);
	    if (!is_array($dat))
	        return $dat;
	    $ret = array();
	    foreach ($dat as $i => $d)
	        $ret[$i] = self::array_utf8_encode($d);
	    return $ret;
	}

}