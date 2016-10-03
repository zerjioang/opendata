<?php

namespace DemoBundle\Command;

class DBManager
{

	var $em;

	function __construct($manager)
	{
		$this->em = $manager;
	}
	function store($object){
		// hacer persistente el objecto usando doctrine
		$this->em->persist($object);
	}

	function flush()
	{
		// ejecutar las queries justas y liberar recursos
		$this->em->flush();
	}

}