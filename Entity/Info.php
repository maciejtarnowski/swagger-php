<?php
/**
 * File Info.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace Epfremmer\SwaggerBundle\Entity;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Info
 *
 * @package Epfremmer\SwaggerBundle
 * @subpackage Entity
 */
class Info
{

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("title")
     * @var string
     */
    protected $title;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     * @var string
     */
    protected $description;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("termsOfService")
     * @var string
     */
    protected $termsOfService;

    /**
     * @JMS\Type("Epfremmer\SwaggerBundle\Entity\Contact")
     * @JMS\SerializedName("contact")
     * @var Contact
     */
    protected $contact;

    /**
     * @JMS\Type("Epfremmer\SwaggerBundle\Entity\License")
     * @JMS\SerializedName("license")
     * @var License
     */
    protected $license;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("version")
     * @var string
     */
    protected $version;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Info
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Info
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfService()
    {
        return $this->termsOfService;
    }

    /**
     * @param string $termsOfService
     * @return Info
     */
    public function setTermsOfService($termsOfService)
    {
        $this->termsOfService = $termsOfService;
        return $this;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     * @return Info
     */
    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @return License
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * @param License $license
     * @return Info
     */
    public function setLicense(License $license)
    {
        $this->license = $license;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return Info
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}