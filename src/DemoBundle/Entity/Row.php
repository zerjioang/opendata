<?php

namespace DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Row
 *
 * @ORM\Table(name="evento")
 * @ORM\Entity(repositoryClass="DemoBundle\Repository\EventoRepository")
 */
class Row
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="documentName", type="string", length=255)
     */
    private $documentName;

    /**
     * @var int
     *
     * @ORM\Column(name="eventCountry", type="integer", unique=false)
     */
    private $eventCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="eventCountryName", type="string", length=255)
     */
    private $eventCountryName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eventLanguages", type="datetime")
     */
    private $eventLanguages;

    /**
     * @var string
     *
     * @ORM\Column(name="eventPrice", type="string", length=255)
     */
    private $eventPrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eventRegistrationEndDate", type="datetime")
     */
    private $eventRegistrationEndDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eventRegistrationStartDate", type="datetime")
     */
    private $eventRegistrationStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="eventStartDate", type="datetime")
     */
    private $eventStartDate;

    /**
     * @var int
     *
     * @ORM\Column(name="eventTerritory", type="integer")
     */
    private $eventTerritory;

    /**
     * @var string
     *
     * @ORM\Column(name="eventTerritoryName", type="string", length=255)
     */
    private $eventTerritoryName;

    /**
     * @var int
     *
     * @ORM\Column(name="eventTown", type="integer")
     */
    private $eventTown;

    /**
     * @var string
     *
     * @ORM\Column(name="eventTownName", type="string", length=255)
     */
    private $eventTownName;

    /**
     * @var string
     *
     * @ORM\Column(name="eventType", type="string", length=255)
     */
    private $eventType;

    /**
     * @var string
     *
     * @ORM\Column(name="latitudelongitude", type="string", length=100)
     */
    private $latitudelongitude;

    /**
     * @var int
     *
     * @ORM\Column(name="countryCode", type="integer")
     */
    private $countryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var int
     *
     * @ORM\Column(name="territoryCode", type="integer")
     */
    private $territoryCode;

    /**
     * @var string
     *
     * @ORM\Column(name="territory", type="string", length=100)
     */
    private $territory;

    /**
     * @var int
     *
     * @ORM\Column(name="municipalityCode", type="integer")
     */
    private $municipalityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="municipality", type="string", length=255)
     */
    private $municipality;

    /**
     * @var string
     *
     * @ORM\Column(name="placename", type="string", length=255)
     */
    private $placename;

    /**
     * @var string
     *
     * @ORM\Column(name="friendlyUrl", type="string", length=255)
     */
    private $friendlyUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="physicalUrl", type="string", length=255)
     */
    private $physicalUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="dataXML", type="string", length=255)
     */
    private $dataXML;

    /**
     * @var string
     *
     * @ORM\Column(name="metadataXML", type="string", length=255)
     */
    private $metadataXML;

    /**
     * @var string
     *
     * @ORM\Column(name="zipFile", type="string", length=255)
     */
    private $zipFile;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set documentName
     *
     * @param string $documentName
     *
     * @return Row
     */
    public function setDocumentName($documentName)
    {
        $this->documentName = $documentName;

        return $this;
    }

    /**
     * Get documentName
     *
     * @return string
     */
    public function getDocumentName()
    {
        return $this->documentName;
    }

    /**
     * Set eventCountry
     *
     * @param integer $eventCountry
     *
     * @return Row
     */
    public function setEventCountry($eventCountry)
    {
        $this->eventCountry = $eventCountry;

        return $this;
    }

    /**
     * Get eventCountry
     *
     * @return int
     */
    public function getEventCountry()
    {
        return $this->eventCountry;
    }

    /**
     * Set eventCountryName
     *
     * @param string $eventCountryName
     *
     * @return Row
     */
    public function setEventCountryName($eventCountryName)
    {
        $this->eventCountryName = $eventCountryName;

        return $this;
    }

    /**
     * Get eventCountryName
     *
     * @return string
     */
    public function getEventCountryName()
    {
        return $this->eventCountryName;
    }

    /**
     * Set eventLanguages
     *
     * @param \DateTime $eventLanguages
     *
     * @return Row
     */
    public function setEventLanguages($eventLanguages)
    {
        $this->eventLanguages = $eventLanguages;

        return $this;
    }

    /**
     * Get eventLanguages
     *
     * @return \DateTime
     */
    public function getEventLanguages()
    {
        return $this->eventLanguages;
    }

    /**
     * Set eventPrice
     *
     * @param string $eventPrice
     *
     * @return Row
     */
    public function setEventPrice($eventPrice)
    {
        $this->eventPrice = $eventPrice;

        return $this;
    }

    /**
     * Get eventPrice
     *
     * @return string
     */
    public function getEventPrice()
    {
        return $this->eventPrice;
    }

    /**
     * Set eventRegistrationEndDate
     *
     * @param \DateTime $eventRegistrationEndDate
     *
     * @return Row
     */
    public function setEventRegistrationEndDate($eventRegistrationEndDate)
    {
        $this->eventRegistrationEndDate = $eventRegistrationEndDate;

        return $this;
    }

    /**
     * Get eventRegistrationEndDate
     *
     * @return \DateTime
     */
    public function getEventRegistrationEndDate()
    {
        return $this->eventRegistrationEndDate;
    }

    /**
     * Set eventRegistrationStartDate
     *
     * @param \DateTime $eventRegistrationStartDate
     *
     * @return Row
     */
    public function setEventRegistrationStartDate($eventRegistrationStartDate)
    {
        $this->eventRegistrationStartDate = $eventRegistrationStartDate;

        return $this;
    }

    /**
     * Get eventRegistrationStartDate
     *
     * @return \DateTime
     */
    public function getEventRegistrationStartDate()
    {
        return $this->eventRegistrationStartDate;
    }

    /**
     * Set eventStartDate
     *
     * @param \DateTime $eventStartDate
     *
     * @return Row
     */
    public function setEventStartDate($eventStartDate)
    {
        $this->eventStartDate = $eventStartDate;

        return $this;
    }

    /**
     * Get eventStartDate
     *
     * @return \DateTime
     */
    public function getEventStartDate()
    {
        return $this->eventStartDate;
    }

    /**
     * Set eventTerritory
     *
     * @param integer $eventTerritory
     *
     * @return Row
     */
    public function setEventTerritory($eventTerritory)
    {
        $this->eventTerritory = $eventTerritory;

        return $this;
    }

    /**
     * Get eventTerritory
     *
     * @return int
     */
    public function getEventTerritory()
    {
        return $this->eventTerritory;
    }

    /**
     * Set eventTerritoryName
     *
     * @param string $eventTerritoryName
     *
     * @return Row
     */
    public function setEventTerritoryName($eventTerritoryName)
    {
        $this->eventTerritoryName = $eventTerritoryName;

        return $this;
    }

    /**
     * Get eventTerritoryName
     *
     * @return string
     */
    public function getEventTerritoryName()
    {
        return $this->eventTerritoryName;
    }

    /**
     * Set eventTown
     *
     * @param integer $eventTown
     *
     * @return Row
     */
    public function setEventTown($eventTown)
    {
        $this->eventTown = $eventTown;

        return $this;
    }

    /**
     * Get eventTown
     *
     * @return int
     */
    public function getEventTown()
    {
        return $this->eventTown;
    }

    /**
     * Set eventTownName
     *
     * @param string $eventTownName
     *
     * @return Row
     */
    public function setEventTownName($eventTownName)
    {
        $this->eventTownName = $eventTownName;

        return $this;
    }

    /**
     * Get eventTownName
     *
     * @return string
     */
    public function getEventTownName()
    {
        return $this->eventTownName;
    }

    /**
     * Set eventType
     *
     * @param string $eventType
     *
     * @return Row
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * Get eventType
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set latitudelongitude
     *
     * @param string $latitudelongitude
     *
     * @return Row
     */
    public function setLatitudelongitude($latitudelongitude)
    {
        $this->latitudelongitude = $latitudelongitude;

        return $this;
    }

    /**
     * Get latitudelongitude
     *
     * @return string
     */
    public function getLatitudelongitude()
    {
        return $this->latitudelongitude;
    }

    /**
     * Set countryCode
     *
     * @param integer $countryCode
     *
     * @return Row
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Get countryCode
     *
     * @return int
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Row
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set territoryCode
     *
     * @param integer $territoryCode
     *
     * @return Row
     */
    public function setTerritoryCode($territoryCode)
    {
        $this->territoryCode = $territoryCode;

        return $this;
    }

    /**
     * Get territoryCode
     *
     * @return int
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Set territory
     *
     * @param string $territory
     *
     * @return Row
     */
    public function setTerritory($territory)
    {
        $this->territory = $territory;

        return $this;
    }

    /**
     * Get territory
     *
     * @return string
     */
    public function getTerritory()
    {
        return $this->territory;
    }

    /**
     * Set municipalityCode
     *
     * @param integer $municipalityCode
     *
     * @return Row
     */
    public function setMunicipalityCode($municipalityCode)
    {
        $this->municipalityCode = $municipalityCode;

        return $this;
    }

    /**
     * Get municipalityCode
     *
     * @return int
     */
    public function getMunicipalityCode()
    {
        return $this->municipalityCode;
    }

    /**
     * Set municipality
     *
     * @param string $municipality
     *
     * @return Row
     */
    public function setMunicipality($municipality)
    {
        $this->municipality = $municipality;

        return $this;
    }

    /**
     * Get municipality
     *
     * @return string
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }

    /**
     * Set placename
     *
     * @param string $placename
     *
     * @return Row
     */
    public function setPlacename($placename)
    {
        $this->placename = $placename;

        return $this;
    }

    /**
     * Get placename
     *
     * @return string
     */
    public function getPlacename()
    {
        return $this->placename;
    }

    /**
     * Set friendlyUrl
     *
     * @param string $friendlyUrl
     *
     * @return Row
     */
    public function setFriendlyUrl($friendlyUrl)
    {
        $this->friendlyUrl = $friendlyUrl;

        return $this;
    }

    /**
     * Get friendlyUrl
     *
     * @return string
     */
    public function getFriendlyUrl()
    {
        return $this->friendlyUrl;
    }

    /**
     * Set physicalUrl
     *
     * @param string $physicalUrl
     *
     * @return Row
     */
    public function setPhysicalUrl($physicalUrl)
    {
        $this->physicalUrl = $physicalUrl;

        return $this;
    }

    /**
     * Get physicalUrl
     *
     * @return string
     */
    public function getPhysicalUrl()
    {
        return $this->physicalUrl;
    }

    /**
     * Set dataXML
     *
     * @param string $dataXML
     *
     * @return Row
     */
    public function setDataXML($dataXML)
    {
        $this->dataXML = $dataXML;

        return $this;
    }

    /**
     * Get dataXML
     *
     * @return string
     */
    public function getDataXML()
    {
        return $this->dataXML;
    }

    /**
     * Set metadataXML
     *
     * @param string $metadataXML
     *
     * @return Row
     */
    public function setMetadataXML($metadataXML)
    {
        $this->metadataXML = $metadataXML;

        return $this;
    }

    /**
     * Get metadataXML
     *
     * @return string
     */
    public function getMetadataXML()
    {
        return $this->metadataXML;
    }

    /**
     * Set zipFile
     *
     * @param string $zipFile
     *
     * @return Row
     */
    public function setZipFile($zipFile)
    {
        $this->zipFile = $zipFile;

        return $this;
    }

    /**
     * Get zipFile
     *
     * @return string
     */
    public function getZipFile()
    {
        return $this->zipFile;
    }
}

