<?php
/**
 * File AnyPrimitiveTrait.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace ERP\Swagger\Entity\Mixin\Primitives;

use Doctrine\Common\Collections\ArrayCollection;
use ERP\Swagger\Entity\Schemas\SchemaInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Trait AnyPrimitive
 *
 * @package ERP\Swagger
 * @subpackage Entity\Schemas\Primitives
 */
trait AnyPrimitiveTrait
{

    /**
     * @JMS\Type("array")
     * @JMS\SerializedName("enum")
     * @var array
     */
    protected $enum;

    /**
     * @JMS\Type("array")
     * @JMS\SerializedName("allOf")
     * @var array
     */
    protected $allOf;

    /**
     * @JMS\Type("array")
     * @JMS\SerializedName("anyOf")
     * @var array
     */
    protected $anyOf;

    /**
     * @JMS\Type("array")
     * @JMS\SerializedName("oneOf")
     * @var array
     */
    protected $oneOf;

    /**
     * @JMS\Type("array")
     * @JMS\SerializedName("not")
     * @var array
     */
    protected $not;

    /**
     * @JMS\Type("ArrayCollection<string,ERP\Swagger\Entity\Schemas\AbstractSchema>")
     * @JMS\Accessor(setter="setDefinitions")
     * @JMS\SerializedName("definitions")
     *
     * @var SchemaInterface[]|ArrayCollection
     */
    protected $definitions;

    /**
     * @return array
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * @param array $enum
     * @return AnyPrimitiveTrait
     */
    public function setEnum($enum)
    {
        $this->enum = $enum;
        return $this;
    }

    /**
     * @return array
     */
    public function getAllOf()
    {
        return $this->allOf;
    }

    /**
     * @param array $allOf
     * @return AnyPrimitiveTrait
     */
    public function setAllOf($allOf)
    {
        $this->allOf = $allOf;
        return $this;
    }

    /**
     * @return array
     */
    public function getAnyOf()
    {
        return $this->anyOf;
    }

    /**
     * @param array $anyOf
     * @return AnyPrimitiveTrait
     */
    public function setAnyOf($anyOf)
    {
        $this->anyOf = $anyOf;
        return $this;
    }

    /**
     * @return array
     */
    public function getOneOf()
    {
        return $this->oneOf;
    }

    /**
     * @param array $oneOf
     * @return AnyPrimitiveTrait
     */
    public function setOneOf($oneOf)
    {
        $this->oneOf = $oneOf;
        return $this;
    }

    /**
     * @return array
     */
    public function getNot()
    {
        return $this->not;
    }

    /**
     * @param array $not
     * @return AnyPrimitiveTrait
     */
    public function setNot($not)
    {
        $this->not = $not;
        return $this;
    }

    /**
     * @return SchemaInterface[]|ArrayCollection
     */
    public function getDefinitions()
    {
        return $this->definitions;
    }

    /**
     * @param SchemaInterface[]|ArrayCollection $definitions
     * @return AnyPrimitiveTrait
     */
    public function setDefinitions(ArrayCollection $definitions)
    {
        $this->definitions = $definitions;
        return $this;
    }
}