## Mandatory spec tests for draft-07
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:maxLength.json maxLength validation                                                       |121.08|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |124.6 |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100   |111.15  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100   |213.88  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100   |105.33  |
|testSpec:uniqueItems.json uniqueItems with an array of items                                       |100   |103.16  |
|testSpec:uniqueItems.json uniqueItems with an array of items and additionalItems=false             |100   |100.81  |
|testSpec:oneOf.json oneOf                                                                          |117.94|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |104.34|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100   |137.45  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |716.73  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100   |137.81  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |960.07  |
|testSpec:oneOf.json oneOf complex types                                                            |101.63|100     |
|testSpec:oneOf.json oneOf with empty schema                                                        |108.25|100     |
|testSpec:oneOf.json oneOf with required                                                            |100   |110.97  |
|testSpec:oneOf.json oneOf with missing optional property                                           |100   |120.23  |
|testSpec:definitions.json valid definition                                                         |943.71|100     |
|testSpec:definitions.json invalid definition                                                       |352.36|100     |
|testSpec:minimum.json minimum validation                                                           |149.69|100     |
|testSpec:minimum.json minimum validation with signed integer                                       |108.87|100     |
|testSpec:required.json required validation                                                         |112.36|100     |
|testSpec:required.json required default validation                                                 |138.64|100     |
|testSpec:required.json required with empty array                                                   |136.84|100     |
|testSpec:required.json required with escaped characters                                            |100   |132.4   |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |118.79|100     |
|testSpec:items.json a schema given for items                                                       |118.93|100     |
|testSpec:items.json an array of schemas for items                                                  |134.14|100     |
|testSpec:items.json items with boolean schema (true)                                               |100   |106.07  |
|testSpec:items.json items with boolean schema (false)                                              |100   |330.81  |
|testSpec:items.json items with boolean schemas                                                     |100   |240.49  |
|testSpec:items.json items and subitems                                                             |212.6 |100     |
|testSpec:items.json nested items                                                                   |140.55|100     |
|testSpec:default.json invalid type for default                                                     |-     |100     |
|testSpec:default.json invalid string value for default                                             |-     |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |101.73|100     |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |102.37|100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100   |116.38  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100   |270.9   |
|testSpec:allOf.json allOf                                                                          |122.79|100     |
|testSpec:allOf.json allOf with base schema                                                         |120.4 |100     |
|testSpec:allOf.json allOf simple types                                                             |157.57|100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |118.6 |100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100   |414.45  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100   |429.88  |
|testSpec:allOf.json allOf with one empty schema                                                    |197.29|100     |
|testSpec:allOf.json allOf with two empty schemas                                                   |243.89|100     |
|testSpec:allOf.json allOf with the first empty schema                                              |140.19|100     |
|testSpec:allOf.json allOf with the last empty schema                                               |135.27|100     |
|testSpec:maxProperties.json maxProperties validation                                               |111.43|100     |
|testSpec:minItems.json minItems validation                                                         |102.49|100     |
|testSpec:multipleOf.json by int                                                                    |130.36|100     |
|testSpec:multipleOf.json by number                                                                 |160.44|100     |
|testSpec:multipleOf.json by small number                                                           |175.6 |100     |
|testSpec:maxItems.json maxItems validation                                                         |105.18|100     |
|testSpec:anyOf.json anyOf                                                                          |126.54|100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100   |133.16  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |118.4 |100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |124.44|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |762.99  |
|testSpec:anyOf.json anyOf complex types                                                            |100.36|100     |
|testSpec:anyOf.json anyOf with one empty schema                                                    |120.11|100     |
|testSpec:anyOf.json nested anyOf, to check validation semantics                                    |100   |129.71  |
|testSpec:const.json const validation                                                               |100   |148.85  |
|testSpec:const.json const with object                                                              |100   |167.33  |
|testSpec:const.json const with array                                                               |100   |196.52  |
|testSpec:const.json const with null                                                                |100   |138.22  |
|testSpec:const.json const with false does not match 0                                              |100   |159.63  |
|testSpec:const.json const with true does not match 1                                               |100   |177.79  |
|testSpec:const.json const with 0 does not match false                                              |100   |-       |
|testSpec:const.json const with 1 does not match true                                               |100   |-       |
|testSpec:format.json validation of e-mail addresses                                                |151.99|100     |
|testSpec:format.json validation of IDN e-mail addresses                                            |147.84|100     |
|testSpec:format.json validation of regexes                                                         |149.37|100     |
|testSpec:format.json validation of IP addresses                                                    |145.96|100     |
|testSpec:format.json validation of IPv6 addresses                                                  |145.88|100     |
|testSpec:format.json validation of IDN hostnames                                                   |152.25|100     |
|testSpec:format.json validation of hostnames                                                       |147.12|100     |
|testSpec:format.json validation of date strings                                                    |150.9 |100     |
|testSpec:format.json validation of date-time strings                                               |157.39|100     |
|testSpec:format.json validation of time strings                                                    |149.13|100     |
|testSpec:format.json validation of JSON pointers                                                   |160.23|100     |
|testSpec:format.json validation of relative JSON pointers                                          |148.32|100     |
|testSpec:format.json validation of IRIs                                                            |148.46|100     |
|testSpec:format.json validation of IRI references                                                  |151.39|100     |
|testSpec:format.json validation of URIs                                                            |144.55|100     |
|testSpec:format.json validation of URI references                                                  |149.39|100     |
|testSpec:format.json validation of URI templates                                                   |149.12|100     |
|testSpec:ref.json root pointer ref                                                                 |141.71|100     |
|testSpec:ref.json relative pointer ref to object                                                   |139.35|100     |
|testSpec:ref.json relative pointer ref to array                                                    |177.32|100     |
|testSpec:ref.json escaped pointer ref                                                              |150.12|100     |
|testSpec:ref.json nested refs                                                                      |231.81|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |155.04|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |621.37|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |102.99|100     |
|testSpec:ref.json $ref to boolean schema true                                                      |168.47|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100   |458.45  |
|testSpec:ref.json Recursive references between schemas                                             |258.43|100     |
|testSpec:ref.json refs with quote                                                                  |138.95|100     |
|testSpec:ref.json Location-independent identifier                                                  |169.43|100     |
|testSpec:ref.json Location-independent identifier with absolute URI                                |209.9 |100     |
|testSpec:ref.json Location-independent identifier with base URI change in subschema                |223.87|100     |
|testSpec:pattern.json pattern validation                                                           |100   |108.6   |
|testSpec:pattern.json pattern is not anchored                                                      |159.96|100     |
|testSpec:properties.json object properties validation                                              |103.78|100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |107.74|100     |
|testSpec:properties.json properties with boolean schema                                            |100   |278.75  |
|testSpec:properties.json properties with escaped characters                                        |129.93|100     |
|testSpec:if-then-else.json ignore if without then or else                                          |115.43|100     |
|testSpec:if-then-else.json ignore then without if                                                  |140.06|100     |
|testSpec:if-then-else.json ignore else without if                                                  |142.59|100     |
|testSpec:if-then-else.json if and then without else                                                |134.48|100     |
|testSpec:if-then-else.json if and else without then                                                |128.45|100     |
|testSpec:if-then-else.json validate against correct branch, then vs else                           |135.67|100     |
|testSpec:if-then-else.json non-interference across combined schemas                                |191.08|100     |
|testSpec:dependencies.json dependencies                                                            |105.87|100     |
|testSpec:dependencies.json dependencies with empty array                                           |128.34|100     |
|testSpec:dependencies.json multiple dependencies                                                   |100   |133.64  |
|testSpec:dependencies.json multiple dependencies subschema                                         |100   |111.04  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100   |334.04  |
|testSpec:dependencies.json empty array of dependencies                                             |127.85|100     |
|testSpec:dependencies.json dependencies with escaped characters                                    |100   |119.43  |
|testSpec:minLength.json minLength validation                                                       |100.75|100     |
|testSpec:type.json integer type matches integers                                                   |100   |147.53  |
|testSpec:type.json number type matches numbers                                                     |100   |134.46  |
|testSpec:type.json string type matches strings                                                     |100   |125.58  |
|testSpec:type.json object type matches objects                                                     |100   |143.47  |
|testSpec:type.json array type matches arrays                                                       |100   |153.2   |
|testSpec:type.json boolean type matches booleans                                                   |100   |150.97  |
|testSpec:type.json null type matches only the null object                                          |100   |165.45  |
|testSpec:type.json multiple types can be specified in an array                                     |100   |108.45  |
|testSpec:type.json type as array with one item                                                     |100   |105.96  |
|testSpec:type.json type                                                                            |100   |104.23  |
|testSpec:additionalItems.json additionalItems as schema                                            |141.15|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |201.7 |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |176.24|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |110.51|100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |156.15|100     |
|testSpec:refRemote.json remote ref                                                                 |186.28|100     |
|testSpec:refRemote.json fragment within remote ref                                                 |233.2 |100     |
|testSpec:refRemote.json ref within remote ref                                                      |263.82|100     |
|testSpec:refRemote.json base URI change                                                            |198.55|100     |
|testSpec:refRemote.json base URI change - change folder                                            |198.05|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |228.21|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |171.81|100     |
|testSpec:not.json not                                                                              |100   |234.94  |
|testSpec:not.json not multiple types                                                               |100   |242.21  |
|testSpec:not.json not more complex schema                                                          |100   |202.43  |
|testSpec:not.json forbidden property                                                               |100   |197.16  |
|testSpec:not.json not with boolean schema true                                                     |100   |157     |
|testSpec:not.json not with boolean schema false                                                    |100   |500.24  |
|testSpec:maximum.json maximum validation                                                           |153.99|100     |
|testSpec:enum.json simple enum validation                                                          |100   |112.68  |
|testSpec:enum.json heterogeneous enum validation                                                   |100   |136.88  |
|testSpec:enum.json enums in properties                                                             |111.99|100     |
|testSpec:enum.json enum with escaped characters                                                    |107.66|100     |
|testSpec:enum.json enum with false does not match 0                                                |100   |138.87  |
|testSpec:enum.json enum with true does not match 1                                                 |100   |152.52  |
|testSpec:enum.json enum with 0 does not match false                                                |100   |-       |
|testSpec:enum.json enum with 1 does not match true                                                 |100   |-       |
|testSpec:minProperties.json minProperties validation                                               |107.23|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|117.31|100     |
|testSpec:additionalProperties.json non-ASCII pattern with additionalProperties                     |100.48|100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |137.7 |100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |106.64|100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |150.11|100     |
|testSpec:additionalProperties.json additionalProperties should not look in applicators             |100   |186.18  |
|testSpec:propertyNames.json propertyNames validation                                               |135.22|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |129.86|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100   |270.37  |
|testSpec:contains.json contains keyword validation                                                 |100   |113.98  |
|testSpec:contains.json contains keyword with const keyword                                         |100   |144.06  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100   |120.03  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100   |111.41  |
|Total time for common passed                                                                       |110.07|100     |
|Total time for all tests (with failed)                                                             |110.68|100     |
|Tests passed (total: 175)                                                                          |173   |171     |
|Tests passed, %                                                                                    |98.86 |97.71   |


