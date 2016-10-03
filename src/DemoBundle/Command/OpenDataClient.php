<?php

namespace DemoBundle\Command;

use Symfony\Component\BrowserKit\Client;
use Goutte\Client as BaseClient;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\DomCrawler\Crawler;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use DemoBundle\Entity\Row;

class OpenDataClient extends BaseClient
{

    //constantes de la clase
    const AGENDA_URL_XML = 'http://opendata.euskadi.eus/contenidos/ds_eventos/agenda_cultura_euskadi/es_kultura/adjuntos/kulturklik.xml';
    
    const AGENDA_URL_JSON = 'http://opendata.euskadi.eus/contenidos/ds_eventos/agenda_cultura_euskadi/es_kultura/adjuntos/kulturklik.json';

    const GET = 'GET';

    private $root = array(); //DOMElement

    protected function doRequest($request)
    {
        return new Response($content, $status, $headers);
    }

    /*
    * return a string with kultur agenda content as xml
    */
    public function getAgendaXml()
    {
        $client = new BaseClient();
        //return agenda data
        $crawler = $client->request(
            self::GET,
            self::AGENDA_URL_XML,
            array(),
            array(),
            array(
               'CONTENT_TYPE' => 'application/xml'
                )
        );
        $this->root = $crawler->html();
        return $this->root;
    }

    /*
    * return a string with kultur agenda content as json
    */
    public function getAgendaJson()
    {
        $client = new BaseClient();
        //return agenda data
        $crawler = $client->request(
            self::GET,
            self::AGENDA_URL_JSON,
            array(),
            array(),
            array(
               'CONTENT_TYPE' => 'application/json'
                )
        );
        $this->root = $client->getResponse()->getContent();
        return $this->root;
    }

}
