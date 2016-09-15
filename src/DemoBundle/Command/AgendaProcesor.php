<?php

namespace DemoBundle\Command;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class AgendaProcesor
{

	function __constructor(){
		$encoders = array(new XmlEncoder(), new JsonEncoder());
		$normalizers = array(new ObjectNormalizer());
		$serializer = new Serializer($normalizers, $encoders);
	}

	function run($data, $class, $type='xml'){
		$object = $serializer->deserialize($data, $class, $type);
	}

}