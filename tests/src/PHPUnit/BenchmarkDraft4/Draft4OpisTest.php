<?php

namespace Swaggest\JsonSchemaBench\Tests\PHPUnit\BenchmarkDraft4;

use Opis\JsonSchema\Loaders\Memory;
use Opis\JsonSchema\Schema;
use Opis\JsonSchema\Validator;
use Swaggest\JsonSchemaBench\Tests\PHPUnit\Spec\Draft4Test;

class Draft4OpisTest extends Draft4Test
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

    protected function setUp()
    {
        $this->schemasCache = new \SplObjectStorage();
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
        $validator = new Validator(null, self::getLoader());

        if ($this->schemasCache->contains($schemaData)) {
            $schema = $this->schemasCache->offsetGet($schemaData);
        } else {
            $schemaDataFiltered = json_decode(str_replace(['"id":'], ['"$id":'], json_encode($schemaData)));
            $schema = new Schema($schemaDataFiltered);
            $this->schemasCache->attach($schemaData, $schema);
        }
        $result = $validator->schemaValidation($data, $schema);

        $actualValid = $result->isValid();

        $this->assertSame($isValid, $actualValid, "Test: $name");
    }
}