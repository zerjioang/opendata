<?php

namespace DemoBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use DemoBundle\Command\OpenDataClient;

class DownloadTest extends WebTestCase{

	public function testDownload(){
        $client = new OpenDataClient();
        $response = $client->getAgenda();
        $this->assertContains('<documentname>&amp;quot;Alex Katz, aquí y ahora&amp;quot;</documentname>', $response);
	}
}