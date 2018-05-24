## Mandatory spec tests for draft-06
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |135.34|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |192.6 |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |165.44|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |108.73|100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |167.06|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|111.91|100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |136.97|100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |106.5 |100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |145.41|100     |
|testSpec:allOf.json allOf                                                                          |118.65|100     |
|testSpec:allOf.json allOf with base schema                                                         |115.46|100     |
|testSpec:allOf.json allOf simple types                                                             |152.9 |100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |112.7 |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100   |235.26  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100   |240.53  |
|testSpec:anyOf.json anyOf                                                                          |131.4 |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100   |129.44  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |127.83|100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |114.8 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |354.53  |
|testSpec:anyOf.json anyOf complex types                                                            |102.39|100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100   |118.35  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100   |218.27  |
|testSpec:const.json const validation                                                               |100   |131.88  |
|testSpec:const.json const with object                                                              |100   |140.74  |
|testSpec:const.json const with array                                                               |100   |167.45  |
|testSpec:const.json const with null                                                                |100   |127.95  |
|testSpec:contains.json contains keyword validation                                                 |100   |106.4   |
|testSpec:contains.json contains keyword with const keyword                                         |100   |139.38  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100   |133.92  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100   |134.45  |
|testSpec:default.json invalid type for default                                                     |139.39|100     |
|testSpec:default.json invalid string value for default                                             |141.41|100     |
|testSpec:definitions.json valid definition                                                         |372.38|100     |
|testSpec:definitions.json invalid definition                                                       |160   |100     |
|testSpec:dependencies.json dependencies                                                            |104.77|100     |
|testSpec:dependencies.json dependencies with empty array                                           |112.62|100     |
|testSpec:dependencies.json multiple dependencies                                                   |100   |135.7   |
|testSpec:dependencies.json multiple dependencies subschema                                         |100   |110.86  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100   |238.74  |
|testSpec:enum.json simple enum validation                                                          |100   |101.95  |
|testSpec:enum.json heterogeneous enum validation                                                   |100   |111.08  |
|testSpec:enum.json enums in properties                                                             |111.68|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |133.43|100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |117.37|100     |
|testSpec:items.json a schema given for items                                                       |121.45|100     |
|testSpec:items.json an array of schemas for items                                                  |131.91|100     |
|testSpec:items.json items with boolean schema (true)                                               |100   |102.22  |
|testSpec:items.json items with boolean schema (false)                                              |100   |181.07  |
|testSpec:items.json items with boolean schemas                                                     |100   |175.23  |
|testSpec:maximum.json maximum validation                                                           |140.1 |100     |
|testSpec:maxItems.json maxItems validation                                                         |103.88|100     |
|testSpec:maxLength.json maxLength validation                                                       |115.92|100     |
|testSpec:maxProperties.json maxProperties validation                                               |100   |101.25  |
|testSpec:minimum.json minimum validation                                                           |153.73|100     |
|testSpec:minItems.json minItems validation                                                         |104.17|100     |
|testSpec:minLength.json minLength validation                                                       |100   |101.91  |
|testSpec:minProperties.json minProperties validation                                               |113.61|100     |
|testSpec:multipleOf.json by int                                                                    |145.58|100     |
|testSpec:multipleOf.json by number                                                                 |155.09|100     |
|testSpec:multipleOf.json by small number                                                           |160.51|100     |
|testSpec:not.json not                                                                              |100   |138.49  |
|testSpec:not.json not multiple types                                                               |100   |141.34  |
|testSpec:not.json not more complex schema                                                          |100   |139.85  |
|testSpec:not.json forbidden property                                                               |100   |153.06  |
|testSpec:not.json not with boolean schema true                                                     |100   |167.19  |
|testSpec:not.json not with boolean schema false                                                    |100   |256.72  |
|testSpec:oneOf.json oneOf                                                                          |114.87|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |100.18|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100   |146.72  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |423.41  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100   |148.44  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |569.97  |
|testSpec:oneOf.json oneOf complex types                                                            |100   |108.13  |
|testSpec:pattern.json pattern validation                                                           |100   |100.3   |
|testSpec:pattern.json pattern is not anchored                                                      |138.43|100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |100   |106.51  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |100   |103.98  |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100   |133.26  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100   |200.41  |
|testSpec:properties.json object properties validation                                              |110.36|100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |106.07|100     |
|testSpec:properties.json properties with boolean schema                                            |100   |208.46  |
|testSpec:propertyNames.json propertyNames validation                                               |124.95|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |137.67|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100   |190.24  |
|testSpec:ref.json root pointer ref                                                                 |152.39|100     |
|testSpec:ref.json relative pointer ref to object                                                   |137.81|100     |
|testSpec:ref.json relative pointer ref to array                                                    |171.5 |100     |
|testSpec:ref.json escaped pointer ref                                                              |150.72|100     |
|testSpec:ref.json nested refs                                                                      |249.67|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |150.16|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |334.39|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100   |109.47  |
|testSpec:ref.json $ref to boolean schema true                                                      |153.69|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100   |251.21  |
|testSpec:ref.json Recursive references between schemas                                             |246.82|100     |
|testSpec:refRemote.json remote ref                                                                 |180.65|100     |
|testSpec:refRemote.json fragment within remote ref                                                 |224.77|100     |
|testSpec:refRemote.json ref within remote ref                                                      |267.21|100     |
|testSpec:refRemote.json base URI change                                                            |200.8 |100     |
|testSpec:refRemote.json base URI change - change folder                                            |224.96|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |225.92|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |174.46|100     |
|testSpec:required.json required validation                                                         |114.37|100     |
|testSpec:required.json required default validation                                                 |158.81|100     |
|testSpec:required.json required with empty array                                                   |132.65|100     |
|testSpec:type.json integer type matches integers                                                   |100   |144.98  |
|testSpec:type.json number type matches numbers                                                     |100   |142.39  |
|testSpec:type.json string type matches strings                                                     |100   |137.7   |
|testSpec:type.json object type matches objects                                                     |100   |146.79  |
|testSpec:type.json array type matches arrays                                                       |100   |140.05  |
|testSpec:type.json boolean type matches booleans                                                   |100   |151.47  |
|testSpec:type.json null type matches only the null object                                          |100   |149.3   |
|testSpec:type.json multiple types can be specified in an array                                     |100   |104.59  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100   |106.35  |
|Total time for common passed                                                                       |106.15|100     |
|Total time for all tests (with failed)                                                             |106.15|100     |
|Tests passed (total: 116)                                                                          |116   |116     |
|Tests passed, %                                                                                    |100   |100     |


