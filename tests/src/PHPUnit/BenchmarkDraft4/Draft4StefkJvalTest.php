<?php

namespace Swaggest\JsonSchemaBench\Tests\PHPUnit\BenchmarkDraft4;

use Swaggest\JsonSchemaBench\Tests\PHPUnit\Spec\Draft4Test;

class Draft4StefkJvalTest extends Draft4Test
{
    /*
    public function specOptionalProvider()
    {
        return array();
    }
    */

    private static function getPrefetchHook()
    {
        static $hook;


        if ($hook === null) {
            $remotes = realpath(__DIR__ . '/../../../../spec/JSON-Schema-Test-Suite/remotes');
            $schemaPath = realpath(__DIR__ . '/../../../../spec/json-schema.json');

            $hook = function ($uri) use ($remotes, $schemaPath) {
                $remotes = realpath(__DIR__ . '/../../../../spec/JSON-Schema-Test-Suite/remotes');
                return str_replace(
                    ['http://localhost:1234', 'http://json-schema.org/draft-04/schema'],
                    ['file://' . $remotes, 'file://' . $schemaPath],
                    $uri
                );
            };
        }

        return $hook;
    }

    /** @var \JVal\Validator */
    private $validator;
    protected function setUp()
    {
        $this->validator = \JVal\Validator::buildDefault(self::getPrefetchHook());
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
        $violations = $this->validator->validate($data, $schemaData);
        $actualValid = empty($violations);

        $this->assertSame($isValid, $actualValid, "Test: $name");
    }
}