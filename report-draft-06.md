## Mandatory spec tests for draft-06
|Test                                                                                               |Opis     |Swaggest|
|---------------------------------------------------------------------------------------------------|---------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |167.42   |100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |250.85   |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |213.95   |100     |
|testSpec:additionalItems.json additionalItems as false without items                               |108.63   |100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |187.33   |100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|149.94   |100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |159.84   |100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |127.73   |100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |211.63   |100     |
|testSpec:allOf.json allOf                                                                          |146.44   |100     |
|testSpec:allOf.json allOf with base schema                                                         |175.82   |100     |
|testSpec:allOf.json allOf simple types                                                             |174.32   |100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |169.51   |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100      |109.2   |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100      |105.53  |
|testSpec:anyOf.json anyOf                                                                          |146.29   |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100      |109.63  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |218.64   |100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |201.18   |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100      |171.5   |
|testSpec:anyOf.json anyOf complex types                                                            |128.32   |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |1052.8   |100     |
|testSpec:boolean_schema.json boolean schema 'false'                                                |429.62   |100     |
|testSpec:const.json const validation                                                               |109.46   |100     |
|testSpec:const.json const with object                                                              |100      |122.98  |
|testSpec:const.json const with array                                                               |100      |143.04  |
|testSpec:const.json const with null                                                                |118.4    |100     |
|testSpec:contains.json contains keyword validation                                                 |108.48   |100     |
|testSpec:contains.json contains keyword with const keyword                                         |100      |111.8   |
|testSpec:contains.json contains keyword with boolean schema true                                   |100      |100.56  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100      |104.01  |
|testSpec:default.json invalid type for default                                                     |-        |100     |
|testSpec:default.json invalid string value for default                                             |-        |100     |
|testSpec:definitions.json valid definition                                                         |191945.48|100     |
|testSpec:definitions.json invalid definition                                                       |75433.1  |100     |
|testSpec:dependencies.json dependencies                                                            |124.77   |100     |
|testSpec:dependencies.json dependencies with empty array                                           |198.41   |100     |
|testSpec:dependencies.json multiple dependencies                                                   |105.19   |100     |
|testSpec:dependencies.json multiple dependencies subschema                                         |106.27   |100     |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100      |137.65  |
|testSpec:enum.json simple enum validation                                                          |137.08   |100     |
|testSpec:enum.json heterogeneous enum validation                                                   |134.48   |100     |
|testSpec:enum.json enums in properties                                                             |164.92   |100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |167.34   |100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |152.99   |100     |
|testSpec:items.json a schema given for items                                                       |148.08   |100     |
|testSpec:items.json an array of schemas for items                                                  |184      |100     |
|testSpec:items.json items with boolean schema (true)                                               |179.14   |100     |
|testSpec:items.json items with boolean schema (false)                                              |110.49   |100     |
|testSpec:items.json items with boolean schemas                                                     |114.14   |100     |
|testSpec:maximum.json maximum validation                                                           |194.8    |100     |
|testSpec:maxItems.json maxItems validation                                                         |136.98   |100     |
|testSpec:maxLength.json maxLength validation                                                       |113.11   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |128.99   |100     |
|testSpec:minimum.json minimum validation                                                           |187.53   |100     |
|testSpec:minItems.json minItems validation                                                         |161.26   |100     |
|testSpec:minLength.json minLength validation                                                       |128.44   |100     |
|testSpec:minProperties.json minProperties validation                                               |130.23   |100     |
|testSpec:multipleOf.json by int                                                                    |173.68   |100     |
|testSpec:multipleOf.json by number                                                                 |211.22   |100     |
|testSpec:multipleOf.json by small number                                                           |183.89   |100     |
|testSpec:not.json not                                                                              |128.74   |100     |
|testSpec:not.json not multiple types                                                               |135.42   |100     |
|testSpec:not.json not more complex schema                                                          |127.7    |100     |
|testSpec:not.json forbidden property                                                               |178.01   |100     |
|testSpec:not.json not with boolean schema true                                                     |103.52   |100     |
|testSpec:not.json not with boolean schema false                                                    |100      |102.56  |
|testSpec:oneOf.json oneOf                                                                          |164.65   |100     |
|testSpec:oneOf.json oneOf with base schema                                                         |128.85   |100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100      |127.49  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100      |189.5   |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100      |101.4   |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100      |306.73  |
|testSpec:oneOf.json oneOf complex types                                                            |134.41   |100     |
|testSpec:pattern.json pattern validation                                                           |111.91   |100     |
|testSpec:pattern.json pattern is not anchored                                                      |163.76   |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |133.57   |100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |123.96   |100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100      |107.65  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100      |124.74  |
|testSpec:properties.json object properties validation                                              |125.7    |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |127.53   |100     |
|testSpec:properties.json properties with boolean schema                                            |104.47   |100     |
|testSpec:propertyNames.json propertyNames validation                                               |180.74   |100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |136.24   |100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100      |102.41  |
|testSpec:ref.json root pointer ref                                                                 |237.68   |100     |
|testSpec:ref.json relative pointer ref to object                                                   |189.99   |100     |
|testSpec:ref.json relative pointer ref to array                                                    |275.75   |100     |
|testSpec:ref.json escaped pointer ref                                                              |256.88   |100     |
|testSpec:ref.json nested refs                                                                      |399.51   |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |267.82   |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |130191.91|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |124.04   |100     |
|testSpec:ref.json $ref to boolean schema true                                                      |253.14   |100     |
|testSpec:ref.json $ref to boolean schema false                                                     |107.41   |100     |
|testSpec:ref.json Recursive references between schemas                                             |350.89   |100     |
|testSpec:refRemote.json remote ref                                                                 |235.21   |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |336.56   |100     |
|testSpec:refRemote.json ref within remote ref                                                      |296.19   |100     |
|testSpec:refRemote.json base URI change                                                            |251.34   |100     |
|testSpec:refRemote.json base URI change - change folder                                            |320.35   |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |328.25   |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |256.26   |100     |
|testSpec:required.json required validation                                                         |178.6    |100     |
|testSpec:required.json required default validation                                                 |174.65   |100     |
|testSpec:required.json required with empty array                                                   |184.41   |100     |
|testSpec:type.json integer type matches integers                                                   |105.73   |100     |
|testSpec:type.json number type matches numbers                                                     |108.34   |100     |
|testSpec:type.json string type matches strings                                                     |112.88   |100     |
|testSpec:type.json object type matches objects                                                     |100      |101.46  |
|testSpec:type.json array type matches arrays                                                       |105.9    |100     |
|testSpec:type.json boolean type matches booleans                                                   |106.92   |100     |
|testSpec:type.json null type matches only the null object                                          |100      |106.07  |
|testSpec:type.json multiple types can be specified in an array                                     |115.63   |100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |117.69   |100     |
|Total time for common passed                                                                       |2884.35  |100     |
|Total time for all tests (with failed)                                                             |2865.32  |100     |
|Tests passed (total: 116)                                                                          |114      |116     |
|Tests passed, %                                                                                    |98.28    |100     |


## Optional spec tests for draft-06
|Test                                                                                                                 |Opis    |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|--------|--------|
|testSpecOptional:bignum.json integer                                                                                 |325.81  |100     |
|testSpecOptional:bignum.json number                                                                                  |381.4   |100     |
|testSpecOptional:bignum.json string                                                                                  |107.04  |100     |
|testSpecOptional:bignum.json integer comparison                                                                      |281.35  |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |173.96  |100     |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |118.44  |100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-       |100     |
|testSpecOptional:format.json validation of date-time strings                                                         |147     |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-       |100     |
|testSpecOptional:format.json validation of URI References                                                            |-       |100     |
|testSpecOptional:format.json format                                                                                  |-       |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |114.71  |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |108.44  |100     |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |115.31  |100     |
|testSpecOptional:format.json validation of host names                                                                |17184.27|100     |
|testSpecOptional:format.json validation of JSON-pointers (JSON String Representation)                                |165.29  |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|277.67  |100     |
|Total time for common passed                                                                                         |1434.01 |100     |
|Total time for all tests (with failed)                                                                               |918.92  |100     |
|Tests passed (total: 17)                                                                                             |13      |17      |
|Tests passed, %                                                                                                      |76.47   |100     |


