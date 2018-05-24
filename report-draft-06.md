## Mandatory spec tests for draft-06
|Test                                                                                               |Opis     |Swaggest|
|---------------------------------------------------------------------------------------------------|---------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |135.21   |100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |195.56   |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |172.02   |100     |
|testSpec:additionalItems.json additionalItems as false without items                               |107.94   |100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |167.53   |100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|124.73   |100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |141.97   |100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |111      |100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |147.32   |100     |
|testSpec:allOf.json allOf                                                                          |114.1    |100     |
|testSpec:allOf.json allOf with base schema                                                         |123.29   |100     |
|testSpec:allOf.json allOf simple types                                                             |146.71   |100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |104.08   |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100      |264.6   |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100      |251.24  |
|testSpec:anyOf.json anyOf                                                                          |134.36   |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100      |128.56  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |126.51   |100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |140.84   |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100      |429.6   |
|testSpec:anyOf.json anyOf complex types                                                            |103.67   |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100      |122.61  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100      |226.36  |
|testSpec:const.json const validation                                                               |100      |134.66  |
|testSpec:const.json const with object                                                              |100      |156.3   |
|testSpec:const.json const with array                                                               |100      |172.63  |
|testSpec:const.json const with null                                                                |100      |121.38  |
|testSpec:contains.json contains keyword validation                                                 |100      |117.27  |
|testSpec:contains.json contains keyword with const keyword                                         |100      |137.49  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100      |108.38  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100      |146.47  |
|testSpec:default.json invalid type for default                                                     |-        |100     |
|testSpec:default.json invalid string value for default                                             |-        |100     |
|testSpec:definitions.json valid definition                                                         |167982.93|100     |
|testSpec:definitions.json invalid definition                                                       |67803.89 |100     |
|testSpec:dependencies.json dependencies                                                            |101.26   |100     |
|testSpec:dependencies.json dependencies with empty array                                           |127.55   |100     |
|testSpec:dependencies.json multiple dependencies                                                   |100      |133.21  |
|testSpec:dependencies.json multiple dependencies subschema                                         |100      |105.11  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100      |247.17  |
|testSpec:enum.json simple enum validation                                                          |100      |120.49  |
|testSpec:enum.json heterogeneous enum validation                                                   |100      |124.01  |
|testSpec:enum.json enums in properties                                                             |127.62   |100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |114.93   |100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |112.69   |100     |
|testSpec:items.json a schema given for items                                                       |122.44   |100     |
|testSpec:items.json an array of schemas for items                                                  |131.06   |100     |
|testSpec:items.json items with boolean schema (true)                                               |100      |115.48  |
|testSpec:items.json items with boolean schema (false)                                              |100      |216.89  |
|testSpec:items.json items with boolean schemas                                                     |100      |166     |
|testSpec:maximum.json maximum validation                                                           |157.39   |100     |
|testSpec:maxItems.json maxItems validation                                                         |104.16   |100     |
|testSpec:maxLength.json maxLength validation                                                       |119.93   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |101.19   |100     |
|testSpec:minimum.json minimum validation                                                           |147.1    |100     |
|testSpec:minItems.json minItems validation                                                         |103.03   |100     |
|testSpec:minLength.json minLength validation                                                       |112.28   |100     |
|testSpec:minProperties.json minProperties validation                                               |119.67   |100     |
|testSpec:multipleOf.json by int                                                                    |132.6    |100     |
|testSpec:multipleOf.json by number                                                                 |153.13   |100     |
|testSpec:multipleOf.json by small number                                                           |172.15   |100     |
|testSpec:not.json not                                                                              |100      |140.79  |
|testSpec:not.json not multiple types                                                               |100      |142.94  |
|testSpec:not.json not more complex schema                                                          |100      |140.6   |
|testSpec:not.json forbidden property                                                               |100      |128.45  |
|testSpec:not.json not with boolean schema true                                                     |100      |141     |
|testSpec:not.json not with boolean schema false                                                    |100      |276.07  |
|testSpec:oneOf.json oneOf                                                                          |114.56   |100     |
|testSpec:oneOf.json oneOf with base schema                                                         |105.09   |100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100      |170.27  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100      |389.91  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100      |162.37  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100      |567.98  |
|testSpec:oneOf.json oneOf complex types                                                            |100      |104.4   |
|testSpec:pattern.json pattern validation                                                           |100      |108.26  |
|testSpec:pattern.json pattern is not anchored                                                      |144.47   |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |101.28   |100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |100      |101.86  |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100      |130.66  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100      |209.03  |
|testSpec:properties.json object properties validation                                              |114.51   |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |112.42   |100     |
|testSpec:properties.json properties with boolean schema                                            |100      |208.89  |
|testSpec:propertyNames.json propertyNames validation                                               |134      |100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |121.03   |100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100      |176.76  |
|testSpec:ref.json root pointer ref                                                                 |164.42   |100     |
|testSpec:ref.json relative pointer ref to object                                                   |153.66   |100     |
|testSpec:ref.json relative pointer ref to array                                                    |180.97   |100     |
|testSpec:ref.json escaped pointer ref                                                              |160.5    |100     |
|testSpec:ref.json nested refs                                                                      |292.34   |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |154.88   |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |46349.43 |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100      |101.52  |
|testSpec:ref.json $ref to boolean schema true                                                      |185.16   |100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100      |254.69  |
|testSpec:ref.json Recursive references between schemas                                             |255.27   |100     |
|testSpec:refRemote.json remote ref                                                                 |208.31   |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |223.36   |100     |
|testSpec:refRemote.json ref within remote ref                                                      |286.8    |100     |
|testSpec:refRemote.json base URI change                                                            |208.52   |100     |
|testSpec:refRemote.json base URI change - change folder                                            |216.73   |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |245.68   |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |181.97   |100     |
|testSpec:required.json required validation                                                         |122.46   |100     |
|testSpec:required.json required default validation                                                 |158.54   |100     |
|testSpec:required.json required with empty array                                                   |154.89   |100     |
|testSpec:type.json integer type matches integers                                                   |100      |145.17  |
|testSpec:type.json number type matches numbers                                                     |100      |126.54  |
|testSpec:type.json string type matches strings                                                     |100      |132.01  |
|testSpec:type.json object type matches objects                                                     |100      |134.24  |
|testSpec:type.json array type matches arrays                                                       |100      |148.18  |
|testSpec:type.json boolean type matches booleans                                                   |100      |143.99  |
|testSpec:type.json null type matches only the null object                                          |100      |146.19  |
|testSpec:type.json multiple types can be specified in an array                                     |100      |108.35  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100      |103.21  |
|Total time for common passed                                                                       |1878.05  |100     |
|Total time for all tests (with failed)                                                             |1866.1   |100     |
|Tests passed (total: 116)                                                                          |114      |116     |
|Tests passed, %                                                                                    |98.28    |100     |


