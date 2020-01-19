## Mandatory spec tests for draft-07
|Test                                                                                               |Opis   |Swaggest|
|---------------------------------------------------------------------------------------------------|-------|--------|
|testSpec:maxLength.json maxLength validation                                                       |128.15 |100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |131.35 |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100    |110.64  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100    |198.88  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100    |106.56  |
|testSpec:oneOf.json oneOf                                                                          |125.19 |100     |
|testSpec:oneOf.json oneOf with base schema                                                         |109.01 |100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100    |134.69  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100    |373.58  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100    |126.62  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100    |481.15  |
|testSpec:oneOf.json oneOf complex types                                                            |100.21 |100     |
|testSpec:definitions.json valid definition                                                         |1050.45|100     |
|testSpec:definitions.json invalid definition                                                       |351.75 |100     |
|testSpec:minimum.json minimum validation                                                           |161.92 |100     |
|testSpec:required.json required validation                                                         |120.56 |100     |
|testSpec:required.json required default validation                                                 |154.69 |100     |
|testSpec:required.json required with empty array                                                   |149.57 |100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |125.88 |100     |
|testSpec:items.json a schema given for items                                                       |121.91 |100     |
|testSpec:items.json an array of schemas for items                                                  |136.67 |100     |
|testSpec:items.json items with boolean schema (true)                                               |100    |101.87  |
|testSpec:items.json items with boolean schema (false)                                              |100    |202.6   |
|testSpec:items.json items with boolean schemas                                                     |100    |159.2   |
|testSpec:default.json invalid type for default                                                     |-      |100     |
|testSpec:default.json invalid string value for default                                             |-      |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |100    |100.75  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |101.46 |100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100    |121.97  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100    |198.43  |
|testSpec:allOf.json allOf                                                                          |125.13 |100     |
|testSpec:allOf.json allOf with base schema                                                         |125.93 |100     |
|testSpec:allOf.json allOf simple types                                                             |155.35 |100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |128.15 |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100    |228.84  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100    |222.9   |
|testSpec:maxProperties.json maxProperties validation                                               |109.62 |100     |
|testSpec:minItems.json minItems validation                                                         |110.51 |100     |
|testSpec:multipleOf.json by int                                                                    |130.38 |100     |
|testSpec:multipleOf.json by number                                                                 |165.74 |100     |
|testSpec:multipleOf.json by small number                                                           |186.56 |100     |
|testSpec:maxItems.json maxItems validation                                                         |105.97 |100     |
|testSpec:anyOf.json anyOf                                                                          |139.31 |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100    |122.55  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |131.49 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |123.19 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100    |426.82  |
|testSpec:anyOf.json anyOf complex types                                                            |101.07 |100     |
|testSpec:const.json const validation                                                               |100    |146.92  |
|testSpec:const.json const with object                                                              |100    |161.29  |
|testSpec:const.json const with array                                                               |100    |201.62  |
|testSpec:const.json const with null                                                                |100    |138.49  |
|testSpec:ref.json root pointer ref                                                                 |150.44 |100     |
|testSpec:ref.json relative pointer ref to object                                                   |155.6  |100     |
|testSpec:ref.json relative pointer ref to array                                                    |178.61 |100     |
|testSpec:ref.json escaped pointer ref                                                              |162.34 |100     |
|testSpec:ref.json nested refs                                                                      |250.75 |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |155.57 |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |650.08 |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100    |108.19  |
|testSpec:ref.json $ref to boolean schema true                                                      |155.09 |100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100    |246.96  |
|testSpec:ref.json Recursive references between schemas                                             |286.31 |100     |
|testSpec:pattern.json pattern validation                                                           |102.09 |100     |
|testSpec:pattern.json pattern is not anchored                                                      |146.68 |100     |
|testSpec:properties.json object properties validation                                              |108.49 |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |107.54 |100     |
|testSpec:properties.json properties with boolean schema                                            |100    |180.68  |
|testSpec:if-then-else.json ignore if without then or else                                          |122.16 |100     |
|testSpec:if-then-else.json ignore then without if                                                  |145.73 |100     |
|testSpec:if-then-else.json ignore else without if                                                  |146.97 |100     |
|testSpec:if-then-else.json if and then without else                                                |136.48 |100     |
|testSpec:if-then-else.json if and else without then                                                |132.41 |100     |
|testSpec:if-then-else.json validate against correct branch, then vs else                           |135.96 |100     |
|testSpec:if-then-else.json non-interference across combined schemas                                |189.47 |100     |
|testSpec:dependencies.json dependencies                                                            |108.49 |100     |
|testSpec:dependencies.json dependencies with empty array                                           |127.21 |100     |
|testSpec:dependencies.json multiple dependencies                                                   |100    |131.53  |
|testSpec:dependencies.json multiple dependencies subschema                                         |100    |110.08  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100    |227.09  |
|testSpec:minLength.json minLength validation                                                       |104.61 |100     |
|testSpec:type.json integer type matches integers                                                   |100    |146.81  |
|testSpec:type.json number type matches numbers                                                     |100    |132.92  |
|testSpec:type.json string type matches strings                                                     |100    |131.69  |
|testSpec:type.json object type matches objects                                                     |100    |139.66  |
|testSpec:type.json array type matches arrays                                                       |100    |142.22  |
|testSpec:type.json boolean type matches booleans                                                   |100    |147.18  |
|testSpec:type.json null type matches only the null object                                          |100    |150.26  |
|testSpec:type.json multiple types can be specified in an array                                     |100    |106.56  |
|testSpec:additionalItems.json additionalItems as schema                                            |140.79 |100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |211.42 |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |171.84 |100     |
|testSpec:additionalItems.json additionalItems as false without items                               |112.98 |100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |153.81 |100     |
|testSpec:refRemote.json remote ref                                                                 |190.82 |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |228.78 |100     |
|testSpec:refRemote.json ref within remote ref                                                      |286.59 |100     |
|testSpec:refRemote.json base URI change                                                            |199.26 |100     |
|testSpec:refRemote.json base URI change - change folder                                            |238.88 |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |240.76 |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |181.78 |100     |
|testSpec:not.json not                                                                              |100    |150.39  |
|testSpec:not.json not multiple types                                                               |100    |151.4   |
|testSpec:not.json not more complex schema                                                          |100    |136.29  |
|testSpec:not.json forbidden property                                                               |100    |129.33  |
|testSpec:not.json not with boolean schema true                                                     |100    |148.65  |
|testSpec:not.json not with boolean schema false                                                    |100    |264.52  |
|testSpec:maximum.json maximum validation                                                           |163.9  |100     |
|testSpec:enum.json simple enum validation                                                          |100    |103.31  |
|testSpec:enum.json heterogeneous enum validation                                                   |100    |141.05  |
|testSpec:enum.json enums in properties                                                             |123.88 |100     |
|testSpec:minProperties.json minProperties validation                                               |108.28 |100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|116.51 |100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |144.44 |100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |108.25 |100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |158.06 |100     |
|testSpec:propertyNames.json propertyNames validation                                               |138.43 |100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |132.39 |100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100    |162.65  |
|testSpec:contains.json contains keyword validation                                                 |100    |115.65  |
|testSpec:contains.json contains keyword with const keyword                                         |100    |138.21  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100    |109.26  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100    |134.01  |
|Total time for common passed                                                                       |117.39 |100     |
|Total time for all tests (with failed)                                                             |116.68 |100     |
|Tests passed (total: 123)                                                                          |121    |123     |
|Tests passed, %                                                                                    |98.37  |100     |


