<?php
/**
 * File SerializerContextTrait.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace Epfremmer\SwaggerBundle\Tests\Mixin;

use Epfremmer\SwaggerBundle\Listener\SerializationSubscriber;
use JMS\Serializer\EventDispatcher\EventDispatcher;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

/**
 * Class SerializerContextTrait
 *
 * Adds static pre-configured JMS serializer to test class.
 *
 * @package Epfremmer\SwaggerBundle
 * @subpackage Tests\Entity
 */
trait SerializerContextTrait
{

    /**
     * @var Serializer
     */
    protected static $serializer;

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass()
    {
        $builder = SerializerBuilder::create();

        $builder->configureListeners(function(EventDispatcher $eventDispatcher) {
            $eventDispatcher->addSubscriber(new SerializationSubscriber());
        });

        self::$serializer = $builder->build();
    }
}