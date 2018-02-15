## Mandatory spec tests for draft-06
|Test                                                                                               |Opis     |Swaggest|
|---------------------------------------------------------------------------------------------------|---------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |170.43   |100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |220.76   |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |211.48   |100     |
|testSpec:additionalItems.json additionalItems as false without items                               |200.44   |100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |218.29   |100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|147.53   |100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |176.31   |100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |128.06   |100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |231.41   |100     |
|testSpec:allOf.json allOf                                                                          |167.62   |100     |
|testSpec:allOf.json allOf with base schema                                                         |156.54   |100     |
|testSpec:allOf.json allOf simple types                                                             |136.3    |100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |124.87   |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100      |113.93  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100      |106.69  |
|testSpec:anyOf.json anyOf                                                                          |180.08   |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100      |105.62  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |156.11   |100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |168.72   |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100      |200.63  |
|testSpec:anyOf.json anyOf complex types                                                            |141.51   |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |1078.2   |100     |
|testSpec:boolean_schema.json boolean schema 'false'                                                |435.58   |100     |
|testSpec:const.json const validation                                                               |112.28   |100     |
|testSpec:const.json const with object                                                              |100      |121.28  |
|testSpec:const.json const with array                                                               |100      |126.68  |
|testSpec:const.json const with null                                                                |100      |122.8   |
|testSpec:contains.json contains keyword validation                                                 |104.78   |100     |
|testSpec:contains.json contains keyword with const keyword                                         |100      |117.48  |
|testSpec:contains.json contains keyword with boolean schema true                                   |113.03   |100     |
|testSpec:contains.json contains keyword with boolean schema false                                  |100      |108.64  |
|testSpec:default.json invalid type for default                                                     |-        |100     |
|testSpec:default.json invalid string value for default                                             |-        |100     |
|testSpec:definitions.json valid definition                                                         |178169.62|100     |
|testSpec:definitions.json invalid definition                                                       |82456.91 |100     |
|testSpec:dependencies.json dependencies                                                            |118.93   |100     |
|testSpec:dependencies.json dependencies with empty array                                           |219.2    |100     |
|testSpec:dependencies.json multiple dependencies                                                   |100.59   |100     |
|testSpec:dependencies.json multiple dependencies subschema                                         |138.53   |100     |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100      |125.74  |
|testSpec:enum.json simple enum validation                                                          |143.68   |100     |
|testSpec:enum.json heterogeneous enum validation                                                   |143.12   |100     |
|testSpec:enum.json enums in properties                                                             |165.17   |100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |176.97   |100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |154.75   |100     |
|testSpec:items.json a schema given for items                                                       |158.88   |100     |
|testSpec:items.json an array of schemas for items                                                  |162.79   |100     |
|testSpec:items.json items with boolean schema (true)                                               |132.09   |100     |
|testSpec:items.json items with boolean schema (false)                                              |102.67   |100     |
|testSpec:items.json items with boolean schemas                                                     |116.72   |100     |
|testSpec:maximum.json maximum validation                                                           |195.88   |100     |
|testSpec:maxItems.json maxItems validation                                                         |133.11   |100     |
|testSpec:maxLength.json maxLength validation                                                       |144.2    |100     |
|testSpec:maxProperties.json maxProperties validation                                               |129.72   |100     |
|testSpec:minimum.json minimum validation                                                           |183.97   |100     |
|testSpec:minItems.json minItems validation                                                         |135.62   |100     |
|testSpec:minLength.json minLength validation                                                       |130.56   |100     |
|testSpec:minProperties.json minProperties validation                                               |145.67   |100     |
|testSpec:multipleOf.json by int                                                                    |169.01   |100     |
|testSpec:multipleOf.json by number                                                                 |228.5    |100     |
|testSpec:multipleOf.json by small number                                                           |216.14   |100     |
|testSpec:not.json not                                                                              |117.44   |100     |
|testSpec:not.json not multiple types                                                               |136.84   |100     |
|testSpec:not.json not more complex schema                                                          |126.52   |100     |
|testSpec:not.json forbidden property                                                               |122.08   |100     |
|testSpec:not.json not with boolean schema true                                                     |100      |118.03  |
|testSpec:not.json not with boolean schema false                                                    |100      |113.14  |
|testSpec:oneOf.json oneOf                                                                          |125.28   |100     |
|testSpec:oneOf.json oneOf with base schema                                                         |133.85   |100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |142.64   |100     |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100      |151.4   |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100      |117.42  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100      |234.41  |
|testSpec:oneOf.json oneOf complex types                                                            |140.93   |100     |
|testSpec:pattern.json pattern validation                                                           |118.63   |100     |
|testSpec:pattern.json pattern is not anchored                                                      |147.09   |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |126.47   |100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |118.34   |100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100      |102.11  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100      |130.66  |
|testSpec:properties.json object properties validation                                              |120.25   |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |117.3    |100     |
|testSpec:properties.json properties with boolean schema                                            |109.3    |100     |
|testSpec:propertyNames.json propertyNames validation                                               |162.91   |100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |128.58   |100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100      |115.13  |
|testSpec:ref.json root pointer ref                                                                 |193.8    |100     |
|testSpec:ref.json relative pointer ref to object                                                   |200.22   |100     |
|testSpec:ref.json relative pointer ref to array                                                    |197.63   |100     |
|testSpec:ref.json escaped pointer ref                                                              |206.37   |100     |
|testSpec:ref.json nested refs                                                                      |238.98   |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |202.76   |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |121860.8 |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |128.67   |100     |
|testSpec:ref.json $ref to boolean schema true                                                      |215.57   |100     |
|testSpec:ref.json $ref to boolean schema false                                                     |113.24   |100     |
|testSpec:ref.json Recursive references between schemas                                             |304.83   |100     |
|testSpec:refRemote.json remote ref                                                                 |320.18   |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |395.93   |100     |
|testSpec:refRemote.json ref within remote ref                                                      |438.8    |100     |
|testSpec:refRemote.json base URI change                                                            |303.14   |100     |
|testSpec:refRemote.json base URI change - change folder                                            |326.52   |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |326.15   |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |232.58   |100     |
|testSpec:required.json required validation                                                         |156.59   |100     |
|testSpec:required.json required default validation                                                 |200.54   |100     |
|testSpec:required.json required with empty array                                                   |187.98   |100     |
|testSpec:type.json integer type matches integers                                                   |100      |112.4   |
|testSpec:type.json number type matches numbers                                                     |121.95   |100     |
|testSpec:type.json string type matches strings                                                     |104.42   |100     |
|testSpec:type.json object type matches objects                                                     |100      |105.3   |
|testSpec:type.json array type matches arrays                                                       |100      |106.49  |
|testSpec:type.json boolean type matches booleans                                                   |106.26   |100     |
|testSpec:type.json null type matches only the null object                                          |100      |101.27  |
|testSpec:type.json multiple types can be specified in an array                                     |118.98   |100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |112.09   |100     |
|Total time for common passed                                                                       |2699.51  |100     |
|Total time for all tests (with failed)                                                             |2680.31  |100     |
|Tests passed (total: 116)                                                                          |114      |116     |
|Tests passed, %                                                                                    |98.28    |100     |


## Optional spec tests for draft-06
|Test                                                                                                                 |Opis    |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|--------|--------|
|testSpecOptional:bignum.json integer                                                                                 |278.12  |100     |
|testSpecOptional:bignum.json number                                                                                  |292.95  |100     |
|testSpecOptional:bignum.json string                                                                                  |109.17  |100     |
|testSpecOptional:bignum.json integer comparison                                                                      |316.43  |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |127.43  |100     |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |116.46  |100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-       |100     |
|testSpecOptional:format.json validation of date-time strings                                                         |113.29  |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-       |100     |
|testSpecOptional:format.json validation of URI References                                                            |-       |100     |
|testSpecOptional:format.json format                                                                                  |-       |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |138.66  |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |123.76  |100     |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |140.2   |100     |
|testSpecOptional:format.json validation of host names                                                                |17050.92|100     |
|testSpecOptional:format.json validation of JSON-pointers (JSON String Representation)                                |149.9   |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|284.89  |100     |
|Total time for common passed                                                                                         |1367.25 |100     |
|Total time for all tests (with failed)                                                                               |861.02  |100     |
|Tests passed (total: 17)                                                                                             |13      |17      |
|Tests passed, %                                                                                                      |76.47   |100     |