## Optional spec tests for draft-07
|Test                                                                                                                 |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|------|--------|
|testSpecOptional:content.json validation of string-encoded content based on media type                               |100   |110.78  |
|testSpecOptional:content.json validation of binary string-encoding                                                   |100   |122.78  |
|testSpecOptional:content.json validation of binary-encoded media type documents                                      |100   |121.95  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|272.44|100     |
|testSpecOptional:bignum.json integer                                                                                 |262.5 |100     |
|testSpecOptional:bignum.json number                                                                                  |267.28|100     |
|testSpecOptional:bignum.json string                                                                                  |100   |106.94  |
|testSpecOptional:bignum.json integer comparison                                                                      |234.06|100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100   |110.62  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100   |110.13  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100   |140.74  |
|Total time for common passed                                                                                         |126.99|100     |
|Total time for all tests (with failed)                                                                               |126.99|100     |
|Tests passed (total: 11)                                                                                             |11    |11      |
|Tests passed, %                                                                                                      |100   |100     |


## Format spec tests for draft-07
|Test                                                                                     |Opis    |Swaggest|
|-----------------------------------------------------------------------------------------|--------|--------|
|testSpecFormat:date-time.json validation of date-time strings                            |112.43  |100     |
|testSpecFormat:uri.json validation of URIs                                               |127.05  |100     |
|testSpecFormat:uri-reference.json validation of URI References                           |122.64  |100     |
|testSpecFormat:time.json validation of time strings                                      |100.46  |100     |
|testSpecFormat:hostname.json validation of host names                                    |19952.24|100     |
|testSpecFormat:idn-email.json validation of an internationalized e-mail addresses        |192.46  |100     |
|testSpecFormat:idn-hostname.json validation of internationalized host names              |-       |100     |
|testSpecFormat:ipv6.json validation of IPv6 addresses                                    |100     |114.02  |
|testSpecFormat:email.json validation of e-mail addresses                                 |103.6   |100     |
|testSpecFormat:iri.json validation of IRIs                                               |100     |130.9   |
|testSpecFormat:ipv4.json validation of IP addresses                                      |100     |110.23  |
|testSpecFormat:date.json validation of date strings                                      |102.99  |100     |
|testSpecFormat:regex.json validation of regular expressions                              |100     |108.22  |
|testSpecFormat:uri-template.json format                                                  |100     |123.75  |
|testSpecFormat:iri-reference.json validation of IRI References                           |113.22  |100     |
|testSpecFormat:json-pointer.json validation of JSON-pointers (JSON String Representation)|113.4   |100     |
|testSpecFormat:relative-json-pointer.json validation of Relative JSON Pointers (RJP)     |123.11  |100     |
|Total time for common passed                                                             |919.49  |100     |
|Total time for all tests (with failed)                                                   |845.25  |100     |
|Tests passed (total: 17)                                                                 |16      |17      |
|Tests passed, %                                                                          |94.12   |100     |


