## Mandatory spec tests for draft-07
|Test                                                                                               |Opis   |Swaggest|
|---------------------------------------------------------------------------------------------------|-------|--------|
|testSpec:enum.json simple enum validation                                                          |100    |101.23  |
|testSpec:enum.json heterogeneous enum validation                                                   |100    |116.07  |
|testSpec:enum.json enums in properties                                                             |122.8  |100     |
|testSpec:maximum.json maximum validation                                                           |154.35 |100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |117.37 |100     |
|testSpec:default.json invalid type for default                                                     |-      |100     |
|testSpec:default.json invalid string value for default                                             |-      |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100    |108.13  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100    |227.25  |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|115.74 |100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |148.9  |100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |110.65 |100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |164.83 |100     |
|testSpec:maxLength.json maxLength validation                                                       |124.99 |100     |
|testSpec:ref.json root pointer ref                                                                 |143.31 |100     |
|testSpec:ref.json relative pointer ref to object                                                   |156.9  |100     |
|testSpec:ref.json relative pointer ref to array                                                    |170.06 |100     |
|testSpec:ref.json escaped pointer ref                                                              |164.18 |100     |
|testSpec:ref.json nested refs                                                                      |247.74 |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |161.03 |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |644.85 |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |103.95 |100     |
|testSpec:ref.json $ref to boolean schema true                                                      |150.97 |100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100    |231.29  |
|testSpec:ref.json Recursive references between schemas                                             |249.61 |100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100    |102.87  |
|testSpec:minProperties.json minProperties validation                                               |113.51 |100     |
|testSpec:allOf.json allOf                                                                          |139.39 |100     |
|testSpec:allOf.json allOf with base schema                                                         |127.02 |100     |
|testSpec:allOf.json allOf simple types                                                             |138.79 |100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |120.32 |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100    |235.2   |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100    |214.18  |
|testSpec:dependencies.json dependencies                                                            |113.54 |100     |
|testSpec:dependencies.json dependencies with empty array                                           |133.75 |100     |
|testSpec:dependencies.json multiple dependencies                                                   |100    |125.9   |
|testSpec:dependencies.json multiple dependencies subschema                                         |100.82 |100     |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100    |204.52  |
|testSpec:type.json integer type matches integers                                                   |100    |140.72  |
|testSpec:type.json number type matches numbers                                                     |100    |134.49  |
|testSpec:type.json string type matches strings                                                     |100    |132.24  |
|testSpec:type.json object type matches objects                                                     |100    |138.72  |
|testSpec:type.json array type matches arrays                                                       |100    |146.65  |
|testSpec:type.json boolean type matches booleans                                                   |100    |154.04  |
|testSpec:type.json null type matches only the null object                                          |100    |149.86  |
|testSpec:type.json multiple types can be specified in an array                                     |100    |111.39  |
|testSpec:items.json a schema given for items                                                       |127.25 |100     |
|testSpec:items.json an array of schemas for items                                                  |142    |100     |
|testSpec:items.json items with boolean schema (true)                                               |100    |100.47  |
|testSpec:items.json items with boolean schema (false)                                              |100    |201.65  |
|testSpec:items.json items with boolean schemas                                                     |100    |144.87  |
|testSpec:refRemote.json remote ref                                                                 |173.87 |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |201.26 |100     |
|testSpec:refRemote.json ref within remote ref                                                      |227.79 |100     |
|testSpec:refRemote.json base URI change                                                            |181.44 |100     |
|testSpec:refRemote.json base URI change - change folder                                            |229.19 |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |237.37 |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |173.84 |100     |
|testSpec:minimum.json minimum validation                                                           |157.9  |100     |
|testSpec:if-then-else.json ignore if without then or else                                          |118.98 |100     |
|testSpec:if-then-else.json ignore then without if                                                  |145.45 |100     |
|testSpec:if-then-else.json ignore else without if                                                  |147.24 |100     |
|testSpec:if-then-else.json if and then without else                                                |131.55 |100     |
|testSpec:if-then-else.json if and else without then                                                |125.28 |100     |
|testSpec:if-then-else.json validate against correct branch, then vs else                           |121.89 |100     |
|testSpec:if-then-else.json non-interference across combined schemas                                |190.68 |100     |
|testSpec:maxProperties.json maxProperties validation                                               |108.43 |100     |
|testSpec:minItems.json minItems validation                                                         |107.85 |100     |
|testSpec:additionalItems.json additionalItems as schema                                            |148.54 |100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |204.13 |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |178.63 |100     |
|testSpec:additionalItems.json additionalItems as false without items                               |118.06 |100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |155.13 |100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |119.95 |100     |
|testSpec:pattern.json pattern validation                                                           |100    |107.69  |
|testSpec:pattern.json pattern is not anchored                                                      |147.01 |100     |
|testSpec:multipleOf.json by int                                                                    |129.83 |100     |
|testSpec:multipleOf.json by number                                                                 |157.01 |100     |
|testSpec:multipleOf.json by small number                                                           |201.54 |100     |
|testSpec:maxItems.json maxItems validation                                                         |100    |100.25  |
|testSpec:not.json not                                                                              |100    |155.56  |
|testSpec:not.json not multiple types                                                               |100    |148.48  |
|testSpec:not.json not more complex schema                                                          |100    |130.3   |
|testSpec:not.json forbidden property                                                               |100    |117.43  |
|testSpec:not.json not with boolean schema true                                                     |100    |151.88  |
|testSpec:not.json not with boolean schema false                                                    |100    |245.91  |
|testSpec:required.json required validation                                                         |122.87 |100     |
|testSpec:required.json required default validation                                                 |144.84 |100     |
|testSpec:required.json required with empty array                                                   |150.94 |100     |
|testSpec:const.json const validation                                                               |100    |135.46  |
|testSpec:const.json const with object                                                              |100    |147.84  |
|testSpec:const.json const with array                                                               |100    |172.21  |
|testSpec:const.json const with null                                                                |100    |132.54  |
|testSpec:anyOf.json anyOf                                                                          |134.85 |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100    |124.13  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |132.35 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |130.87 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100    |412.46  |
|testSpec:anyOf.json anyOf complex types                                                            |110.94 |100     |
|testSpec:properties.json object properties validation                                              |118.79 |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |120.45 |100     |
|testSpec:properties.json properties with boolean schema                                            |100    |163.21  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |108.18 |100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |105.64 |100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100    |116.62  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100    |183.73  |
|testSpec:contains.json contains keyword validation                                                 |100    |119.71  |
|testSpec:contains.json contains keyword with const keyword                                         |100    |139.93  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100    |115.15  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100    |134.18  |
|testSpec:propertyNames.json propertyNames validation                                               |140.41 |100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |130.59 |100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100    |161.56  |
|testSpec:minLength.json minLength validation                                                       |104.34 |100     |
|testSpec:oneOf.json oneOf                                                                          |121.11 |100     |
|testSpec:oneOf.json oneOf with base schema                                                         |108.53 |100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100    |140.85  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100    |331.33  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100    |137.23  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100    |472.7   |
|testSpec:oneOf.json oneOf complex types                                                            |105.24 |100     |
|testSpec:definitions.json valid definition                                                         |1072.31|100     |
|testSpec:definitions.json invalid definition                                                       |372.42 |100     |
|Total time for common passed                                                                       |117.94 |100     |
|Total time for all tests (with failed)                                                             |117.23 |100     |
|Tests passed (total: 123)                                                                          |121    |123     |
|Tests passed, %                                                                                    |98.37  |100     |


