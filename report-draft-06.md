## Mandatory spec tests for draft-06
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:maxLength.json maxLength validation                                                       |126.19|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |117.26|100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100   |115.64  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100   |202.48  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100   |105.02  |
|testSpec:uniqueItems.json uniqueItems with an array of items                                       |100   |102.35  |
|testSpec:uniqueItems.json uniqueItems with an array of items and additionalItems=false             |101.15|100     |
|testSpec:oneOf.json oneOf                                                                          |119.17|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |100   |103.75  |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100   |114.17  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |773.06  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100   |142.38  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |1025.7  |
|testSpec:oneOf.json oneOf complex types                                                            |100   |106.43  |
|testSpec:oneOf.json oneOf with empty schema                                                        |100   |100.26  |
|testSpec:oneOf.json oneOf with required                                                            |100   |111.63  |
|testSpec:oneOf.json oneOf with missing optional property                                           |100   |125.07  |
|testSpec:definitions.json valid definition                                                         |416.58|100     |
|testSpec:definitions.json invalid definition                                                       |160.12|100     |
|testSpec:minimum.json minimum validation                                                           |154.43|100     |
|testSpec:minimum.json minimum validation with signed integer                                       |114.3 |100     |
|testSpec:required.json required validation                                                         |111.39|100     |
|testSpec:required.json required default validation                                                 |120.23|100     |
|testSpec:required.json required with empty array                                                   |138.81|100     |
|testSpec:required.json required with escaped characters                                            |100   |118.74  |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |109.5 |100     |
|testSpec:items.json a schema given for items                                                       |120.87|100     |
|testSpec:items.json an array of schemas for items                                                  |141.65|100     |
|testSpec:items.json items with boolean schema (true)                                               |100   |103.44  |
|testSpec:items.json items with boolean schema (false)                                              |100   |311.92  |
|testSpec:items.json items with boolean schemas                                                     |100   |250.71  |
|testSpec:items.json items and subitems                                                             |213.3 |100     |
|testSpec:items.json nested items                                                                   |137.49|100     |
|testSpec:default.json invalid type for default                                                     |119.62|100     |
|testSpec:default.json invalid string value for default                                             |131.46|100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |100   |101.8   |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |100.63|100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100   |120.69  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100   |292.88  |
|testSpec:allOf.json allOf                                                                          |117.94|100     |
|testSpec:allOf.json allOf with base schema                                                         |115.42|100     |
|testSpec:allOf.json allOf simple types                                                             |145.07|100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |125.63|100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100   |442.14  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100   |421.94  |
|testSpec:allOf.json allOf with one empty schema                                                    |192.58|100     |
|testSpec:allOf.json allOf with two empty schemas                                                   |242.1 |100     |
|testSpec:allOf.json allOf with the first empty schema                                              |134.43|100     |
|testSpec:allOf.json allOf with the last empty schema                                               |141.92|100     |
|testSpec:maxProperties.json maxProperties validation                                               |107.44|100     |
|testSpec:minItems.json minItems validation                                                         |108.47|100     |
|testSpec:multipleOf.json by int                                                                    |139.81|100     |
|testSpec:multipleOf.json by number                                                                 |168.88|100     |
|testSpec:multipleOf.json by small number                                                           |169.29|100     |
|testSpec:maxItems.json maxItems validation                                                         |114.96|100     |
|testSpec:anyOf.json anyOf                                                                          |133.66|100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100   |129.85  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |127.81|100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |159.13|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |791.19  |
|testSpec:anyOf.json anyOf complex types                                                            |100   |103.81  |
|testSpec:anyOf.json anyOf with one empty schema                                                    |117.18|100     |
|testSpec:anyOf.json nested anyOf, to check validation semantics                                    |100   |131.16  |
|testSpec:const.json const validation                                                               |100   |146.25  |
|testSpec:const.json const with object                                                              |100   |167.76  |
|testSpec:const.json const with array                                                               |100   |203.56  |
|testSpec:const.json const with null                                                                |100   |128.55  |
|testSpec:const.json const with false does not match 0                                              |100   |162.72  |
|testSpec:const.json const with true does not match 1                                               |100   |177.23  |
|testSpec:const.json const with 0 does not match false                                              |100   |-       |
|testSpec:const.json const with 1 does not match true                                               |100   |-       |
|testSpec:format.json validation of e-mail addresses                                                |152.07|100     |
|testSpec:format.json validation of IP addresses                                                    |147.11|100     |
|testSpec:format.json validation of IPv6 addresses                                                  |162.9 |100     |
|testSpec:format.json validation of hostnames                                                       |151.81|100     |
|testSpec:format.json validation of date-time strings                                               |146.59|100     |
|testSpec:format.json validation of JSON pointers                                                   |159.44|100     |
|testSpec:format.json validation of URIs                                                            |149.67|100     |
|testSpec:format.json validation of URI references                                                  |155.76|100     |
|testSpec:format.json validation of URI templates                                                   |154.2 |100     |
|testSpec:ref.json root pointer ref                                                                 |135.84|100     |
|testSpec:ref.json relative pointer ref to object                                                   |134.58|100     |
|testSpec:ref.json relative pointer ref to array                                                    |182.79|100     |
|testSpec:ref.json escaped pointer ref                                                              |136.43|100     |
|testSpec:ref.json nested refs                                                                      |250.21|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |148.04|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |333.42|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100   |122.73  |
|testSpec:ref.json $ref to boolean schema true                                                      |134.77|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100   |510.32  |
|testSpec:ref.json Recursive references between schemas                                             |245.02|100     |
|testSpec:ref.json refs with quote                                                                  |128.84|100     |
|testSpec:ref.json Location-independent identifier                                                  |188.74|100     |
|testSpec:ref.json Location-independent identifier with absolute URI                                |208.08|100     |
|testSpec:ref.json Location-independent identifier with base URI change in subschema                |212.42|100     |
|testSpec:pattern.json pattern validation                                                           |104.56|100     |
|testSpec:pattern.json pattern is not anchored                                                      |150.05|100     |
|testSpec:properties.json object properties validation                                              |100   |100.4   |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |100   |100.95  |
|testSpec:properties.json properties with boolean schema                                            |100   |303.24  |
|testSpec:properties.json properties with escaped characters                                        |127.38|100     |
|testSpec:dependencies.json dependencies                                                            |105.47|100     |
|testSpec:dependencies.json dependencies with empty array                                           |121.76|100     |
|testSpec:dependencies.json multiple dependencies                                                   |100   |135     |
|testSpec:dependencies.json multiple dependencies subschema                                         |100   |118.81  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100   |342.33  |
|testSpec:dependencies.json empty array of dependencies                                             |144.5 |100     |
|testSpec:dependencies.json dependencies with escaped characters                                    |100   |126.06  |
|testSpec:minLength.json minLength validation                                                       |100   |107.32  |
|testSpec:type.json integer type matches integers                                                   |100   |152.36  |
|testSpec:type.json number type matches numbers                                                     |100   |138.91  |
|testSpec:type.json string type matches strings                                                     |100   |123.5   |
|testSpec:type.json object type matches objects                                                     |100   |145.73  |
|testSpec:type.json array type matches arrays                                                       |100   |138.54  |
|testSpec:type.json boolean type matches booleans                                                   |100   |152.99  |
|testSpec:type.json null type matches only the null object                                          |100   |163.2   |
|testSpec:type.json multiple types can be specified in an array                                     |100   |105.35  |
|testSpec:type.json type as array with one item                                                     |100   |108.13  |
|testSpec:type.json type                                                                            |100   |106.03  |
|testSpec:additionalItems.json additionalItems as schema                                            |134.04|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |209.75|100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |170.1 |100     |
|testSpec:additionalItems.json additionalItems as false without items                               |152.79|100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |156.87|100     |
|testSpec:refRemote.json remote ref                                                                 |180.91|100     |
|testSpec:refRemote.json fragment within remote ref                                                 |223.94|100     |
|testSpec:refRemote.json ref within remote ref                                                      |267.73|100     |
|testSpec:refRemote.json base URI change                                                            |193.3 |100     |
|testSpec:refRemote.json base URI change - change folder                                            |217.01|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |236.93|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |165.45|100     |
|testSpec:not.json not                                                                              |100   |245.37  |
|testSpec:not.json not multiple types                                                               |100   |254.73  |
|testSpec:not.json not more complex schema                                                          |100   |218.71  |
|testSpec:not.json forbidden property                                                               |100   |225.17  |
|testSpec:not.json not with boolean schema true                                                     |100   |174.39  |
|testSpec:not.json not with boolean schema false                                                    |100   |490.48  |
|testSpec:maximum.json maximum validation                                                           |158.4 |100     |
|testSpec:enum.json simple enum validation                                                          |100   |108.33  |
|testSpec:enum.json heterogeneous enum validation                                                   |100   |143.67  |
|testSpec:enum.json enums in properties                                                             |107.74|100     |
|testSpec:enum.json enum with escaped characters                                                    |122.24|100     |
|testSpec:enum.json enum with false does not match 0                                                |100   |158.58  |
|testSpec:enum.json enum with true does not match 1                                                 |100   |145.45  |
|testSpec:enum.json enum with 0 does not match false                                                |100   |-       |
|testSpec:enum.json enum with 1 does not match true                                                 |100   |-       |
|testSpec:minProperties.json minProperties validation                                               |109.88|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|112.02|100     |
|testSpec:additionalProperties.json non-ASCII pattern with additionalProperties                     |100   |104.76  |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |135.37|100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |107.05|100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |122.34|100     |
|testSpec:additionalProperties.json additionalProperties should not look in applicators             |100   |181.35  |
|testSpec:propertyNames.json propertyNames validation                                               |139.16|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |129.37|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100   |259.58  |
|testSpec:contains.json contains keyword validation                                                 |100   |116.19  |
|testSpec:contains.json contains keyword with const keyword                                         |100   |147.79  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100   |121.86  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100   |109.08  |
|Total time for common passed                                                                       |102.01|100     |
|Total time for all tests (with failed)                                                             |103.2 |100     |
|Tests passed (total: 160)                                                                          |160   |156     |
|Tests passed, %                                                                                    |100   |97.5    |


