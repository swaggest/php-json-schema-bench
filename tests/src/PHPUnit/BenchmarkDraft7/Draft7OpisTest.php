<?php

namespace Swaggest\JsonSchemaBench\Tests\PHPUnit\BenchmarkDraft7;

use Opis\JsonSchema\Exception\AbstractSchemaException;
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

    /** @var Schema */
    private $schemaCache;

    /** @var Validator */
    private $validator = null;

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
        if ($this->validator === null) {
            $this->validator = (new Validator())
                ->varsSupport(false)
                ->filtersSupport(false)
                ->mapSupport(false)
                ->setLoader(self::getLoader());

            $this->schemaCache = new Schema($schemaData);
        }

        try {
            $actualValid = $this->validator->schemaValidation($data, $this->schemaCache)->isValid();
        }
        catch (AbstractSchemaException $e) {
            $actualValid = false;
        }

        $this->assertSame($isValid, $actualValid, "Test: $name");
    }
}