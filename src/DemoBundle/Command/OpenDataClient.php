<?php

namespace DemoBundle\Command;

use Symfony\Component\BrowserKit\Client;
use Goutte\Client as BaseClient;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Console\Output\OutputInterface;

class OpenDataClient extends BaseClient
{

    //constantes de la clase
    const AGENDA_URL = 'http://opendata.euskadi.eus/contenidos/ds_eventos/agenda_cultura_euskadi/es_kultura/adjuntos/kulturklik.xml';
    const GET = 'GET';

    protected function doRequest($request)
    {
        return new Response($content, $status, $headers);
    }

    public function getAgendaText()
    {
        $client = new BaseClient();
        //return agenda data
        $crawler = $client->request(
            self::GET,
            self::AGENDA_URL,
            array(),
            array(),
            array(
               'CONTENT_TYPE' => 'application/xml'
                )
        );
        return $crawler->text();
    }

}
