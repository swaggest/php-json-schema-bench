## Mandatory spec tests for draft-06
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:maxLength.json maxLength validation                                                       |159.98|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |131.04|100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100   |113.67  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100   |164.1   |
|testSpec:uniqueItems.json uniqueItems validation                                                   |102.74|100     |
|testSpec:oneOf.json oneOf                                                                          |138.02|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |133.4 |100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100   |133.33  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |385.28  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100   |126.94  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |506.47  |
|testSpec:oneOf.json oneOf complex types                                                            |100.67|100     |
|testSpec:definitions.json valid definition                                                         |455.33|100     |
|testSpec:definitions.json invalid definition                                                       |187.34|100     |
|testSpec:minimum.json minimum validation                                                           |189.03|100     |
|testSpec:required.json required validation                                                         |116.8 |100     |
|testSpec:required.json required default validation                                                 |140.63|100     |
|testSpec:required.json required with empty array                                                   |139.2 |100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |151.49|100     |
|testSpec:items.json a schema given for items                                                       |122.61|100     |
|testSpec:items.json an array of schemas for items                                                  |160.94|100     |
|testSpec:items.json items with boolean schema (true)                                               |100   |100.6   |
|testSpec:items.json items with boolean schema (false)                                              |100   |130.16  |
|testSpec:items.json items with boolean schemas                                                     |100   |165.3   |
|testSpec:default.json invalid type for default                                                     |154.04|100     |
|testSpec:default.json invalid string value for default                                             |152.56|100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |112.96|100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |120.31|100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100   |124.31  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100   |164.87  |
|testSpec:allOf.json allOf                                                                          |132.33|100     |
|testSpec:allOf.json allOf with base schema                                                         |126.14|100     |
|testSpec:allOf.json allOf simple types                                                             |161.53|100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |121.85|100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100   |228.14  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100   |134.33  |
|testSpec:maxProperties.json maxProperties validation                                               |115.67|100     |
|testSpec:minItems.json minItems validation                                                         |110.91|100     |
|testSpec:multipleOf.json by int                                                                    |186.25|100     |
|testSpec:multipleOf.json by number                                                                 |160.74|100     |
|testSpec:multipleOf.json by small number                                                           |180.17|100     |
|testSpec:maxItems.json maxItems validation                                                         |134.01|100     |
|testSpec:anyOf.json anyOf                                                                          |149.81|100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100   |110.2   |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |133.14|100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |133.74|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |445.55  |
|testSpec:anyOf.json anyOf complex types                                                            |108.25|100     |
|testSpec:const.json const validation                                                               |100   |103.81  |
|testSpec:const.json const with object                                                              |100   |153.93  |
|testSpec:const.json const with array                                                               |100   |190.95  |
|testSpec:const.json const with null                                                                |100   |129.47  |
|testSpec:ref.json root pointer ref                                                                 |157.73|100     |
|testSpec:ref.json relative pointer ref to object                                                   |150.33|100     |
|testSpec:ref.json relative pointer ref to array                                                    |185.32|100     |
|testSpec:ref.json escaped pointer ref                                                              |153.19|100     |
|testSpec:ref.json nested refs                                                                      |246.11|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |155.15|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |338.99|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100   |113.07  |
|testSpec:ref.json $ref to boolean schema true                                                      |158.12|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100   |256.14  |
|testSpec:ref.json Recursive references between schemas                                             |265.07|100     |
|testSpec:pattern.json pattern validation                                                           |102.96|100     |
|testSpec:pattern.json pattern is not anchored                                                      |149.2 |100     |
|testSpec:properties.json object properties validation                                              |103.57|100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |102.33|100     |
|testSpec:properties.json properties with boolean schema                                            |100   |199.19  |
|testSpec:dependencies.json dependencies                                                            |108.6 |100     |
|testSpec:dependencies.json dependencies with empty array                                           |128.15|100     |
|testSpec:dependencies.json multiple dependencies                                                   |100   |136.78  |
|testSpec:dependencies.json multiple dependencies subschema                                         |100   |110.05  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100   |246.33  |
|testSpec:minLength.json minLength validation                                                       |107.84|100     |
|testSpec:type.json integer type matches integers                                                   |100   |139.16  |
|testSpec:type.json number type matches numbers                                                     |100   |130.92  |
|testSpec:type.json string type matches strings                                                     |100   |125.8   |
|testSpec:type.json object type matches objects                                                     |100   |129.8   |
|testSpec:type.json array type matches arrays                                                       |100   |140.2   |
|testSpec:type.json boolean type matches booleans                                                   |100   |143.27  |
|testSpec:type.json null type matches only the null object                                          |100   |146.03  |
|testSpec:type.json multiple types can be specified in an array                                     |100   |104.16  |
|testSpec:additionalItems.json additionalItems as schema                                            |153.64|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |211.79|100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |177.88|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |114.32|100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |170.85|100     |
|testSpec:refRemote.json remote ref                                                                 |201.13|100     |
|testSpec:refRemote.json fragment within remote ref                                                 |210.04|100     |
|testSpec:refRemote.json ref within remote ref                                                      |294.23|100     |
|testSpec:refRemote.json base URI change                                                            |203.26|100     |
|testSpec:refRemote.json base URI change - change folder                                            |227.02|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |230.57|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |178.57|100     |
|testSpec:not.json not                                                                              |100   |146.08  |
|testSpec:not.json not multiple types                                                               |100   |149.91  |
|testSpec:not.json not more complex schema                                                          |100   |142.62  |
|testSpec:not.json forbidden property                                                               |100   |138.77  |
|testSpec:not.json not with boolean schema true                                                     |100   |152.09  |
|testSpec:not.json not with boolean schema false                                                    |100   |261.81  |
|testSpec:maximum.json maximum validation                                                           |159.07|100     |
|testSpec:enum.json simple enum validation                                                          |100   |101.3   |
|testSpec:enum.json heterogeneous enum validation                                                   |100   |136.84  |
|testSpec:enum.json enums in properties                                                             |113.82|100     |
|testSpec:minProperties.json minProperties validation                                               |110.33|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|115.82|100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |140.64|100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |108.93|100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |153.95|100     |
|testSpec:propertyNames.json propertyNames validation                                               |144.4 |100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |126.43|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100   |177.95  |
|testSpec:contains.json contains keyword validation                                                 |100   |115.35  |
|testSpec:contains.json contains keyword with const keyword                                         |100   |143.15  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100   |114.71  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100   |127.47  |
|Total time for common passed                                                                       |113.38|100     |
|Total time for all tests (with failed)                                                             |113.38|100     |
|Tests passed (total: 116)                                                                          |116   |116     |
|Tests passed, %                                                                                    |100   |100     |


