<?php
/**
 * File Examples.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace Epfremmer\SwaggerBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as JMS;

/**
 * Class Examples
 *
 * @package Epfremmer\SwaggerBundle
 * @subpackage Entity
 */
class Examples
{

    /**
     * @JMS\Inline()
     * @JMS\SerializedName("data")
     * @JMS\Type("ArrayCollection<string,array>")
     *
     * @var ArrayCollection
     */
    protected $examples;

    /**
     * @return ArrayCollection
     */
    public function getExamples()
    {
        return $this->examples;
    }

    /**
     * @param ArrayCollection $examples
     * @return Examples
     */
    public function setExamples(ArrayCollection $examples)
    {
        $this->examples = $examples;
        return $this;
    }
}