## Mandatory spec tests for draft-06
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:enum.json simple enum validation                                                          |101.64|100     |
|testSpec:enum.json heterogeneous enum validation                                                   |100   |115.64  |
|testSpec:enum.json enums in properties                                                             |117.57|100     |
|testSpec:maximum.json maximum validation                                                           |154.93|100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |121.73|100     |
|testSpec:default.json invalid type for default                                                     |152.44|100     |
|testSpec:default.json invalid string value for default                                             |157.19|100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100   |101.59  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100   |211.3   |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|123.71|100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |142.99|100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |108.4 |100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |161.74|100     |
|testSpec:maxLength.json maxLength validation                                                       |131.52|100     |
|testSpec:ref.json root pointer ref                                                                 |115.5 |100     |
|testSpec:ref.json relative pointer ref to object                                                   |122.81|100     |
|testSpec:ref.json relative pointer ref to array                                                    |157.38|100     |
|testSpec:ref.json escaped pointer ref                                                              |150.35|100     |
|testSpec:ref.json nested refs                                                                      |240.91|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |141.29|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |356.61|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |101.58|100     |
|testSpec:ref.json $ref to boolean schema true                                                      |158.06|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100   |238.1   |
|testSpec:ref.json Recursive references between schemas                                             |254.04|100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100   |102.65  |
|testSpec:minProperties.json minProperties validation                                               |109.28|100     |
|testSpec:allOf.json allOf                                                                          |125.38|100     |
|testSpec:allOf.json allOf with base schema                                                         |122.11|100     |
|testSpec:allOf.json allOf simple types                                                             |149.79|100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |115.97|100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100   |212.88  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100   |213.9   |
|testSpec:dependencies.json dependencies                                                            |111.76|100     |
|testSpec:dependencies.json dependencies with empty array                                           |138.74|100     |
|testSpec:dependencies.json multiple dependencies                                                   |100   |128.66  |
|testSpec:dependencies.json multiple dependencies subschema                                         |100   |104.86  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100   |210.18  |
|testSpec:type.json integer type matches integers                                                   |100   |152.62  |
|testSpec:type.json number type matches numbers                                                     |100   |135.55  |
|testSpec:type.json string type matches strings                                                     |100   |134.98  |
|testSpec:type.json object type matches objects                                                     |100   |139.58  |
|testSpec:type.json array type matches arrays                                                       |100   |140.5   |
|testSpec:type.json boolean type matches booleans                                                   |100   |165.39  |
|testSpec:type.json null type matches only the null object                                          |100   |155.74  |
|testSpec:type.json multiple types can be specified in an array                                     |100   |107.31  |
|testSpec:items.json a schema given for items                                                       |124.32|100     |
|testSpec:items.json an array of schemas for items                                                  |135   |100     |
|testSpec:items.json items with boolean schema (true)                                               |100   |103.62  |
|testSpec:items.json items with boolean schema (false)                                              |100   |189.39  |
|testSpec:items.json items with boolean schemas                                                     |100   |149.9   |
|testSpec:refRemote.json remote ref                                                                 |170.41|100     |
|testSpec:refRemote.json fragment within remote ref                                                 |201.44|100     |
|testSpec:refRemote.json ref within remote ref                                                      |247.16|100     |
|testSpec:refRemote.json base URI change                                                            |173.52|100     |
|testSpec:refRemote.json base URI change - change folder                                            |218.75|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |224.89|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |162.55|100     |
|testSpec:minimum.json minimum validation                                                           |150.1 |100     |
|testSpec:maxProperties.json maxProperties validation                                               |106.95|100     |
|testSpec:minItems.json minItems validation                                                         |106.82|100     |
|testSpec:additionalItems.json additionalItems as schema                                            |148.16|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |198.49|100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |165.94|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |114.25|100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |152.48|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |119.71|100     |
|testSpec:pattern.json pattern validation                                                           |100.79|100     |
|testSpec:pattern.json pattern is not anchored                                                      |145.3 |100     |
|testSpec:multipleOf.json by int                                                                    |128.98|100     |
|testSpec:multipleOf.json by number                                                                 |161.24|100     |
|testSpec:multipleOf.json by small number                                                           |192.4 |100     |
|testSpec:maxItems.json maxItems validation                                                         |104.68|100     |
|testSpec:not.json not                                                                              |100   |139.46  |
|testSpec:not.json not multiple types                                                               |100   |142.97  |
|testSpec:not.json not more complex schema                                                          |100   |130.81  |
|testSpec:not.json forbidden property                                                               |100   |125.42  |
|testSpec:not.json not with boolean schema true                                                     |100   |149.9   |
|testSpec:not.json not with boolean schema false                                                    |100   |243.44  |
|testSpec:required.json required validation                                                         |109.7 |100     |
|testSpec:required.json required default validation                                                 |172.42|100     |
|testSpec:required.json required with empty array                                                   |136.61|100     |
|testSpec:const.json const validation                                                               |100   |141.66  |
|testSpec:const.json const with object                                                              |100   |150.37  |
|testSpec:const.json const with array                                                               |100   |174.32  |
|testSpec:const.json const with null                                                                |100   |153.8   |
|testSpec:anyOf.json anyOf                                                                          |135.82|100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100   |128.88  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |164.71|100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |142.81|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |419.12  |
|testSpec:anyOf.json anyOf complex types                                                            |105.64|100     |
|testSpec:properties.json object properties validation                                              |111.79|100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |110.3 |100     |
|testSpec:properties.json properties with boolean schema                                            |100   |180.41  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |105.52|100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |107.7 |100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100   |120.69  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100   |182.79  |
|testSpec:contains.json contains keyword validation                                                 |100   |122.64  |
|testSpec:contains.json contains keyword with const keyword                                         |100   |139.07  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100   |117.93  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100   |136.54  |
|testSpec:propertyNames.json propertyNames validation                                               |137.96|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |126.75|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100   |167.09  |
|testSpec:minLength.json minLength validation                                                       |102.72|100     |
|testSpec:oneOf.json oneOf                                                                          |118.74|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |100.51|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100   |137.92  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |351.19  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100   |139.74  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |470.28  |
|testSpec:oneOf.json oneOf complex types                                                            |100   |100.64  |
|testSpec:definitions.json valid definition                                                         |389.58|100     |
|testSpec:definitions.json invalid definition                                                       |167.18|100     |
|Total time for common passed                                                                       |108.25|100     |
|Total time for all tests (with failed)                                                             |108.25|100     |
|Tests passed (total: 116)                                                                          |116   |116     |
|Tests passed, %                                                                                    |100   |100     |


