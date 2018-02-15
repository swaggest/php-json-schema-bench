## Mandatory spec tests for draft-07
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |279.02|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |275.18|100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |350.67|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |330.3 |100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |453.02|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|284.48|100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |332.99|100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |266.17|100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |391   |100     |
|testSpec:allOf.json allOf                                                                          |312.86|100     |
|testSpec:allOf.json allOf with base schema                                                         |276.19|100     |
|testSpec:allOf.json allOf simple types                                                             |348.07|100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |354.7 |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |200.08|100     |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |218.67|100     |
|testSpec:anyOf.json anyOf                                                                          |313.04|100     |
|testSpec:anyOf.json anyOf with base schema                                                         |165.83|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |319.7 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |297.56|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |108.29|100     |
|testSpec:anyOf.json anyOf complex types                                                            |253.89|100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |906.43|100     |
|testSpec:boolean_schema.json boolean schema 'false'                                                |423.2 |100     |
|testSpec:const.json const validation                                                               |259.14|100     |
|testSpec:const.json const with object                                                              |182.91|100     |
|testSpec:const.json const with array                                                               |173.83|100     |
|testSpec:const.json const with null                                                                |228.24|100     |
|testSpec:contains.json contains keyword validation                                                 |206.45|100     |
|testSpec:contains.json contains keyword with const keyword                                         |173.84|100     |
|testSpec:contains.json contains keyword with boolean schema true                                   |258.21|100     |
|testSpec:contains.json contains keyword with boolean schema false                                  |259.06|100     |
|testSpec:default.json invalid type for default                                                     |-     |100     |
|testSpec:default.json invalid string value for default                                             |-     |100     |
|testSpec:definitions.json valid definition                                                         |1079.9|100     |
|testSpec:definitions.json invalid definition                                                       |494.77|100     |
|testSpec:dependencies.json dependencies                                                            |316.6 |100     |
|testSpec:dependencies.json dependencies with empty array                                           |290.4 |100     |
|testSpec:dependencies.json multiple dependencies                                                   |205.85|100     |
|testSpec:dependencies.json multiple dependencies subschema                                         |234.45|100     |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |200.94|100     |
|testSpec:enum.json simple enum validation                                                          |308.35|100     |
|testSpec:enum.json heterogeneous enum validation                                                   |225.05|100     |
|testSpec:enum.json enums in properties                                                             |309.93|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |379.98|100     |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |300.69|100     |
|testSpec:if-then-else.json ignore if without then or else                                          |231.31|100     |
|testSpec:if-then-else.json ignore then without if                                                  |349.92|100     |
|testSpec:if-then-else.json ignore else without if                                                  |410.04|100     |
|testSpec:if-then-else.json if and then without else                                                |353.58|100     |
|testSpec:if-then-else.json if and else without then                                                |285.3 |100     |
|testSpec:if-then-else.json validate against correct branch, then vs else                           |318.98|100     |
|testSpec:if-then-else.json non-interference across combined schemas                                |382.44|100     |
|testSpec:items.json a schema given for items                                                       |261.73|100     |
|testSpec:items.json an array of schemas for items                                                  |376.17|100     |
|testSpec:items.json items with boolean schema (true)                                               |370.09|100     |
|testSpec:items.json items with boolean schema (false)                                              |268.41|100     |
|testSpec:items.json items with boolean schemas                                                     |320.73|100     |
|testSpec:maximum.json maximum validation                                                           |438.94|100     |
|testSpec:maxItems.json maxItems validation                                                         |354.06|100     |
|testSpec:maxLength.json maxLength validation                                                       |350   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |353.04|100     |
|testSpec:minimum.json minimum validation                                                           |452.09|100     |
|testSpec:minItems.json minItems validation                                                         |319.02|100     |
|testSpec:minLength.json minLength validation                                                       |353.88|100     |
|testSpec:minProperties.json minProperties validation                                               |287.61|100     |
|testSpec:multipleOf.json by int                                                                    |335.11|100     |
|testSpec:multipleOf.json by number                                                                 |397.48|100     |
|testSpec:multipleOf.json by small number                                                           |395.82|100     |
|testSpec:not.json not                                                                              |276.55|100     |
|testSpec:not.json not multiple types                                                               |310.65|100     |
|testSpec:not.json not more complex schema                                                          |231.78|100     |
|testSpec:not.json forbidden property                                                               |258.17|100     |
|testSpec:not.json not with boolean schema true                                                     |222.94|100     |
|testSpec:not.json not with boolean schema false                                                    |155.79|100     |
|testSpec:oneOf.json oneOf                                                                          |198.04|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |207.12|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |200.15|100     |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |103.99|100     |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |193.06|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |142.45  |
|testSpec:oneOf.json oneOf complex types                                                            |179.03|100     |
|testSpec:pattern.json pattern validation                                                           |296.05|100     |
|testSpec:pattern.json pattern is not anchored                                                      |406.47|100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |271.24|100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |238.25|100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |191.84|100     |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |183.08|100     |
|testSpec:properties.json object properties validation                                              |314.77|100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |257.49|100     |
|testSpec:properties.json properties with boolean schema                                            |220.79|100     |
|testSpec:propertyNames.json propertyNames validation                                               |313.09|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |316.97|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |247.21|100     |
|testSpec:ref.json root pointer ref                                                                 |381.58|100     |
|testSpec:ref.json relative pointer ref to object                                                   |428.07|100     |
|testSpec:ref.json relative pointer ref to array                                                    |414.72|100     |
|testSpec:ref.json escaped pointer ref                                                              |403.81|100     |
|testSpec:ref.json nested refs                                                                      |476.35|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |405.1 |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |886.53|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |260.28|100     |
|testSpec:ref.json $ref to boolean schema true                                                      |395.4 |100     |
|testSpec:ref.json $ref to boolean schema false                                                     |195.8 |100     |
|testSpec:ref.json Recursive references between schemas                                             |371.88|100     |
|testSpec:refRemote.json remote ref                                                                 |318.89|100     |
|testSpec:refRemote.json fragment within remote ref                                                 |419.16|100     |
|testSpec:refRemote.json ref within remote ref                                                      |545.32|100     |
|testSpec:refRemote.json base URI change                                                            |473.56|100     |
|testSpec:refRemote.json base URI change - change folder                                            |498.12|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |428.32|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |350.33|100     |
|testSpec:required.json required validation                                                         |384.34|100     |
|testSpec:required.json required default validation                                                 |425.75|100     |
|testSpec:required.json required with empty array                                                   |416.74|100     |
|testSpec:type.json integer type matches integers                                                   |214.17|100     |
|testSpec:type.json number type matches numbers                                                     |233.28|100     |
|testSpec:type.json string type matches strings                                                     |247.91|100     |
|testSpec:type.json object type matches objects                                                     |235.5 |100     |
|testSpec:type.json array type matches arrays                                                       |226.73|100     |
|testSpec:type.json boolean type matches booleans                                                   |205.73|100     |
|testSpec:type.json null type matches only the null object                                          |214.52|100     |
|testSpec:type.json multiple types can be specified in an array                                     |300.65|100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |234.34|100     |
|Total time for common passed                                                                       |292.4 |100     |
|Total time for all tests (with failed)                                                             |290.64|100     |
|Tests passed (total: 123)                                                                          |121   |123     |
|Tests passed, %                                                                                    |98.37 |100     |