## Optional spec tests for draft-06
|Test                                                                                                                 |Opis    |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|--------|--------|
|testSpecOptional:bignum.json integer                                                                                 |240.82  |100     |
|testSpecOptional:bignum.json number                                                                                  |254.95  |100     |
|testSpecOptional:bignum.json string                                                                                  |100     |112.34  |
|testSpecOptional:bignum.json integer comparison                                                                      |253.84  |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100     |102.89  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100     |109.3   |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100     |113.32  |
|testSpecOptional:format.json validation of date-time strings                                                         |100     |111.4   |
|testSpecOptional:format.json validation of URIs                                                                      |132.04  |100     |
|testSpecOptional:format.json validation of URI References                                                            |126.33  |100     |
|testSpecOptional:format.json format                                                                                  |100     |119.19  |
|testSpecOptional:format.json validation of e-mail addresses                                                          |112.82  |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |100     |108.72  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |100     |104.32  |
|testSpecOptional:format.json validation of host names                                                                |14443.92|100     |
|testSpecOptional:format.json validation of JSON-pointers (JSON String Representation)                                |116.5   |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|237.86  |100     |
|Total time for common passed                                                                                         |883.63  |100     |
|Total time for all tests (with failed)                                                                               |883.63  |100     |
|Tests passed (total: 17)                                                                                             |17      |17      |
|Tests passed, %                                                                                                      |100     |100     |