## Optional spec tests for draft-06
|Test                                                                                                                 |Opis    |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|--------|--------|
|testSpecOptional:format.json validation of date-time strings                                                         |108.43  |100     |
|testSpecOptional:format.json validation of URIs                                                                      |118.74  |100     |
|testSpecOptional:format.json validation of URI References                                                            |118.92  |100     |
|testSpecOptional:format.json format                                                                                  |100     |132.72  |
|testSpecOptional:format.json validation of e-mail addresses                                                          |104.32  |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |100     |114.49  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |100     |115.7   |
|testSpecOptional:format.json validation of host names                                                                |24065.78|100     |
|testSpecOptional:format.json validation of JSON-pointers (JSON String Representation)                                |105.14  |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|242.36  |100     |
|testSpecOptional:bignum.json integer                                                                                 |252.44  |100     |
|testSpecOptional:bignum.json number                                                                                  |263.61  |100     |
|testSpecOptional:bignum.json string                                                                                  |100     |106.55  |
|testSpecOptional:bignum.json integer comparison                                                                      |226.86  |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100     |103.24  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100     |113.02  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100     |135.43  |
|Total time for common passed                                                                                         |1360.76 |100     |
|Total time for all tests (with failed)                                                                               |1360.76 |100     |
|Tests passed (total: 17)                                                                                             |17      |17      |
|Tests passed, %                                                                                                      |100     |100     |


