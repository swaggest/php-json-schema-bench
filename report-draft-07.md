## Mandatory spec tests for draft-07
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |268.62|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |261.25|100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |320.32|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |320.31|100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |310.15|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|278.36|100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |313.18|100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |260.74|100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |343.49|100     |
|testSpec:allOf.json allOf                                                                          |263.37|100     |
|testSpec:allOf.json allOf with base schema                                                         |275.76|100     |
|testSpec:allOf.json allOf simple types                                                             |349.97|100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |309.7 |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |111.67|100     |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100.37|100     |
|testSpec:anyOf.json anyOf                                                                          |278.74|100     |
|testSpec:anyOf.json anyOf with base schema                                                         |194.25|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |399.41|100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |320.85|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |164.32  |
|testSpec:anyOf.json anyOf complex types                                                            |225.02|100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |810.07|100     |
|testSpec:boolean_schema.json boolean schema 'false'                                                |351.65|100     |
|testSpec:const.json const validation                                                               |217.81|100     |
|testSpec:const.json const with object                                                              |172.52|100     |
|testSpec:const.json const with array                                                               |160.11|100     |
|testSpec:const.json const with null                                                                |261.69|100     |
|testSpec:contains.json contains keyword validation                                                 |155.73|100     |
|testSpec:contains.json contains keyword with const keyword                                         |146.37|100     |
|testSpec:contains.json contains keyword with boolean schema true                                   |242.33|100     |
|testSpec:contains.json contains keyword with boolean schema false                                  |223.21|100     |
|testSpec:default.json invalid type for default                                                     |-     |100     |
|testSpec:default.json invalid string value for default                                             |-     |100     |
|testSpec:definitions.json valid definition                                                         |949.09|100     |
|testSpec:definitions.json invalid definition                                                       |406.43|100     |
|testSpec:dependencies.json dependencies                                                            |376.67|100     |
|testSpec:dependencies.json dependencies with empty array                                           |395.41|100     |
|testSpec:dependencies.json multiple dependencies                                                   |241.18|100     |
|testSpec:dependencies.json multiple dependencies subschema                                         |230.92|100     |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |115.19|100     |
|testSpec:enum.json simple enum validation                                                          |236.69|100     |
|testSpec:enum.json heterogeneous enum validation                                                   |231.13|100     |
|testSpec:enum.json enums in properties                                                             |316.97|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |299.36|100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |307.42|100     |
|testSpec:if-then-else.json ignore if without then or else                                          |304.94|100     |
|testSpec:if-then-else.json ignore then without if                                                  |488.35|100     |
|testSpec:if-then-else.json ignore else without if                                                  |455.92|100     |
|testSpec:if-then-else.json if and then without else                                                |276.68|100     |
|testSpec:if-then-else.json if and else without then                                                |260.8 |100     |
|testSpec:if-then-else.json validate against correct branch, then vs else                           |281.07|100     |
|testSpec:if-then-else.json non-interference across combined schemas                                |344.16|100     |
|testSpec:items.json a schema given for items                                                       |276.99|100     |
|testSpec:items.json an array of schemas for items                                                  |324.11|100     |
|testSpec:items.json items with boolean schema (true)                                               |256.88|100     |
|testSpec:items.json items with boolean schema (false)                                              |164.73|100     |
|testSpec:items.json items with boolean schemas                                                     |189.31|100     |
|testSpec:maximum.json maximum validation                                                           |381.26|100     |
|testSpec:maxItems.json maxItems validation                                                         |307.91|100     |
|testSpec:maxLength.json maxLength validation                                                       |319.24|100     |
|testSpec:maxProperties.json maxProperties validation                                               |309.32|100     |
|testSpec:minimum.json minimum validation                                                           |369.58|100     |
|testSpec:minItems.json minItems validation                                                         |327.15|100     |
|testSpec:minLength.json minLength validation                                                       |285.3 |100     |
|testSpec:minProperties.json minProperties validation                                               |349.89|100     |
|testSpec:multipleOf.json by int                                                                    |326.58|100     |
|testSpec:multipleOf.json by number                                                                 |361.36|100     |
|testSpec:multipleOf.json by small number                                                           |358.38|100     |
|testSpec:not.json not                                                                              |155.37|100     |
|testSpec:not.json not multiple types                                                               |175.7 |100     |
|testSpec:not.json not more complex schema                                                          |195.85|100     |
|testSpec:not.json forbidden property                                                               |159.02|100     |
|testSpec:not.json not with boolean schema true                                                     |201.23|100     |
|testSpec:not.json not with boolean schema false                                                    |100   |114.92  |
|testSpec:oneOf.json oneOf                                                                          |218.87|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |226.64|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |206.72|100     |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |165.42  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |208.39|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |231.91  |
|testSpec:oneOf.json oneOf complex types                                                            |181.91|100     |
|testSpec:pattern.json pattern validation                                                           |321.75|100     |
|testSpec:pattern.json pattern is not anchored                                                      |396.41|100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |242.53|100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |196.49|100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |194.55|100     |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |136.22|100     |
|testSpec:properties.json object properties validation                                              |279.17|100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |256.84|100     |
|testSpec:properties.json properties with boolean schema                                            |147.24|100     |
|testSpec:propertyNames.json propertyNames validation                                               |301.37|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |345.6 |100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |145.83|100     |
|testSpec:ref.json root pointer ref                                                                 |356.73|100     |
|testSpec:ref.json relative pointer ref to object                                                   |360.6 |100     |
|testSpec:ref.json relative pointer ref to array                                                    |366.61|100     |
|testSpec:ref.json escaped pointer ref                                                              |391.35|100     |
|testSpec:ref.json nested refs                                                                      |435.52|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |391.56|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |729.65|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |224.79|100     |
|testSpec:ref.json $ref to boolean schema true                                                      |321.83|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |105.22|100     |
|testSpec:ref.json Recursive references between schemas                                             |342.81|100     |
|testSpec:refRemote.json remote ref                                                                 |342.58|100     |
|testSpec:refRemote.json fragment within remote ref                                                 |365.62|100     |
|testSpec:refRemote.json ref within remote ref                                                      |507.7 |100     |
|testSpec:refRemote.json base URI change                                                            |455.51|100     |
|testSpec:refRemote.json base URI change - change folder                                            |494.55|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |427.38|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |306.19|100     |
|testSpec:required.json required validation                                                         |309.15|100     |
|testSpec:required.json required default validation                                                 |408.62|100     |
|testSpec:required.json required with empty array                                                   |390.1 |100     |
|testSpec:type.json integer type matches integers                                                   |214.42|100     |
|testSpec:type.json number type matches numbers                                                     |217.13|100     |
|testSpec:type.json string type matches strings                                                     |208.05|100     |
|testSpec:type.json object type matches objects                                                     |229.94|100     |
|testSpec:type.json array type matches arrays                                                       |196.01|100     |
|testSpec:type.json boolean type matches booleans                                                   |223.03|100     |
|testSpec:type.json null type matches only the null object                                          |201.21|100     |
|testSpec:type.json multiple types can be specified in an array                                     |239.35|100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |237.13|100     |
|Total time for common passed                                                                       |260   |100     |
|Total time for all tests (with failed)                                                             |258.3 |100     |
|Tests passed (total: 123)                                                                          |121   |123     |
|Tests passed, %                                                                                    |98.37 |100     |


