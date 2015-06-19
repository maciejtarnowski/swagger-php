<?php
/**
 * File BooleanSchemaTest.php
 *
 * @author Edward Pfremmer <epfremme@nerdery.com>
 */
namespace ERP\Swagger\Tests\Entity\Schemas;

use ERP\Swagger\Entity\ExternalDocumentation;
use ERP\Swagger\Entity\Schemas\AbstractSchema;
use ERP\Swagger\Entity\Schemas\BooleanSchema;
use ERP\Swagger\Tests\Mixin\SerializerContextTrait;

/**
 * Class BooleanSchemaTest
 *
 * @package ERP\Swagger
 * @subpackage Tests\Entity\Schemas
 */
class BooleanSchemaTest extends \PHPUnit_Framework_TestCase
{
    use SerializerContextTrait;

    /**
     * @var BooleanSchema
     */
    protected $booleanSchema;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->booleanSchema = new BooleanSchema();
    }

    /**
     * @covers ERP\Swagger\Entity\Schemas\BooleanSchema::getType
     */
    public function testType()
    {
        $this->assertNotEmpty($this->booleanSchema->getType());
        $this->assertEquals(AbstractSchema::BOOLEAN_TYPE, $this->booleanSchema->getType());
    }

    /**
     * @covers ERP\Swagger\Entity\Schemas\BooleanSchema
     */
    public function testSerialization()
    {
        $data = json_encode([
            'type' => AbstractSchema::BOOLEAN_TYPE,
            'format'      => 'foo',
            'title'       => 'bar',
            'description' => 'baz',
            'example'     => 'qux',
            'externalDocs' => (object)[],
        ]);

        $schema = $this->getSerializer()->deserialize($data, AbstractSchema::class, 'json');

        $this->assertInstanceOf(BooleanSchema::class, $schema);
        $this->assertAttributeEquals('foo', 'format', $schema);
        $this->assertAttributeEquals('bar', 'title', $schema);
        $this->assertAttributeEquals('baz', 'description', $schema);
        $this->assertAttributeEquals('qux', 'example', $schema);
        $this->assertAttributeInstanceOf(ExternalDocumentation::class, 'externalDocs', $schema);

        $json = $this->getSerializer()->serialize($schema, 'json');

        $this->assertJson($json);
        $this->assertJsonStringEqualsJsonString($data, $json);
    }
}
