## Mandatory spec tests for draft-07
|Test                                                                                               |Opis   |Swaggest|
|---------------------------------------------------------------------------------------------------|-------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |301.35 |100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |440.05 |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |350.79 |100     |
|testSpec:additionalItems.json additionalItems as false without items                               |274.63 |100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |364.35 |100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|281.46 |100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |271.78 |100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |232.47 |100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |304.19 |100     |
|testSpec:allOf.json allOf                                                                          |278.21 |100     |
|testSpec:allOf.json allOf with base schema                                                         |304.37 |100     |
|testSpec:allOf.json allOf simple types                                                             |329.17 |100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |366.5  |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |226.19 |100     |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |185.21 |100     |
|testSpec:anyOf.json anyOf                                                                          |292.8  |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |176.27 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |402.41 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |445.02 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |111.23 |100     |
|testSpec:anyOf.json anyOf complex types                                                            |227.74 |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |847.7  |100     |
|testSpec:boolean_schema.json boolean schema 'false'                                                |375.64 |100     |
|testSpec:const.json const validation                                                               |304.25 |100     |
|testSpec:const.json const with object                                                              |200.96 |100     |
|testSpec:const.json const with array                                                               |186.82 |100     |
|testSpec:const.json const with null                                                                |278.81 |100     |
|testSpec:contains.json contains keyword validation                                                 |173.61 |100     |
|testSpec:contains.json contains keyword with const keyword                                         |168.43 |100     |
|testSpec:contains.json contains keyword with boolean schema true                                   |241.47 |100     |
|testSpec:contains.json contains keyword with boolean schema false                                  |227.52 |100     |
|testSpec:default.json invalid type for default                                                     |-      |100     |
|testSpec:default.json invalid string value for default                                             |-      |100     |
|testSpec:definitions.json valid definition                                                         |1063.62|100     |
|testSpec:definitions.json invalid definition                                                       |535.73 |100     |
|testSpec:dependencies.json dependencies                                                            |378.26 |100     |
|testSpec:dependencies.json dependencies with empty array                                           |378.4  |100     |
|testSpec:dependencies.json multiple dependencies                                                   |262.19 |100     |
|testSpec:dependencies.json multiple dependencies subschema                                         |230.6  |100     |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |154.92 |100     |
|testSpec:enum.json simple enum validation                                                          |323.12 |100     |
|testSpec:enum.json heterogeneous enum validation                                                   |309.28 |100     |
|testSpec:enum.json enums in properties                                                             |334.7  |100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |344.7  |100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |260.74 |100     |
|testSpec:if-then-else.json ignore if without then or else                                          |301.83 |100     |
|testSpec:if-then-else.json ignore then without if                                                  |487.73 |100     |
|testSpec:if-then-else.json ignore else without if                                                  |508.19 |100     |
|testSpec:if-then-else.json if and then without else                                                |295.44 |100     |
|testSpec:if-then-else.json if and else without then                                                |302.85 |100     |
|testSpec:if-then-else.json validate against correct branch, then vs else                           |321.15 |100     |
|testSpec:if-then-else.json non-interference across combined schemas                                |418.1  |100     |
|testSpec:items.json a schema given for items                                                       |254.08 |100     |
|testSpec:items.json an array of schemas for items                                                  |386.22 |100     |
|testSpec:items.json items with boolean schema (true)                                               |355.02 |100     |
|testSpec:items.json items with boolean schema (false)                                              |225.46 |100     |
|testSpec:items.json items with boolean schemas                                                     |276.58 |100     |
|testSpec:maximum.json maximum validation                                                           |365.96 |100     |
|testSpec:maxItems.json maxItems validation                                                         |302.87 |100     |
|testSpec:maxLength.json maxLength validation                                                       |341.01 |100     |
|testSpec:maxProperties.json maxProperties validation                                               |341.14 |100     |
|testSpec:minimum.json minimum validation                                                           |499.54 |100     |
|testSpec:minItems.json minItems validation                                                         |360.39 |100     |
|testSpec:minLength.json minLength validation                                                       |257.32 |100     |
|testSpec:minProperties.json minProperties validation                                               |363.6  |100     |
|testSpec:multipleOf.json by int                                                                    |383.46 |100     |
|testSpec:multipleOf.json by number                                                                 |367.57 |100     |
|testSpec:multipleOf.json by small number                                                           |454.46 |100     |
|testSpec:not.json not                                                                              |288.7  |100     |
|testSpec:not.json not multiple types                                                               |289.54 |100     |
|testSpec:not.json not more complex schema                                                          |272.55 |100     |
|testSpec:not.json forbidden property                                                               |261.86 |100     |
|testSpec:not.json not with boolean schema true                                                     |219.45 |100     |
|testSpec:not.json not with boolean schema false                                                    |184.18 |100     |
|testSpec:oneOf.json oneOf                                                                          |236.7  |100     |
|testSpec:oneOf.json oneOf with base schema                                                         |292.38 |100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |234.54 |100     |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |129.7  |100     |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |213.78 |100     |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100    |128.64  |
|testSpec:oneOf.json oneOf complex types                                                            |199.5  |100     |
|testSpec:pattern.json pattern validation                                                           |313.96 |100     |
|testSpec:pattern.json pattern is not anchored                                                      |395.5  |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |255.83 |100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |184.75 |100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |215.93 |100     |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |154.78 |100     |
|testSpec:properties.json object properties validation                                              |289.57 |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |282.87 |100     |
|testSpec:properties.json properties with boolean schema                                            |268.82 |100     |
|testSpec:propertyNames.json propertyNames validation                                               |367.93 |100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |403.7  |100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |231.44 |100     |
|testSpec:ref.json root pointer ref                                                                 |402.32 |100     |
|testSpec:ref.json relative pointer ref to object                                                   |378.5  |100     |
|testSpec:ref.json relative pointer ref to array                                                    |421.75 |100     |
|testSpec:ref.json escaped pointer ref                                                              |455.24 |100     |
|testSpec:ref.json nested refs                                                                      |486.7  |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |388.89 |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |883.66 |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |203.68 |100     |
|testSpec:ref.json $ref to boolean schema true                                                      |353.35 |100     |
|testSpec:ref.json $ref to boolean schema false                                                     |215.59 |100     |
|testSpec:ref.json Recursive references between schemas                                             |417.97 |100     |
|testSpec:refRemote.json remote ref                                                                 |415.06 |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |459.92 |100     |
|testSpec:refRemote.json ref within remote ref                                                      |552.78 |100     |
|testSpec:refRemote.json base URI change                                                            |562.65 |100     |
|testSpec:refRemote.json base URI change - change folder                                            |527.84 |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |552.27 |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |358.66 |100     |
|testSpec:required.json required validation                                                         |403.55 |100     |
|testSpec:required.json required default validation                                                 |447.69 |100     |
|testSpec:required.json required with empty array                                                   |436.37 |100     |
|testSpec:type.json integer type matches integers                                                   |204.27 |100     |
|testSpec:type.json number type matches numbers                                                     |222.19 |100     |
|testSpec:type.json string type matches strings                                                     |230.23 |100     |
|testSpec:type.json object type matches objects                                                     |244.56 |100     |
|testSpec:type.json array type matches arrays                                                       |241.27 |100     |
|testSpec:type.json boolean type matches booleans                                                   |245.21 |100     |
|testSpec:type.json null type matches only the null object                                          |253.38 |100     |
|testSpec:type.json multiple types can be specified in an array                                     |288.25 |100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |230.36 |100     |
|Total time for common passed                                                                       |297.53 |100     |
|Total time for all tests (with failed)                                                             |295.62 |100     |
|Tests passed (total: 123)                                                                          |121    |123     |
|Tests passed, %                                                                                    |98.37  |100     |


