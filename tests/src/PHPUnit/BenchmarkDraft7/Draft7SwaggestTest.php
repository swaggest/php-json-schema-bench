<?php

namespace Swaggest\JsonSchemaBench\Tests\PHPUnit\BenchmarkDraft7;

use Swaggest\JsonSchema\InvalidValue;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchemaBench\Tests\PHPUnit\Spec\Draft7Test;

class Draft7SwaggestTest extends Draft7Test
{

    /** @var \SplObjectStorage */
    private $schemas;

    protected function setUp()
    {
        $this->schemas = new \SplObjectStorage();
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
        $actualValid = true;
        try {
            $options = $this->makeOptions($version);
            $options->schemasCache = $this->schemas;

            $schema = Schema::import($schemaData, $options);

            $options->validateOnly = true;
            $schema->in($data, $options);
        } catch (InvalidValue $exception) {
            $actualValid = false;
        }

        $this->assertSame($isValid, $actualValid, "Test: $name");
    }

}