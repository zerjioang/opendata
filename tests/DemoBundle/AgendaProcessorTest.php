<?php

namespace DemoBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AgendaProcessorTest extends WebTestCase{

	public function testParserSingleRow(){

	//procesar datos
        $procesor = new AgendaProcesor();
        $class = 'DemoBundle\Entity\Row';
        $type = 'xml';

        $response = '<row num="1">
        <documentname>Sesión de cuenta cuentos con Ines Bengoa: &amp;quot;Karabi Karaba&amp;quot;</documentname>
        <eventcountry>108</eventcountry>
        <eventcountryname>*** No text for {} ***</eventcountryname>
        <eventenddate>22/10/2017</eventenddate>
        <eventlanguages>Euskara</eventlanguages>
        <eventprice>Gratis</eventprice>
        <eventregistrationenddate>13/09/2016</eventregistrationenddate>
        <eventregistrationstartdate>12/09/2016</eventregistrationstartdate>
        <eventstartdate>22/10/2017</eventstartdate>
        <eventterritory>48</eventterritory>
        <eventterritoryname>*** No text for {} ***</eventterritoryname>
        <eventtown>003</eventtown>
        <eventtownname>*** No text for {} ***</eventtownname>
        <eventtype>Actividad infantil</eventtype>
        <latitudelongitude>43.220673725104,-2.73534893989563</latitudelongitude>
        <countrycode>108</countrycode>
        <country>España</country>
        <territorycode>48</territorycode>
        <territory>Bizkaia</territory>
        <municipalitycode>003</municipalitycode>
        <municipality>Amorebieta-Etxano</municipality>
        <placename>Biblioteca de Amorebieta-Etxano</placename>
        <friendlyurl>http://opendata.euskadi.eus/catalogo/-/evento/20160912171239/sesion-de-cuenta-cuentos-con-ines-bengoa-karabi-karaba-/kulturklik/es/</friendlyurl>
        <physicalurl>http://opendata.euskadi.eus/catalogo/contenidos/evento/20160912171239/es_def/index.shtml</physicalurl>
        <dataxml>http://opendata.euskadi.eus/contenidos/evento/20160912171239/es_def/data/es_r01dtpd1571ef50f2b1cadd82e6828f24bab82c4bc</dataxml>
        <metadataxml>http://opendata.euskadi.eus/contenidos/evento/20160912171239/r01Index/20160912171239-idxContent.xml</metadataxml>
        <zipfile>http://opendata.euskadi.eus/contenidos/evento/20160912171239/opendata/20160912171239.zip</zipfile>
    </row>';

            $object = $procesor->run($response, $class, $type);
            $this->assertContains('España', $object->getCountry());
	}
	
    public function testParserMultipleRows()
    {
         //procesar datos
            $procesor = new AgendaProcesor();
            $class = 'DemoBundle\Entity\Rows';
            $type = 'xml';

            $response = '
                <rows num="1024">
                <row num="1">
                    <documentname>Sesión de cuenta cuentos con Ines Bengoa: &amp;quot;Karabi Karaba&amp;quot;</documentname>
                    <eventcountry>108</eventcountry>
                    <eventcountryname>*** No text for {} ***</eventcountryname>
                    <eventenddate>22/10/2017</eventenddate>
                    <eventlanguages>Euskara</eventlanguages>
                    <eventprice>Gratis</eventprice>
                    <eventregistrationenddate>13/09/2016</eventregistrationenddate>
                    <eventregistrationstartdate>12/09/2016</eventregistrationstartdate>
                    <eventstartdate>22/10/2017</eventstartdate>
                    <eventterritory>48</eventterritory>
                    <eventterritoryname>*** No text for {} ***</eventterritoryname>
                    <eventtown>003</eventtown>
                    <eventtownname>*** No text for {} ***</eventtownname>
                    <eventtype>Actividad infantil</eventtype>
                    <latitudelongitude>43.220673725104,-2.73534893989563</latitudelongitude>
                    <countrycode>108</countrycode>
                    <country>España</country>
                    <territorycode>48</territorycode>
                    <territory>Bizkaia</territory>
                    <municipalitycode>003</municipalitycode>
                    <municipality>Amorebieta-Etxano</municipality>
                    <placename>Biblioteca de Amorebieta-Etxano</placename>
                    <friendlyurl>http://opendata.euskadi.eus/catalogo/-/evento/20160912171239/sesion-de-cuenta-cuentos-con-ines-bengoa-karabi-karaba-/kulturklik/es/</friendlyurl>
                    <physicalurl>http://opendata.euskadi.eus/catalogo/contenidos/evento/20160912171239/es_def/index.shtml</physicalurl>
                    <dataxml>http://opendata.euskadi.eus/contenidos/evento/20160912171239/es_def/data/es_r01dtpd1571ef50f2b1cadd82e6828f24bab82c4bc</dataxml>
                    <metadataxml>http://opendata.euskadi.eus/contenidos/evento/20160912171239/r01Index/20160912171239-idxContent.xml</metadataxml>
                    <zipfile>http://opendata.euskadi.eus/contenidos/evento/20160912171239/opendata/20160912171239.zip</zipfile>
                </row>
                <row num="2">
                    <documentname>Club de Lectura en Euskera de Amorebieta-Etxano: &amp;quot;Jostorratza eta haria&amp;quot;, de Yolanda Arrieta</documentname>
                    <eventcountry>108</eventcountry>
                    <eventcountryname>*** No text for {} ***</eventcountryname>
                    <eventenddate>23/05/2017</eventenddate>
                    <eventlanguages>Euskara</eventlanguages>
                    <eventregistrationenddate>13/09/2016</eventregistrationenddate>
                    <eventregistrationstartdate>12/09/2016</eventregistrationstartdate>
                    <eventstartdate>23/05/2017</eventstartdate>
                    <eventterritory>48</eventterritory>
                    <eventterritoryname>*** No text for {} ***</eventterritoryname>
                    <eventtimetable>19:00-20:30</eventtimetable>
                    <eventtown>003</eventtown>
                    <eventtownname>*** No text for {} ***</eventtownname>
                    <eventtype>Conferencia</eventtype>
                    <latitudelongitude>43.220673725104,-2.73534893989563</latitudelongitude>
                    <countrycode>108</countrycode>
                    <country>España</country>
                    <territorycode>48</territorycode>
                    <territory>Bizkaia</territory>
                    <municipalitycode>003</municipalitycode>
                    <municipality>Amorebieta-Etxano</municipality>
                    <placename>Biblioteca de Amorebieta-Etxano</placename>
                    <friendlyurl>http://opendata.euskadi.eus/catalogo/-/evento/20160912165859/club-de-lectura-en-euskera-de-amorebieta-etxano-jostorratza-eta-haria-de-yolanda-arrieta/kulturklik/es/</friendlyurl>
                    <physicalurl>http://opendata.euskadi.eus/catalogo/contenidos/evento/20160912165859/es_def/index.shtml</physicalurl>
                    <dataxml>http://opendata.euskadi.eus/contenidos/evento/20160912165859/es_def/data/es_r01dtpd1571ee88eec1cadd82e7b391f7f96632247</dataxml>
                    <metadataxml>http://opendata.euskadi.eus/contenidos/evento/20160912165859/r01Index/20160912165859-idxContent.xml</metadataxml>
                    <zipfile>http://opendata.euskadi.eus/contenidos/evento/20160912165859/opendata/20160912165859.zip</zipfile>
                </row>
                </rows>';

            $object = $procesor->run($response, $class, $type);
            $this->assertContains(2, count($object->getRow()) );
    } 
}