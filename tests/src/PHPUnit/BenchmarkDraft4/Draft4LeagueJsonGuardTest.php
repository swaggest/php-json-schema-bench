<?php

namespace Swaggest\JsonSchemaBench\Tests\PHPUnit\BenchmarkDraft4;


use League\JsonGuard\Validator;
use League\JsonReference\Loader\ArrayLoader;
use League\JsonReference\LoaderManager;
use Swaggest\JsonSchemaBench\Tests\PHPUnit\Spec\Draft4Test;

class Draft4LeagueJsonGuardTest extends Draft4Test
{
    /*
    public function specOptionalProvider()
    {
        return array();
    }
    */

    private static function getDereferencer()
    {
        static $dereferencer;

        if ($dereferencer === null) {
            $schemas = array(
                'localhost:1234/integer.json' =>
                    json_decode(file_get_contents(__DIR__
                        . '/../../../../spec/JSON-Schema-Test-Suite/remotes/integer.json')),
                'localhost:1234/subSchemas.json' =>
                    json_decode(file_get_contents(__DIR__
                        . '/../../../../spec/JSON-Schema-Test-Suite/remotes/subSchemas.json')),
                'localhost:1234/name.json' =>
                    json_decode(file_get_contents(__DIR__
                        . '/../../../../spec/JSON-Schema-Test-Suite/remotes/name.json')),
                'localhost:1234/folder/folderInteger.json' =>
                    json_decode(file_get_contents(__DIR__
                        . '/../../../../spec/JSON-Schema-Test-Suite/remotes/folder/folderInteger.json')),

                'json-schema.org/draft-04/schema' =>
                    json_decode(file_get_contents(__DIR__
                        . '/../../../../spec/json-schema.json')),

            );
            $dereferencer = \League\JsonReference\Dereferencer::draft4();
            $lm = new LoaderManager(array('http' => new ArrayLoader($schemas)));
            $dereferencer->setLoaderManager($lm);
        }

        return $dereferencer;
    }

    protected function skipTest($name)
    {
        static $skip = array(
            // PHP Fatal error:  Maximum function nesting level of '256' reached, aborting!
            'refRemote.json root ref in remote ref: string is valid [0]' => true,

            // PHP Fatal error:  Maximum function nesting level of '256' reached, aborting!
            'refRemote.json root ref in remote ref: object is invalid [2]' => true,
        );
        return isset($skip[$name]);
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
        $actualValid = null;

        try {
            $schemaData = self::getDereferencer()->dereference($schemaData);
            $validator = new Validator($data, $schemaData);
            $actualValid = $validator->passes();
        } catch (\Exception $e) {
        }

        $this->assertSame($isValid, $actualValid, "Test: $name");
    }
}