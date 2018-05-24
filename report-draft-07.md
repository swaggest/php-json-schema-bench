## Mandatory spec tests for draft-07
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |153.85|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |173.42|100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |166.82|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |115.81|100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |149.15|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|128.1 |100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |153.3 |100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |103.77|100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |144.94|100     |
|testSpec:allOf.json allOf                                                                          |131.07|100     |
|testSpec:allOf.json allOf with base schema                                                         |125.25|100     |
|testSpec:allOf.json allOf simple types                                                             |152.71|100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |112.39|100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100   |211.25  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100   |253.05  |
|testSpec:anyOf.json anyOf                                                                          |132.17|100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100   |124.29  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |133.82|100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |129.84|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |406.56  |
|testSpec:anyOf.json anyOf complex types                                                            |112.2 |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100   |116.09  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100   |208.39  |
|testSpec:const.json const validation                                                               |100   |122.64  |
|testSpec:const.json const with object                                                              |100   |152.57  |
|testSpec:const.json const with array                                                               |100   |168.84  |
|testSpec:const.json const with null                                                                |100   |123.48  |
|testSpec:contains.json contains keyword validation                                                 |100   |109.12  |
|testSpec:contains.json contains keyword with const keyword                                         |100   |136.44  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100   |103.65  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100   |132.38  |
|testSpec:default.json invalid type for default                                                     |-     |100     |
|testSpec:default.json invalid string value for default                                             |-     |100     |
|testSpec:definitions.json valid definition                                                         |939.14|100     |
|testSpec:definitions.json invalid definition                                                       |332.15|100     |
|testSpec:dependencies.json dependencies                                                            |106.38|100     |
|testSpec:dependencies.json dependencies with empty array                                           |128.93|100     |
|testSpec:dependencies.json multiple dependencies                                                   |100   |132.27  |
|testSpec:dependencies.json multiple dependencies subschema                                         |100   |103.02  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100   |253.38  |
|testSpec:enum.json simple enum validation                                                          |110.07|100     |
|testSpec:enum.json heterogeneous enum validation                                                   |100   |130.64  |
|testSpec:enum.json enums in properties                                                             |128.1 |100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |124.55|100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |124.54|100     |
|testSpec:if-then-else.json ignore if without then or else                                          |133.15|100     |
|testSpec:if-then-else.json ignore then without if                                                  |156.75|100     |
|testSpec:if-then-else.json ignore else without if                                                  |130.64|100     |
|testSpec:if-then-else.json if and then without else                                                |147.7 |100     |
|testSpec:if-then-else.json if and else without then                                                |130.26|100     |
|testSpec:if-then-else.json validate against correct branch, then vs else                           |136.7 |100     |
|testSpec:if-then-else.json non-interference across combined schemas                                |209.08|100     |
|testSpec:items.json a schema given for items                                                       |124.52|100     |
|testSpec:items.json an array of schemas for items                                                  |133.34|100     |
|testSpec:items.json items with boolean schema (true)                                               |100.49|100     |
|testSpec:items.json items with boolean schema (false)                                              |100   |194.69  |
|testSpec:items.json items with boolean schemas                                                     |100   |154.89  |
|testSpec:maximum.json maximum validation                                                           |157.33|100     |
|testSpec:maxItems.json maxItems validation                                                         |109.2 |100     |
|testSpec:maxLength.json maxLength validation                                                       |121.5 |100     |
|testSpec:maxProperties.json maxProperties validation                                               |112.21|100     |
|testSpec:minimum.json minimum validation                                                           |164.3 |100     |
|testSpec:minItems.json minItems validation                                                         |122.07|100     |
|testSpec:minLength.json minLength validation                                                       |100   |103.41  |
|testSpec:minProperties.json minProperties validation                                               |117.86|100     |
|testSpec:multipleOf.json by int                                                                    |137.62|100     |
|testSpec:multipleOf.json by number                                                                 |146.53|100     |
|testSpec:multipleOf.json by small number                                                           |184.39|100     |
|testSpec:not.json not                                                                              |100   |145.03  |
|testSpec:not.json not multiple types                                                               |100   |139.36  |
|testSpec:not.json not more complex schema                                                          |100   |133.6   |
|testSpec:not.json forbidden property                                                               |100   |123.8   |
|testSpec:not.json not with boolean schema true                                                     |100   |140.99  |
|testSpec:not.json not with boolean schema false                                                    |100   |232.46  |
|testSpec:oneOf.json oneOf                                                                          |119.36|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |106.61|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100   |131.49  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |433.79  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100   |148.08  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |542.11  |
|testSpec:oneOf.json oneOf complex types                                                            |105.5 |100     |
|testSpec:pattern.json pattern validation                                                           |100.48|100     |
|testSpec:pattern.json pattern is not anchored                                                      |117.5 |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |100   |101.09  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |101.68|100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100   |125.44  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100   |203.29  |
|testSpec:properties.json object properties validation                                              |110.06|100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |109.29|100     |
|testSpec:properties.json properties with boolean schema                                            |100   |180.19  |
|testSpec:propertyNames.json propertyNames validation                                               |133.33|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |116.18|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100   |159.79  |
|testSpec:ref.json root pointer ref                                                                 |156.42|100     |
|testSpec:ref.json relative pointer ref to object                                                   |172.37|100     |
|testSpec:ref.json relative pointer ref to array                                                    |166.39|100     |
|testSpec:ref.json escaped pointer ref                                                              |172.63|100     |
|testSpec:ref.json nested refs                                                                      |261.66|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |159.25|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |584.59|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100   |117.94  |
|testSpec:ref.json $ref to boolean schema true                                                      |158.39|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100   |235.64  |
|testSpec:ref.json Recursive references between schemas                                             |259.03|100     |
|testSpec:refRemote.json remote ref                                                                 |191.46|100     |
|testSpec:refRemote.json fragment within remote ref                                                 |241.26|100     |
|testSpec:refRemote.json ref within remote ref                                                      |313.24|100     |
|testSpec:refRemote.json base URI change                                                            |205.45|100     |
|testSpec:refRemote.json base URI change - change folder                                            |232.66|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |248.72|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |182.25|100     |
|testSpec:required.json required validation                                                         |123.08|100     |
|testSpec:required.json required default validation                                                 |160.66|100     |
|testSpec:required.json required with empty array                                                   |159.04|100     |
|testSpec:type.json integer type matches integers                                                   |100   |142.1   |
|testSpec:type.json number type matches numbers                                                     |100   |127.24  |
|testSpec:type.json string type matches strings                                                     |100   |131.36  |
|testSpec:type.json object type matches objects                                                     |100   |136.61  |
|testSpec:type.json array type matches arrays                                                       |100   |134.14  |
|testSpec:type.json boolean type matches booleans                                                   |100   |141.74  |
|testSpec:type.json null type matches only the null object                                          |100   |139.46  |
|testSpec:type.json multiple types can be specified in an array                                     |100   |107.25  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100   |102.15  |
|Total time for common passed                                                                       |118.71|100     |
|Total time for all tests (with failed)                                                             |117.93|100     |
|Tests passed (total: 123)                                                                          |121   |123     |
|Tests passed, %                                                                                    |98.37 |100     |


