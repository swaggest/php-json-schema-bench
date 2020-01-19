## Mandatory spec tests for draft-07
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:maxLength.json maxLength validation                                                       |134.99|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |128.01|100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100   |107.85  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100   |194.3   |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100   |100.6   |
|testSpec:uniqueItems.json uniqueItems with an array of items                                       |100   |105.06  |
|testSpec:uniqueItems.json uniqueItems with an array of items and additionalItems=false             |100   |101.03  |
|testSpec:oneOf.json oneOf                                                                          |121.3 |100     |
|testSpec:oneOf.json oneOf with base schema                                                         |108.28|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100   |132.94  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |377.69  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100   |133.76  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |489.42  |
|testSpec:oneOf.json oneOf complex types                                                            |100.75|100     |
|testSpec:oneOf.json oneOf with empty schema                                                        |112.99|100     |
|testSpec:oneOf.json oneOf with required                                                            |100   |114.33  |
|testSpec:oneOf.json oneOf with missing optional property                                           |100   |119.24  |
|testSpec:definitions.json valid definition                                                         |997.59|100     |
|testSpec:definitions.json invalid definition                                                       |352.01|100     |
|testSpec:minimum.json minimum validation                                                           |157.01|100     |
|testSpec:minimum.json minimum validation with signed integer                                       |115.65|100     |
|testSpec:required.json required validation                                                         |117.11|100     |
|testSpec:required.json required default validation                                                 |142.43|100     |
|testSpec:required.json required with empty array                                                   |147.05|100     |
|testSpec:required.json required with escaped characters                                            |100   |135.41  |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |117.56|100     |
|testSpec:items.json a schema given for items                                                       |119.32|100     |
|testSpec:items.json an array of schemas for items                                                  |133.27|100     |
|testSpec:items.json items with boolean schema (true)                                               |100   |102.63  |
|testSpec:items.json items with boolean schema (false)                                              |100   |213.34  |
|testSpec:items.json items with boolean schemas                                                     |100   |157.5   |
|testSpec:items.json items and subitems                                                             |215.57|100     |
|testSpec:items.json nested items                                                                   |137.16|100     |
|testSpec:default.json invalid type for default                                                     |-     |100     |
|testSpec:default.json invalid string value for default                                             |-     |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |102.35|100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |103.03|100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100   |121.64  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100   |184.16  |
|testSpec:allOf.json allOf                                                                          |127.63|100     |
|testSpec:allOf.json allOf with base schema                                                         |123   |100     |
|testSpec:allOf.json allOf simple types                                                             |151.29|100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |130.09|100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100   |215.3   |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100   |227.26  |
|testSpec:allOf.json allOf with one empty schema                                                    |199.28|100     |
|testSpec:allOf.json allOf with two empty schemas                                                   |222.92|100     |
|testSpec:allOf.json allOf with the first empty schema                                              |151   |100     |
|testSpec:allOf.json allOf with the last empty schema                                               |139.09|100     |
|testSpec:maxProperties.json maxProperties validation                                               |107.11|100     |
|testSpec:minItems.json minItems validation                                                         |107.26|100     |
|testSpec:multipleOf.json by int                                                                    |129.62|100     |
|testSpec:multipleOf.json by number                                                                 |155.07|100     |
|testSpec:multipleOf.json by small number                                                           |181.38|100     |
|testSpec:maxItems.json maxItems validation                                                         |104.98|100     |
|testSpec:anyOf.json anyOf                                                                          |136.8 |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100   |126.88  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |120.24|100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |123.88|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |423.9   |
|testSpec:anyOf.json anyOf complex types                                                            |103.16|100     |
|testSpec:anyOf.json anyOf with one empty schema                                                    |131.02|100     |
|testSpec:anyOf.json nested anyOf, to check validation semantics                                    |100   |126.92  |
|testSpec:const.json const validation                                                               |100   |141.59  |
|testSpec:const.json const with object                                                              |100   |159.47  |
|testSpec:const.json const with array                                                               |100   |187.36  |
|testSpec:const.json const with null                                                                |100   |136.43  |
|testSpec:const.json const with false does not match 0                                              |100   |155.67  |
|testSpec:const.json const with true does not match 1                                               |100   |159.51  |
|testSpec:const.json const with 0 does not match false                                              |100   |-       |
|testSpec:const.json const with 1 does not match true                                               |100   |-       |
|testSpec:format.json validation of e-mail addresses                                                |149.96|100     |
|testSpec:format.json validation of IDN e-mail addresses                                            |150   |100     |
|testSpec:format.json validation of regexes                                                         |152.55|100     |
|testSpec:format.json validation of IP addresses                                                    |147.46|100     |
|testSpec:format.json validation of IPv6 addresses                                                  |150.73|100     |
|testSpec:format.json validation of IDN hostnames                                                   |151.61|100     |
|testSpec:format.json validation of hostnames                                                       |148.72|100     |
|testSpec:format.json validation of date strings                                                    |149.98|100     |
|testSpec:format.json validation of date-time strings                                               |150.28|100     |
|testSpec:format.json validation of time strings                                                    |148.3 |100     |
|testSpec:format.json validation of JSON pointers                                                   |152.07|100     |
|testSpec:format.json validation of relative JSON pointers                                          |150.49|100     |
|testSpec:format.json validation of IRIs                                                            |150.72|100     |
|testSpec:format.json validation of IRI references                                                  |150.75|100     |
|testSpec:format.json validation of URIs                                                            |152.16|100     |
|testSpec:format.json validation of URI references                                                  |153.7 |100     |
|testSpec:format.json validation of URI templates                                                   |151.44|100     |
|testSpec:ref.json root pointer ref                                                                 |147.58|100     |
|testSpec:ref.json relative pointer ref to object                                                   |151.28|100     |
|testSpec:ref.json relative pointer ref to array                                                    |174.71|100     |
|testSpec:ref.json escaped pointer ref                                                              |157.73|100     |
|testSpec:ref.json nested refs                                                                      |232.46|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |156.35|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |633.3 |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100   |106.73  |
|testSpec:ref.json $ref to boolean schema true                                                      |149.41|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100   |261.99  |
|testSpec:ref.json Recursive references between schemas                                             |266.93|100     |
|testSpec:ref.json refs with quote                                                                  |148.48|100     |
|testSpec:ref.json Location-independent identifier                                                  |160.65|100     |
|testSpec:ref.json Location-independent identifier with absolute URI                                |212.78|100     |
|testSpec:ref.json Location-independent identifier with base URI change in subschema                |223.76|100     |
|testSpec:pattern.json pattern validation                                                           |100   |104.26  |
|testSpec:pattern.json pattern is not anchored                                                      |148.23|100     |
|testSpec:properties.json object properties validation                                              |107.37|100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |111.81|100     |
|testSpec:properties.json properties with boolean schema                                            |100   |182.29  |
|testSpec:properties.json properties with escaped characters                                        |134.07|100     |
|testSpec:if-then-else.json ignore if without then or else                                          |119.31|100     |
|testSpec:if-then-else.json ignore then without if                                                  |151.32|100     |
|testSpec:if-then-else.json ignore else without if                                                  |148.51|100     |
|testSpec:if-then-else.json if and then without else                                                |137.94|100     |
|testSpec:if-then-else.json if and else without then                                                |132.56|100     |
|testSpec:if-then-else.json validate against correct branch, then vs else                           |137.64|100     |
|testSpec:if-then-else.json non-interference across combined schemas                                |187.87|100     |
|testSpec:dependencies.json dependencies                                                            |111.83|100     |
|testSpec:dependencies.json dependencies with empty array                                           |123.41|100     |
|testSpec:dependencies.json multiple dependencies                                                   |100   |132.79  |
|testSpec:dependencies.json multiple dependencies subschema                                         |100   |108.39  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100   |224.8   |
|testSpec:dependencies.json empty array of dependencies                                             |119.55|100     |
|testSpec:dependencies.json dependencies with escaped characters                                    |100   |125.82  |
|testSpec:minLength.json minLength validation                                                       |103.96|100     |
|testSpec:type.json integer type matches integers                                                   |100   |148.66  |
|testSpec:type.json number type matches numbers                                                     |100   |132.84  |
|testSpec:type.json string type matches strings                                                     |100   |124.21  |
|testSpec:type.json object type matches objects                                                     |100   |141.24  |
|testSpec:type.json array type matches arrays                                                       |100   |142.84  |
|testSpec:type.json boolean type matches booleans                                                   |100   |146.29  |
|testSpec:type.json null type matches only the null object                                          |100   |155.62  |
|testSpec:type.json multiple types can be specified in an array                                     |100   |106.27  |
|testSpec:type.json type as array with one item                                                     |100   |103.38  |
|testSpec:type.json type                                                                            |100   |100.22  |
|testSpec:additionalItems.json additionalItems as schema                                            |144.82|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |208.29|100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |170.71|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |115.05|100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |155.72|100     |
|testSpec:refRemote.json remote ref                                                                 |188.16|100     |
|testSpec:refRemote.json fragment within remote ref                                                 |238.1 |100     |
|testSpec:refRemote.json ref within remote ref                                                      |277.66|100     |
|testSpec:refRemote.json base URI change                                                            |191.31|100     |
|testSpec:refRemote.json base URI change - change folder                                            |237.94|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |243.24|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |186.02|100     |
|testSpec:not.json not                                                                              |100   |156.89  |
|testSpec:not.json not multiple types                                                               |100   |147.59  |
|testSpec:not.json not more complex schema                                                          |100   |136.84  |
|testSpec:not.json forbidden property                                                               |100   |133.25  |
|testSpec:not.json not with boolean schema true                                                     |100   |148.85  |
|testSpec:not.json not with boolean schema false                                                    |100   |261.45  |
|testSpec:maximum.json maximum validation                                                           |155   |100     |
|testSpec:enum.json simple enum validation                                                          |100   |103.71  |
|testSpec:enum.json heterogeneous enum validation                                                   |100   |140.21  |
|testSpec:enum.json enums in properties                                                             |119.47|100     |
|testSpec:enum.json enum with escaped characters                                                    |112.73|100     |
|testSpec:enum.json enum with false does not match 0                                                |100   |140.17  |
|testSpec:enum.json enum with true does not match 1                                                 |100   |145.42  |
|testSpec:enum.json enum with 0 does not match false                                                |100   |-       |
|testSpec:enum.json enum with 1 does not match true                                                 |100   |-       |
|testSpec:minProperties.json minProperties validation                                               |109.01|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|120.86|100     |
|testSpec:additionalProperties.json non-ASCII pattern with additionalProperties                     |106.45|100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |141.22|100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |107.82|100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |154.77|100     |
|testSpec:additionalProperties.json additionalProperties should not look in applicators             |100   |179.29  |
|testSpec:propertyNames.json propertyNames validation                                               |140.15|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |129.19|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100   |168.26  |
|testSpec:contains.json contains keyword validation                                                 |100   |119.12  |
|testSpec:contains.json contains keyword with const keyword                                         |100   |144.74  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100   |117.93  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100   |119.35  |
|Total time for common passed                                                                       |119.32|100     |
|Total time for all tests (with failed)                                                             |120.01|100     |
|Tests passed (total: 175)                                                                          |173   |171     |
|Tests passed, %                                                                                    |98.86 |97.71   |