## Optional spec tests for draft-07
|Test                                                                                                                 |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|------|--------|
|testSpecOptional:bignum.json integer                                                                                 |562.5 |100     |
|testSpecOptional:bignum.json number                                                                                  |544.54|100     |
|testSpecOptional:bignum.json string                                                                                  |200.71|100     |
|testSpecOptional:bignum.json integer comparison                                                                      |447.51|100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |184.63|100     |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |221.06|100     |
|testSpecOptional:content.json validation of string-encoded content based on media type                               |286.3 |100     |
|testSpecOptional:content.json validation of binary string-encoding                                                   |264.09|100     |
|testSpecOptional:content.json validation of binary-encoded media type documents                                      |203.57|100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-     |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|516.16|100     |
|Total time for common passed                                                                                         |301.9 |100     |
|Total time for all tests (with failed)                                                                               |282.01|100     |
|Tests passed (total: 11)                                                                                             |10    |11      |
|Tests passed, %                                                                                                      |90.91 |100     |


## Format spec tests for draft-07
|Test                                                                                     |Opis    |Swaggest|
|-----------------------------------------------------------------------------------------|--------|--------|
|testSpecFormat:date-time.json validation of date-time strings                            |274.19  |100     |
|testSpecFormat:date.json validation of date strings                                      |287.07  |100     |
|testSpecFormat:email.json validation of e-mail addresses                                 |247.66  |100     |
|testSpecFormat:hostname.json validation of host names                                    |12970.89|100     |
|testSpecFormat:idn-email.json validation of an internationalized e-mail addresses        |-       |100     |
|testSpecFormat:idn-hostname.json validation of internationalized host names              |-       |100     |
|testSpecFormat:ipv4.json validation of IP addresses                                      |251.74  |100     |
|testSpecFormat:ipv6.json validation of IPv6 addresses                                    |285.65  |100     |
|testSpecFormat:iri-reference.json validation of IRI References                           |-       |100     |
|testSpecFormat:iri.json validation of IRIs                                               |-       |-       |
|testSpecFormat:json-pointer.json validation of JSON-pointers (JSON String Representation)|314.47  |100     |
|testSpecFormat:regex.json validation of regular expressions                              |213.19  |100     |
|testSpecFormat:relative-json-pointer.json validation of Relative JSON Pointers (RJP)     |331.84  |100     |
|testSpecFormat:time.json validation of time strings                                      |235.44  |100     |
|testSpecFormat:uri-reference.json validation of URI References                           |-       |100     |
|testSpecFormat:uri-template.json format                                                  |-       |100     |
|testSpecFormat:uri.json validation of URIs                                               |-       |100     |
|Total time for common passed                                                             |1430.16 |100     |
|Total time for all tests (with failed)                                                   |764.39  |100     |
|Tests passed (total: 17)                                                                 |10      |16      |
|Tests passed, %                                                                          |58.82   |94.12   |


