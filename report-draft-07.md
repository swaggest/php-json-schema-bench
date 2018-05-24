## Mandatory spec tests for draft-07
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |154.35|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |213.08|100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |175.48|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |114.42|100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |136.28|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|129.56|100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |142.43|100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |104.92|100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |162.58|100     |
|testSpec:allOf.json allOf                                                                          |127.24|100     |
|testSpec:allOf.json allOf with base schema                                                         |127.77|100     |
|testSpec:allOf.json allOf simple types                                                             |149.2 |100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |126.93|100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100   |247.51  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100   |220.94  |
|testSpec:anyOf.json anyOf                                                                          |123.13|100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100   |124.46  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |125.41|100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |138.6 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |425.93  |
|testSpec:anyOf.json anyOf complex types                                                            |104.77|100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100   |114.11  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100   |204.02  |
|testSpec:const.json const validation                                                               |100   |132.23  |
|testSpec:const.json const with object                                                              |100   |147.54  |
|testSpec:const.json const with array                                                               |100   |168.12  |
|testSpec:const.json const with null                                                                |100   |137.27  |
|testSpec:contains.json contains keyword validation                                                 |100   |107.82  |
|testSpec:contains.json contains keyword with const keyword                                         |100   |131.86  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100   |122.7   |
|testSpec:contains.json contains keyword with boolean schema false                                  |100   |121.52  |
|testSpec:default.json invalid type for default                                                     |-     |100     |
|testSpec:default.json invalid string value for default                                             |-     |100     |
|testSpec:definitions.json valid definition                                                         |940.38|100     |
|testSpec:definitions.json invalid definition                                                       |331.05|100     |
|testSpec:dependencies.json dependencies                                                            |106.94|100     |
|testSpec:dependencies.json dependencies with empty array                                           |130.85|100     |
|testSpec:dependencies.json multiple dependencies                                                   |100   |133.73  |
|testSpec:dependencies.json multiple dependencies subschema                                         |101.63|100     |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100   |226.69  |
|testSpec:enum.json simple enum validation                                                          |118.08|100     |
|testSpec:enum.json heterogeneous enum validation                                                   |100   |120.91  |
|testSpec:enum.json enums in properties                                                             |123.52|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |116.05|100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |126.08|100     |
|testSpec:if-then-else.json ignore if without then or else                                          |137.23|100     |
|testSpec:if-then-else.json ignore then without if                                                  |141.42|100     |
|testSpec:if-then-else.json ignore else without if                                                  |155.11|100     |
|testSpec:if-then-else.json if and then without else                                                |142.18|100     |
|testSpec:if-then-else.json if and else without then                                                |133.42|100     |
|testSpec:if-then-else.json validate against correct branch, then vs else                           |136.08|100     |
|testSpec:if-then-else.json non-interference across combined schemas                                |189.01|100     |
|testSpec:items.json a schema given for items                                                       |121.94|100     |
|testSpec:items.json an array of schemas for items                                                  |128.07|100     |
|testSpec:items.json items with boolean schema (true)                                               |104.56|100     |
|testSpec:items.json items with boolean schema (false)                                              |100   |195.99  |
|testSpec:items.json items with boolean schemas                                                     |100   |148.99  |
|testSpec:maximum.json maximum validation                                                           |156.28|100     |
|testSpec:maxItems.json maxItems validation                                                         |106.69|100     |
|testSpec:maxLength.json maxLength validation                                                       |124.28|100     |
|testSpec:maxProperties.json maxProperties validation                                               |104.16|100     |
|testSpec:minimum.json minimum validation                                                           |152.3 |100     |
|testSpec:minItems.json minItems validation                                                         |109.92|100     |
|testSpec:minLength.json minLength validation                                                       |100.63|100     |
|testSpec:minProperties.json minProperties validation                                               |116.63|100     |
|testSpec:multipleOf.json by int                                                                    |135.98|100     |
|testSpec:multipleOf.json by number                                                                 |152.53|100     |
|testSpec:multipleOf.json by small number                                                           |170.47|100     |
|testSpec:not.json not                                                                              |100   |147.77  |
|testSpec:not.json not multiple types                                                               |100   |143.2   |
|testSpec:not.json not more complex schema                                                          |100   |134.73  |
|testSpec:not.json forbidden property                                                               |100   |119.11  |
|testSpec:not.json not with boolean schema true                                                     |100   |138.54  |
|testSpec:not.json not with boolean schema false                                                    |100   |242.69  |
|testSpec:oneOf.json oneOf                                                                          |111.29|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |100   |104.39  |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100   |140.13  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |395.76  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100   |158.85  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |517.61  |
|testSpec:oneOf.json oneOf complex types                                                            |102.55|100     |
|testSpec:pattern.json pattern validation                                                           |115.32|100     |
|testSpec:pattern.json pattern is not anchored                                                      |146.66|100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |105.36|100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |101.41|100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100   |128.09  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100   |191.62  |
|testSpec:properties.json object properties validation                                              |119.3 |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |109.23|100     |
|testSpec:properties.json properties with boolean schema                                            |100   |184.87  |
|testSpec:propertyNames.json propertyNames validation                                               |135.62|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |127.19|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100   |167.71  |
|testSpec:ref.json root pointer ref                                                                 |167.22|100     |
|testSpec:ref.json relative pointer ref to object                                                   |164.07|100     |
|testSpec:ref.json relative pointer ref to array                                                    |160.88|100     |
|testSpec:ref.json escaped pointer ref                                                              |164.81|100     |
|testSpec:ref.json nested refs                                                                      |239.23|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |173.87|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |595.38|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100   |100.85  |
|testSpec:ref.json $ref to boolean schema true                                                      |133.78|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100   |266.84  |
|testSpec:ref.json Recursive references between schemas                                             |251.68|100     |
|testSpec:refRemote.json remote ref                                                                 |205.7 |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |213.64|100     |
|testSpec:refRemote.json ref within remote ref                                                      |311.52|100     |
|testSpec:refRemote.json base URI change                                                            |190.85|100     |
|testSpec:refRemote.json base URI change - change folder                                            |224.93|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |226.83|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |176.92|100     |
|testSpec:required.json required validation                                                         |129.93|100     |
|testSpec:required.json required default validation                                                 |173.33|100     |
|testSpec:required.json required with empty array                                                   |137.63|100     |
|testSpec:type.json integer type matches integers                                                   |100   |144.64  |
|testSpec:type.json number type matches numbers                                                     |100   |125.01  |
|testSpec:type.json string type matches strings                                                     |100   |128.65  |
|testSpec:type.json object type matches objects                                                     |100   |131.29  |
|testSpec:type.json array type matches arrays                                                       |100   |135.23  |
|testSpec:type.json boolean type matches booleans                                                   |100   |141.91  |
|testSpec:type.json null type matches only the null object                                          |100   |139.7   |
|testSpec:type.json multiple types can be specified in an array                                     |100   |109.74  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100   |103.6   |
|Total time for common passed                                                                       |117.98|100     |
|Total time for all tests (with failed)                                                             |117.24|100     |
|Tests passed (total: 123)                                                                          |121   |123     |
|Tests passed, %                                                                                    |98.37 |100     |