## Optional spec tests for draft-07
|Test                                                                                                                 |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|------|--------|
|testSpecOptional:content.json validation of string-encoded content based on media type                               |102.69|100     |
|testSpecOptional:content.json validation of binary string-encoding                                                   |100   |102.72  |
|testSpecOptional:content.json validation of binary-encoded media type documents                                      |100   |117.75  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|247.95|100     |
|testSpecOptional:bignum.json integer                                                                                 |256.85|100     |
|testSpecOptional:bignum.json number                                                                                  |254.47|100     |
|testSpecOptional:bignum.json string                                                                                  |100   |108.2   |
|testSpecOptional:bignum.json integer comparison                                                                      |232   |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100   |111.51  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100   |113.69  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100   |132.96  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex $ does not match trailing newline                              |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex converts \t to horizontal tab                                  |102.27|100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and upper letter                 |101.18|100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and lower letter                 |100   |101.59  |
|testSpecOptional:ecmascript-regex.json ECMA 262 \d matches ascii digits only                                         |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \D matches everything but ascii digits                               |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches ascii letters only                                        |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches everything but ascii letters                              |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \s matches ascii whitespace only                                     |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \S matches everything but ascii whitespace                           |-     |-       |
|Total time for common passed                                                                                         |120.09|100     |
|Total time for all tests (with failed)                                                                               |120.09|100     |
|Tests passed (total: 21)                                                                                             |14    |14      |
|Tests passed, %                                                                                                      |66.67 |66.67   |


