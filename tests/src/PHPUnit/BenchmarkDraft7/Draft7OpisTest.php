<?php

namespace Swaggest\JsonSchemaBench\Tests\PHPUnit\BenchmarkDraft7;

use Opis\JsonSchema\Loaders\Memory;
use Opis\JsonSchema\Schema;
use Opis\JsonSchema\Validator;
use Swaggest\JsonSchemaBench\Tests\PHPUnit\Spec\Draft7Test;

class Draft7OpisTest extends Draft7Test
{
    private static function getLoader()
    {
        static $schemaStorage;

        if ($schemaStorage === null) {
            $schemaStorage = new Memory();

            $schemaStorage->add(
                json_decode(file_get_contents(__DIR__
                    . '/../../../../spec/json-schema-draft6.json')),
                'http://json-schema.org/draft-06/schema');
            $schemaStorage->add(
                json_decode(file_get_contents(__DIR__
                    . '/../../../../spec/json-schema-draft7.json')),
                'http://json-schema.org/draft-07/schema');


            $schemaStorage->add(
                json_decode(file_get_contents(__DIR__
                    . '/../../../../spec/JSON-Schema-Test-Suite/remotes/integer.json')),
                'http://localhost:1234/integer.json');
            $schemaStorage->add(
                json_decode(file_get_contents(__DIR__
                    . '/../../../../spec/JSON-Schema-Test-Suite/remotes/subSchemas.json')),
                'http://localhost:1234/subSchemas.json');
            $schemaStorage->add(
                json_decode(file_get_contents(__DIR__
                    . '/../../../../spec/JSON-Schema-Test-Suite/remotes/name.json')),
                'http://localhost:1234/name.json');
            $schemaStorage->add(
                json_decode(file_get_contents(__DIR__
                    . '/../../../../spec/JSON-Schema-Test-Suite/remotes/folder/folderInteger.json')),
                'http://localhost:1234/folder/folderInteger.json');
        }

        return $schemaStorage;
    }

    /** @var \SplObjectStorage */
    private $schemasCache;

    /** @var Validator */
    private $validator;

    protected function setUp()
    {
        $this->schemasCache = new \SplObjectStorage();
        $this->validator = new Validator(null, self::getLoader());
    }

    /**
     * @param $schemaData
     * @param $data
     * @param $isValid
     * @param $name
     * @param $version
     * @throws \Exception
     */
    protected function runSpecTest($schemaData, $data, $isValid, $name, $version)
    {
        if (false && is_object($schemaData)) {
            if ($this->schemasCache->contains($schemaData)) {
                $schema = $this->schemasCache->offsetGet($schemaData);
            } else {
                $schema = new Schema($schemaData);
                $this->schemasCache->attach($schemaData, $schema);
            }
        } else {
            $schema = new Schema($schemaData);
        }
        $result = $this->validator->schemaValidation($data, $schema);

        $actualValid = $result->isValid();

        $this->assertSame($isValid, $actualValid, "Test: $name");
    }
}