## Optional spec tests for draft-07
|Test                                                                                                                 |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|------|--------|
|testSpecOptional:content.json validation of string-encoded content based on media type                               |100   |107.77  |
|testSpecOptional:content.json validation of binary string-encoding                                                   |100   |102.69  |
|testSpecOptional:content.json validation of binary-encoded media type documents                                      |100   |118.57  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|262.3 |100     |
|testSpecOptional:bignum.json integer                                                                                 |250.51|100     |
|testSpecOptional:bignum.json number                                                                                  |253.23|100     |
|testSpecOptional:bignum.json string                                                                                  |100   |112.56  |
|testSpecOptional:bignum.json integer comparison                                                                      |266.04|100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100   |111.85  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100   |116.04  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100   |141     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex $ does not match trailing newline                              |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex converts \t to horizontal tab                                  |100.47|100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and upper letter                 |100   |103.14  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and lower letter                 |100   |106.78  |
|testSpecOptional:ecmascript-regex.json ECMA 262 \d matches ascii digits only                                         |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \D matches everything but ascii digits                               |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches ascii letters only                                        |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches everything but ascii letters                              |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \s matches ascii whitespace only                                     |-     |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \S matches everything but ascii whitespace                           |-     |-       |
|Total time for common passed                                                                                         |118.37|100     |
|Total time for all tests (with failed)                                                                               |118.37|100     |
|Tests passed (total: 21)                                                                                             |14    |14      |
|Tests passed, %                                                                                                      |66.67 |66.67   |