## Optional spec tests for draft-06
|Test                                                                                                                 |Opis    |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|--------|--------|
|testSpecOptional:bignum.json integer                                                                                 |262.77  |100     |
|testSpecOptional:bignum.json number                                                                                  |270.67  |100     |
|testSpecOptional:bignum.json string                                                                                  |100     |112.43  |
|testSpecOptional:bignum.json integer comparison                                                                      |229.11  |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100     |112.35  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100     |115.22  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100     |252.95  |
|testSpecOptional:format.json validation of date-time strings                                                         |102.56  |100     |
|testSpecOptional:format.json validation of URIs                                                                      |118.63  |100     |
|testSpecOptional:format.json validation of URI References                                                            |112.2   |100     |
|testSpecOptional:format.json format                                                                                  |100     |131.04  |
|testSpecOptional:format.json validation of e-mail addresses                                                          |100     |105.11  |
|testSpecOptional:format.json validation of IP addresses                                                              |100     |121.53  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |100     |118.65  |
|testSpecOptional:format.json validation of host names                                                                |17928.37|100     |
|testSpecOptional:format.json validation of JSON-pointers (JSON String Representation)                                |103.77  |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|250.96  |100     |
|Total time for common passed                                                                                         |1014.18 |100     |
|Total time for all tests (with failed)                                                                               |1014.18 |100     |
|Tests passed (total: 17)                                                                                             |17      |17      |
|Tests passed, %                                                                                                      |100     |100     |