## Optional spec tests for draft-07
|Test                                                                                                                 |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|------|--------|
|testSpecOptional:bignum.json integer                                                                                 |265.23|100     |
|testSpecOptional:bignum.json number                                                                                  |267.88|100     |
|testSpecOptional:bignum.json string                                                                                  |100   |113.17  |
|testSpecOptional:bignum.json integer comparison                                                                      |232.45|100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100   |104.85  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100   |111.79  |
|testSpecOptional:content.json validation of string-encoded content based on media type                               |100   |105.29  |
|testSpecOptional:content.json validation of binary string-encoding                                                   |100   |116.51  |
|testSpecOptional:content.json validation of binary-encoded media type documents                                      |100   |125.65  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100   |140.01  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|251.41|100     |
|Total time for common passed                                                                                         |127.22|100     |
|Total time for all tests (with failed)                                                                               |127.22|100     |
|Tests passed (total: 11)                                                                                             |11    |11      |
|Tests passed, %                                                                                                      |100   |100     |


## Format spec tests for draft-07
|Test                                                                                     |Opis    |Swaggest|
|-----------------------------------------------------------------------------------------|--------|--------|
|testSpecFormat:uri-template.json format                                                  |100     |131.63  |
|testSpecFormat:relative-json-pointer.json validation of Relative JSON Pointers (RJP)     |119.37  |100     |
|testSpecFormat:iri.json validation of IRIs                                               |100     |139.94  |
|testSpecFormat:time.json validation of time strings                                      |100     |105.58  |
|testSpecFormat:idn-email.json validation of an internationalized e-mail addresses        |171.67  |100     |
|testSpecFormat:ipv4.json validation of IP addresses                                      |100     |119.57  |
|testSpecFormat:uri-reference.json validation of URI References                           |112.86  |100     |
|testSpecFormat:uri.json validation of URIs                                               |122.68  |100     |
|testSpecFormat:idn-hostname.json validation of internationalized host names              |-       |100     |
|testSpecFormat:date.json validation of date strings                                      |100     |102.34  |
|testSpecFormat:email.json validation of e-mail addresses                                 |100     |100.88  |
|testSpecFormat:iri-reference.json validation of IRI References                           |104.33  |100     |
|testSpecFormat:json-pointer.json validation of JSON-pointers (JSON String Representation)|102.32  |100     |
|testSpecFormat:ipv6.json validation of IPv6 addresses                                    |100     |122.62  |
|testSpecFormat:date-time.json validation of date-time strings                            |100     |104.52  |
|testSpecFormat:hostname.json validation of host names                                    |14682.12|100     |
|testSpecFormat:regex.json validation of regular expressions                              |100     |104.2   |
|Total time for common passed                                                             |749.95  |100     |
|Total time for all tests (with failed)                                                   |688.77  |100     |
|Tests passed (total: 17)                                                                 |16      |17      |
|Tests passed, %                                                                          |94.12   |100     |
