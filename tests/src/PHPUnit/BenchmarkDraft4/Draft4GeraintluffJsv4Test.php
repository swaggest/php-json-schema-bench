<?php

namespace Swaggest\JsonSchemaBench\Tests\PHPUnit\BenchmarkDraft4;

use Swaggest\JsonSchemaBench\Tests\PHPUnit\Spec\Draft4Test;

class Draft4GeraintluffJsv4Test extends Draft4Test
{
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
        $actualValid = \Jsv4::isValid($data, $schemaData);

        $this->assertSame($isValid, $actualValid, "Test: $name");
    }
}