## Optional spec tests for draft-07
|Test                                                                                                                 |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|------|--------|
|testSpecOptional:bignum.json integer                                                                                 |259.42|100     |
|testSpecOptional:bignum.json number                                                                                  |223.69|100     |
|testSpecOptional:bignum.json string                                                                                  |100   |110.72  |
|testSpecOptional:bignum.json integer comparison                                                                      |217.13|100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100   |101.63  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100   |102.28  |
|testSpecOptional:content.json validation of string-encoded content based on media type                               |111.07|100     |
|testSpecOptional:content.json validation of binary string-encoding                                                   |100   |117.7   |
|testSpecOptional:content.json validation of binary-encoded media type documents                                      |100   |116.57  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100   |118.06  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|225.43|100     |
|Total time for common passed                                                                                         |129.1 |100     |
|Total time for all tests (with failed)                                                                               |129.1 |100     |
|Tests passed (total: 11)                                                                                             |11    |11      |
|Tests passed, %                                                                                                      |100   |100     |


## Format spec tests for draft-07
|Test                                                                                     |Opis    |Swaggest|
|-----------------------------------------------------------------------------------------|--------|--------|
|testSpecFormat:date-time.json validation of date-time strings                            |104.18  |100     |
|testSpecFormat:date.json validation of date strings                                      |103.9   |100     |
|testSpecFormat:email.json validation of e-mail addresses                                 |108.94  |100     |
|testSpecFormat:hostname.json validation of host names                                    |12548.68|100     |
|testSpecFormat:idn-email.json validation of an internationalized e-mail addresses        |217.25  |100     |
|testSpecFormat:idn-hostname.json validation of internationalized host names              |-       |100     |
|testSpecFormat:ipv4.json validation of IP addresses                                      |100     |105.8   |
|testSpecFormat:ipv6.json validation of IPv6 addresses                                    |100     |128.94  |
|testSpecFormat:iri-reference.json validation of IRI References                           |-       |100     |
|testSpecFormat:iri.json validation of IRIs                                               |-       |100     |
|testSpecFormat:json-pointer.json validation of JSON-pointers (JSON String Representation)|116.57  |100     |
|testSpecFormat:regex.json validation of regular expressions                              |100     |103.91  |
|testSpecFormat:relative-json-pointer.json validation of Relative JSON Pointers (RJP)     |135.33  |100     |
|testSpecFormat:time.json validation of time strings                                      |106.44  |100     |
|testSpecFormat:uri-reference.json validation of URI References                           |128.21  |100     |
|testSpecFormat:uri-template.json format                                                  |100     |120.44  |
|testSpecFormat:uri.json validation of URIs                                               |129.8   |100     |
|Total time for common passed                                                             |825.28  |100     |
|Total time for all tests (with failed)                                                   |541.35  |100     |
|Tests passed (total: 17)                                                                 |14      |17      |
|Tests passed, %                                                                          |82.35   |100     |