## Optional spec tests for draft-07
|Test                                                                                                                 |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|------|--------|
|testSpecOptional:bignum.json integer                                                                                 |465.15|100     |
|testSpecOptional:bignum.json number                                                                                  |580.87|100     |
|testSpecOptional:bignum.json string                                                                                  |230.52|100     |
|testSpecOptional:bignum.json integer comparison                                                                      |581.87|100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |243.64|100     |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |299.27|100     |
|testSpecOptional:content.json validation of string-encoded content based on media type                               |254.98|100     |
|testSpecOptional:content.json validation of binary string-encoding                                                   |241.53|100     |
|testSpecOptional:content.json validation of binary-encoded media type documents                                      |223.73|100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-     |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|645.19|100     |
|Total time for common passed                                                                                         |333.26|100     |
|Total time for all tests (with failed)                                                                               |307.12|100     |
|Tests passed (total: 11)                                                                                             |10    |11      |
|Tests passed, %                                                                                                      |90.91 |100     |


## Format spec tests for draft-07
|Test                                                                                     |Opis    |Swaggest|
|-----------------------------------------------------------------------------------------|--------|--------|
|testSpecFormat:date-time.json validation of date-time strings                            |295.34  |100     |
|testSpecFormat:date.json validation of date strings                                      |311.02  |100     |
|testSpecFormat:email.json validation of e-mail addresses                                 |259.86  |100     |
|testSpecFormat:hostname.json validation of host names                                    |15402.35|100     |
|testSpecFormat:idn-email.json validation of an internationalized e-mail addresses        |-       |100     |
|testSpecFormat:idn-hostname.json validation of internationalized host names              |-       |100     |
|testSpecFormat:ipv4.json validation of IP addresses                                      |275.48  |100     |
|testSpecFormat:ipv6.json validation of IPv6 addresses                                    |241.41  |100     |
|testSpecFormat:iri-reference.json validation of IRI References                           |-       |100     |
|testSpecFormat:iri.json validation of IRIs                                               |-       |-       |
|testSpecFormat:json-pointer.json validation of JSON-pointers (JSON String Representation)|312.45  |100     |
|testSpecFormat:regex.json validation of regular expressions                              |249.22  |100     |
|testSpecFormat:relative-json-pointer.json validation of Relative JSON Pointers (RJP)     |355.25  |100     |
|testSpecFormat:time.json validation of time strings                                      |280.81  |100     |
|testSpecFormat:uri-reference.json validation of URI References                           |-       |100     |
|testSpecFormat:uri-template.json format                                                  |-       |100     |
|testSpecFormat:uri.json validation of URIs                                               |-       |100     |
|Total time for common passed                                                             |1545.36 |100     |
|Total time for all tests (with failed)                                                   |808.32  |100     |
|Tests passed (total: 17)                                                                 |10      |16      |
|Tests passed, %                                                                          |58.82   |94.12   |