## Optional spec tests for draft-06
|Test                                                                                                                 |Opis    |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|--------|--------|
|testSpecOptional:format.json validation of date-time strings                                                         |100     |-       |
|testSpecOptional:format.json validation of URIs                                                                      |122.96  |100     |
|testSpecOptional:format.json validation of URI References                                                            |121.11  |100     |
|testSpecOptional:format.json format                                                                                  |100     |126.77  |
|testSpecOptional:format.json validation of e-mail addresses                                                          |100     |107.53  |
|testSpecOptional:format.json validation of IP addresses                                                              |100     |118.46  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |100     |111.15  |
|testSpecOptional:format.json validation of host names                                                                |20709.79|100     |
|testSpecOptional:format.json validation of JSON-pointers (JSON String Representation)                                |103.45  |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|305.74  |100     |
|testSpecOptional:bignum.json integer                                                                                 |298.04  |100     |
|testSpecOptional:bignum.json number                                                                                  |255.7   |100     |
|testSpecOptional:bignum.json string                                                                                  |100     |106.36  |
|testSpecOptional:bignum.json integer comparison                                                                      |310.25  |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100     |125.12  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |132.95  |100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100     |144.68  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex $ does not match trailing newline                              |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex converts \t to horizontal tab                                  |100     |105.99  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and upper letter                 |100     |101.51  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and lower letter                 |140.47  |100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 \d matches ascii digits only                                         |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \D matches everything but ascii digits                               |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches ascii letters only                                        |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches everything but ascii letters                              |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \s matches ascii whitespace only                                     |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \S matches everything but ascii whitespace                           |-       |-       |
|Total time for common passed                                                                                         |1195.9  |100     |
|Total time for all tests (with failed)                                                                               |1209.2  |100     |
|Tests passed (total: 27)                                                                                             |20      |19      |
|Tests passed, %                                                                                                      |74.07   |70.37   |