## Format spec tests for draft-07
|Test                                                                                     |Opis   |Swaggest|
|-----------------------------------------------------------------------------------------|-------|--------|
|testSpecFormat:date-time.json validation of date-time strings                            |100    |-       |
|testSpecFormat:uri.json validation of URIs                                               |123.99 |100     |
|testSpecFormat:uri-reference.json validation of URI References                           |119    |100     |
|testSpecFormat:time.json validation of time strings                                      |100    |101.76  |
|testSpecFormat:hostname.json validation of host names                                    |19872.2|100     |
|testSpecFormat:idn-email.json validation of an internationalized e-mail addresses        |172.47 |100     |
|testSpecFormat:idn-hostname.json validation of internationalized host names              |-      |100     |
|testSpecFormat:ipv6.json validation of IPv6 addresses                                    |100    |117.87  |
|testSpecFormat:email.json validation of e-mail addresses                                 |101.39 |100     |
|testSpecFormat:iri.json validation of IRIs                                               |100    |136.15  |
|testSpecFormat:ipv4.json validation of IP addresses                                      |100    |113.61  |
|testSpecFormat:date.json validation of date strings                                      |100.85 |100     |
|testSpecFormat:regex.json validation of regular expressions                              |100    |101.9   |
|testSpecFormat:uri-template.json format                                                  |100    |126.29  |
|testSpecFormat:iri-reference.json validation of IRI References                           |113.07 |100     |
|testSpecFormat:json-pointer.json validation of JSON-pointers (JSON String Representation)|109.41 |100     |
|testSpecFormat:relative-json-pointer.json validation of Relative JSON Pointers (RJP)     |123.55 |100     |
|Total time for common passed                                                             |940.84 |100     |
|Total time for all tests (with failed)                                                   |869.61 |100     |
|Tests passed (total: 17)                                                                 |16     |16      |
|Tests passed, %                                                                          |94.12  |94.12   |


