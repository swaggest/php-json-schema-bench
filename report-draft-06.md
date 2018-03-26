## Mandatory spec tests for draft-06
|Test                                                                                               |Opis     |Swaggest|
|---------------------------------------------------------------------------------------------------|---------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |152.36   |100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |250.37   |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |209.18   |100     |
|testSpec:additionalItems.json additionalItems as false without items                               |145.51   |100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |175.45   |100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|145.04   |100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |165.4    |100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |138.67   |100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |145.17   |100     |
|testSpec:allOf.json allOf                                                                          |152.14   |100     |
|testSpec:allOf.json allOf with base schema                                                         |142.9    |100     |
|testSpec:allOf.json allOf simple types                                                             |198.41   |100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |161.52   |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100      |186.83  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100      |189.09  |
|testSpec:anyOf.json anyOf                                                                          |163.18   |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100      |109.89  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |175.99   |100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |163.88   |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100      |364.34  |
|testSpec:anyOf.json anyOf complex types                                                            |125.54   |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |863.85   |100     |
|testSpec:boolean_schema.json boolean schema 'false'                                                |410.93   |100     |
|testSpec:const.json const validation                                                               |104.15   |100     |
|testSpec:const.json const with object                                                              |100      |138.4   |
|testSpec:const.json const with array                                                               |100      |142.23  |
|testSpec:const.json const with null                                                                |112.24   |100     |
|testSpec:contains.json contains keyword validation                                                 |101      |100     |
|testSpec:contains.json contains keyword with const keyword                                         |100      |123.42  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100      |108.59  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100      |101.03  |
|testSpec:default.json invalid type for default                                                     |-        |100     |
|testSpec:default.json invalid string value for default                                             |-        |100     |
|testSpec:definitions.json valid definition                                                         |211009.82|100     |
|testSpec:definitions.json invalid definition                                                       |67850.47 |100     |
|testSpec:dependencies.json dependencies                                                            |128.96   |100     |
|testSpec:dependencies.json dependencies with empty array                                           |166.24   |100     |
|testSpec:dependencies.json multiple dependencies                                                   |100      |101.3   |
|testSpec:dependencies.json multiple dependencies subschema                                         |107.56   |100     |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100      |205.05  |
|testSpec:enum.json simple enum validation                                                          |128.83   |100     |
|testSpec:enum.json heterogeneous enum validation                                                   |139.4    |100     |
|testSpec:enum.json enums in properties                                                             |162.32   |100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |161.03   |100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |150.87   |100     |
|testSpec:items.json a schema given for items                                                       |149.66   |100     |
|testSpec:items.json an array of schemas for items                                                  |176.56   |100     |
|testSpec:items.json items with boolean schema (true)                                               |105.22   |100     |
|testSpec:items.json items with boolean schema (false)                                              |100      |172.2   |
|testSpec:items.json items with boolean schemas                                                     |100      |134.41  |
|testSpec:maximum.json maximum validation                                                           |186.18   |100     |
|testSpec:maxItems.json maxItems validation                                                         |136.88   |100     |
|testSpec:maxLength.json maxLength validation                                                       |145.96   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |149.77   |100     |
|testSpec:minimum.json minimum validation                                                           |210.22   |100     |
|testSpec:minItems.json minItems validation                                                         |152.01   |100     |
|testSpec:minLength.json minLength validation                                                       |119.79   |100     |
|testSpec:minProperties.json minProperties validation                                               |146.72   |100     |
|testSpec:multipleOf.json by int                                                                    |185.91   |100     |
|testSpec:multipleOf.json by number                                                                 |214.16   |100     |
|testSpec:multipleOf.json by small number                                                           |235.7    |100     |
|testSpec:not.json not                                                                              |100      |122.08  |
|testSpec:not.json not multiple types                                                               |100      |112.29  |
|testSpec:not.json not more complex schema                                                          |100      |114.36  |
|testSpec:not.json forbidden property                                                               |101.21   |100     |
|testSpec:not.json not with boolean schema true                                                     |100      |110.31  |
|testSpec:not.json not with boolean schema false                                                    |100      |220.29  |
|testSpec:oneOf.json oneOf                                                                          |136.69   |100     |
|testSpec:oneOf.json oneOf with base schema                                                         |131.52   |100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100      |104.31  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100      |313.67  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100      |108.91  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100      |487.06  |
|testSpec:oneOf.json oneOf complex types                                                            |113.23   |100     |
|testSpec:pattern.json pattern validation                                                           |123.99   |100     |
|testSpec:pattern.json pattern is not anchored                                                      |163.11   |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |118.77   |100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |117.8    |100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100      |107.84  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100      |163.24  |
|testSpec:properties.json object properties validation                                              |138.72   |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |129.9    |100     |
|testSpec:properties.json properties with boolean schema                                            |100      |146.09  |
|testSpec:propertyNames.json propertyNames validation                                               |157.97   |100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |148.69   |100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100      |136.23  |
|testSpec:ref.json root pointer ref                                                                 |194.05   |100     |
|testSpec:ref.json relative pointer ref to object                                                   |234.83   |100     |
|testSpec:ref.json relative pointer ref to array                                                    |231.84   |100     |
|testSpec:ref.json escaped pointer ref                                                              |202.9    |100     |
|testSpec:ref.json nested refs                                                                      |325.81   |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |177.7    |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |61669.9  |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |118.05   |100     |
|testSpec:ref.json $ref to boolean schema true                                                      |210.38   |100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100      |148     |
|testSpec:ref.json Recursive references between schemas                                             |282.9    |100     |
|testSpec:refRemote.json remote ref                                                                 |330.76   |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |322.2    |100     |
|testSpec:refRemote.json ref within remote ref                                                      |326.78   |100     |
|testSpec:refRemote.json base URI change                                                            |218.96   |100     |
|testSpec:refRemote.json base URI change - change folder                                            |319.2    |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |308.18   |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |211.77   |100     |
|testSpec:required.json required validation                                                         |144.55   |100     |
|testSpec:required.json required default validation                                                 |183.98   |100     |
|testSpec:required.json required with empty array                                                   |242.05   |100     |
|testSpec:type.json integer type matches integers                                                   |100      |117.94  |
|testSpec:type.json number type matches numbers                                                     |100      |112.1   |
|testSpec:type.json string type matches strings                                                     |101.32   |100     |
|testSpec:type.json object type matches objects                                                     |100      |107.23  |
|testSpec:type.json array type matches arrays                                                       |100      |103.94  |
|testSpec:type.json boolean type matches booleans                                                   |100      |109.91  |
|testSpec:type.json null type matches only the null object                                          |100      |103.88  |
|testSpec:type.json multiple types can be specified in an array                                     |110.93   |100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |107.8    |100     |
|Total time for common passed                                                                       |2141.42  |100     |
|Total time for all tests (with failed)                                                             |2125.99  |100     |
|Tests passed (total: 116)                                                                          |114      |116     |
|Tests passed, %                                                                                    |98.28    |100     |


## Optional spec tests for draft-06
|Test                                                                                                                 |Opis    |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|--------|--------|
|testSpecOptional:bignum.json integer                                                                                 |281.64  |100     |
|testSpecOptional:bignum.json number                                                                                  |307.51  |100     |
|testSpecOptional:bignum.json string                                                                                  |111.32  |100     |
|testSpecOptional:bignum.json integer comparison                                                                      |249.6   |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |107.92  |100     |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |102.18  |100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-       |100     |
|testSpecOptional:format.json validation of date-time strings                                                         |122.59  |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-       |100     |
|testSpecOptional:format.json validation of URI References                                                            |-       |100     |
|testSpecOptional:format.json format                                                                                  |-       |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |130.8   |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |132.76  |100     |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |121.53  |100     |
|testSpecOptional:format.json validation of host names                                                                |15637.76|100     |
|testSpecOptional:format.json validation of JSON-pointers (JSON String Representation)                                |156.65  |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|308.6   |100     |
|Total time for common passed                                                                                         |1361.99 |100     |
|Total time for all tests (with failed)                                                                               |877.75  |100     |
|Tests passed (total: 17)                                                                                             |13      |17      |
|Tests passed, %                                                                                                      |76.47   |100     |