## Optional spec tests for draft-07
|Test                                                                                                                 |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|------|--------|
|testSpecOptional:bignum.json integer                                                                                 |472.78|100     |
|testSpecOptional:bignum.json number                                                                                  |463.49|100     |
|testSpecOptional:bignum.json string                                                                                  |237.39|100     |
|testSpecOptional:bignum.json integer comparison                                                                      |519.37|100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |238.69|100     |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |212.56|100     |
|testSpecOptional:content.json validation of string-encoded content based on media type                               |232.28|100     |
|testSpecOptional:content.json validation of binary string-encoding                                                   |276.08|100     |
|testSpecOptional:content.json validation of binary-encoded media type documents                                      |214.43|100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-     |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|430.95|100     |
|Total time for common passed                                                                                         |300.23|100     |
|Total time for all tests (with failed)                                                                               |280.28|100     |
|Tests passed (total: 11)                                                                                             |10    |11      |
|Tests passed, %                                                                                                      |90.91 |100     |


## Format spec tests for draft-07
|Test                                                                                     |Opis    |Swaggest|
|-----------------------------------------------------------------------------------------|--------|--------|
|testSpecFormat:date-time.json validation of date-time strings                            |233.19  |100     |
|testSpecFormat:date.json validation of date strings                                      |257.89  |100     |
|testSpecFormat:email.json validation of e-mail addresses                                 |220.73  |100     |
|testSpecFormat:hostname.json validation of host names                                    |13915.18|100     |
|testSpecFormat:idn-email.json validation of an internationalized e-mail addresses        |-       |100     |
|testSpecFormat:idn-hostname.json validation of internationalized host names              |-       |100     |
|testSpecFormat:ipv4.json validation of IP addresses                                      |235.32  |100     |
|testSpecFormat:ipv6.json validation of IPv6 addresses                                    |251.04  |100     |
|testSpecFormat:iri-reference.json validation of IRI References                           |-       |100     |
|testSpecFormat:iri.json validation of IRIs                                               |-       |100     |
|testSpecFormat:json-pointer.json validation of JSON-pointers (JSON String Representation)|300.67  |100     |
|testSpecFormat:regex.json validation of regular expressions                              |213.99  |100     |
|testSpecFormat:relative-json-pointer.json validation of Relative JSON Pointers (RJP)     |305.38  |100     |
|testSpecFormat:time.json validation of time strings                                      |317.39  |100     |
|testSpecFormat:uri-reference.json validation of URI References                           |-       |100     |
|testSpecFormat:uri-template.json format                                                  |-       |100     |
|testSpecFormat:uri.json validation of URIs                                               |-       |100     |
|Total time for common passed                                                             |1386.45 |100     |
|Total time for all tests (with failed)                                                   |592.53  |100     |
|Tests passed (total: 17)                                                                 |10      |17      |
|Tests passed, %                                                                          |58.82   |100     |