## Optional spec tests for draft-07
|Test                                                                                                                 |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|------|--------|
|testSpecOptional:bignum.json integer                                                                                 |250.86|100     |
|testSpecOptional:bignum.json number                                                                                  |243.46|100     |
|testSpecOptional:bignum.json string                                                                                  |100   |105.38  |
|testSpecOptional:bignum.json integer comparison                                                                      |222.09|100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100   |117.26  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |105.35|100     |
|testSpecOptional:content.json validation of string-encoded content based on media type                               |100   |103.28  |
|testSpecOptional:content.json validation of binary string-encoding                                                   |101.56|100     |
|testSpecOptional:content.json validation of binary-encoded media type documents                                      |100   |124.54  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100   |128.42  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|260.07|100     |
|Total time for common passed                                                                                         |128.9 |100     |
|Total time for all tests (with failed)                                                                               |128.9 |100     |
|Tests passed (total: 11)                                                                                             |11    |11      |
|Tests passed, %                                                                                                      |100   |100     |


## Format spec tests for draft-07
|Test                                                                                     |Opis    |Swaggest|
|-----------------------------------------------------------------------------------------|--------|--------|
|testSpecFormat:date-time.json validation of date-time strings                            |112.87  |100     |
|testSpecFormat:date.json validation of date strings                                      |106.23  |100     |
|testSpecFormat:email.json validation of e-mail addresses                                 |105.52  |100     |
|testSpecFormat:hostname.json validation of host names                                    |12886.17|100     |
|testSpecFormat:idn-email.json validation of an internationalized e-mail addresses        |237.07  |100     |
|testSpecFormat:idn-hostname.json validation of internationalized host names              |-       |100     |
|testSpecFormat:ipv4.json validation of IP addresses                                      |100     |104.14  |
|testSpecFormat:ipv6.json validation of IPv6 addresses                                    |100     |113.25  |
|testSpecFormat:iri-reference.json validation of IRI References                           |-       |100     |
|testSpecFormat:iri.json validation of IRIs                                               |-       |100     |
|testSpecFormat:json-pointer.json validation of JSON-pointers (JSON String Representation)|118.48  |100     |
|testSpecFormat:regex.json validation of regular expressions                              |110.47  |100     |
|testSpecFormat:relative-json-pointer.json validation of Relative JSON Pointers (RJP)     |130.61  |100     |
|testSpecFormat:time.json validation of time strings                                      |101.69  |100     |
|testSpecFormat:uri-reference.json validation of URI References                           |123.48  |100     |
|testSpecFormat:uri-template.json format                                                  |100     |125.1   |
|testSpecFormat:uri.json validation of URIs                                               |128.86  |100     |
|Total time for common passed                                                             |844.36  |100     |
|Total time for all tests (with failed)                                                   |567.74  |100     |
|Tests passed (total: 17)                                                                 |14      |17      |
|Tests passed, %                                                                          |82.35   |100     |