## Format spec tests for draft-07
|Test                                                                                     |Opis    |Swaggest|
|-----------------------------------------------------------------------------------------|--------|--------|
|testSpecFormat:date-time.json validation of date-time strings                            |100     |-       |
|testSpecFormat:uri.json validation of URIs                                               |120.76  |100     |
|testSpecFormat:uri-reference.json validation of URI References                           |117.02  |100     |
|testSpecFormat:time.json validation of time strings                                      |100     |105.7   |
|testSpecFormat:hostname.json validation of host names                                    |19377.98|100     |
|testSpecFormat:idn-email.json validation of an internationalized e-mail addresses        |176.34  |100     |
|testSpecFormat:idn-hostname.json validation of internationalized host names              |-       |100     |
|testSpecFormat:ipv6.json validation of IPv6 addresses                                    |100     |121.02  |
|testSpecFormat:email.json validation of e-mail addresses                                 |100     |105.41  |
|testSpecFormat:iri.json validation of IRIs                                               |100     |131.78  |
|testSpecFormat:ipv4.json validation of IP addresses                                      |100     |116.94  |
|testSpecFormat:date.json validation of date strings                                      |100     |102.43  |
|testSpecFormat:regex.json validation of regular expressions                              |100     |108.42  |
|testSpecFormat:uri-template.json format                                                  |100     |135.57  |
|testSpecFormat:iri-reference.json validation of IRI References                           |112.47  |100     |
|testSpecFormat:json-pointer.json validation of JSON-pointers (JSON String Representation)|101.22  |100     |
|testSpecFormat:relative-json-pointer.json validation of Relative JSON Pointers (RJP)     |115.09  |100     |
|Total time for common passed                                                             |904.88  |100     |
|Total time for all tests (with failed)                                                   |839.89  |100     |
|Tests passed (total: 17)                                                                 |16      |16      |
|Tests passed, %                                                                          |94.12   |94.12   |


