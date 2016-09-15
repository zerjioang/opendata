<?php

namespace DemoBundle\Command;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;

class AgendaProcesor
{
	function run($data){

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

}