## Optional spec tests for draft-06
|Test                                                                                                                 |Opis    |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|--------|--------|
|testSpecOptional:bignum.json integer                                                                                 |227.79  |100     |
|testSpecOptional:bignum.json number                                                                                  |213.5   |100     |
|testSpecOptional:bignum.json string                                                                                  |100     |115.14  |
|testSpecOptional:bignum.json integer comparison                                                                      |202.95  |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100     |109.79  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100     |118.93  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100     |119.47  |
|testSpecOptional:format.json validation of date-time strings                                                         |108.52  |100     |
|testSpecOptional:format.json validation of URIs                                                                      |128.74  |100     |
|testSpecOptional:format.json validation of URI References                                                            |128.71  |100     |
|testSpecOptional:format.json format                                                                                  |100     |122.14  |
|testSpecOptional:format.json validation of e-mail addresses                                                          |109.82  |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |100     |114.83  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |100     |108.47  |
|testSpecOptional:format.json validation of host names                                                                |14487.01|100     |
|testSpecOptional:format.json validation of JSON-pointers (JSON String Representation)                                |109.07  |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|269.05  |100     |
|Total time for common passed                                                                                         |872.08  |100     |
|Total time for all tests (with failed)                                                                               |872.08  |100     |
|Tests passed (total: 17)                                                                                             |17      |17      |
|Tests passed, %                                                                                                      |100     |100     |


