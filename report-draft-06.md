## Mandatory spec tests for draft-06
|Test                                                                                               |Opis  |Swaggest|
|---------------------------------------------------------------------------------------------------|------|--------|
|testSpec:maxLength.json maxLength validation                                                       |125.03|100     |
|testSpec:exclusiveMaximum.json exclusiveMaximum validation                                         |123.7 |100     |
|testSpec:boolean_schema.json boolean schema 'true'                                                 |100   |113.93  |
|testSpec:boolean_schema.json boolean schema 'false'                                                |100   |164.91  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100.85|100     |
|testSpec:uniqueItems.json uniqueItems with an array of items                                       |108.67|100     |
|testSpec:uniqueItems.json uniqueItems with an array of items and additionalItems=false             |105.71|100     |
|testSpec:oneOf.json oneOf                                                                          |120.92|100     |
|testSpec:oneOf.json oneOf with base schema                                                         |107.43|100     |
|testSpec:oneOf.json oneOf with boolean schemas, all true                                           |100   |144.77  |
|testSpec:oneOf.json oneOf with boolean schemas, one true                                           |100   |397.73  |
|testSpec:oneOf.json oneOf with boolean schemas, more than one true                                 |100   |142.34  |
|testSpec:oneOf.json oneOf with boolean schemas, all false                                          |100   |526.97  |
|testSpec:oneOf.json oneOf complex types                                                            |100   |107.88  |
|testSpec:oneOf.json oneOf with empty schema                                                        |114.27|100     |
|testSpec:oneOf.json oneOf with required                                                            |100   |115.73  |
|testSpec:oneOf.json oneOf with missing optional property                                           |100   |128.4   |
|testSpec:definitions.json valid definition                                                         |442.36|100     |
|testSpec:definitions.json invalid definition                                                       |163.3 |100     |
|testSpec:minimum.json minimum validation                                                           |154.37|100     |
|testSpec:minimum.json minimum validation with signed integer                                       |118.14|100     |
|testSpec:required.json required validation                                                         |107.29|100     |
|testSpec:required.json required default validation                                                 |137.47|100     |
|testSpec:required.json required with empty array                                                   |128.43|100     |
|testSpec:required.json required with escaped characters                                            |100   |134.49  |
|testSpec:exclusiveMinimum.json exclusiveMinimum validation                                         |124.46|100     |
|testSpec:items.json a schema given for items                                                       |120.68|100     |
|testSpec:items.json an array of schemas for items                                                  |139.38|100     |
|testSpec:items.json items with boolean schema (true)                                               |100   |101.29  |
|testSpec:items.json items with boolean schema (false)                                              |100   |205.54  |
|testSpec:items.json items with boolean schemas                                                     |100   |158.93  |
|testSpec:items.json items and subitems                                                             |215.06|100     |
|testSpec:items.json nested items                                                                   |145.26|100     |
|testSpec:default.json invalid type for default                                                     |132.22|100     |
|testSpec:default.json invalid string value for default                                             |145.9 |100     |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |100   |101.1   |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |101.76|100     |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100   |123.57  |
|testSpec:patternProperties.json patternProperties with boolean schemas                             |100   |194.43  |
|testSpec:allOf.json allOf                                                                          |121.83|100     |
|testSpec:allOf.json allOf with base schema                                                         |117.61|100     |
|testSpec:allOf.json allOf simple types                                                             |150.74|100     |
|testSpec:allOf.json allOf with boolean schemas, all true                                           |122.69|100     |
|testSpec:allOf.json allOf with boolean schemas, some false                                         |100   |226.95  |
|testSpec:allOf.json allOf with boolean schemas, all false                                          |100   |215.49  |
|testSpec:allOf.json allOf with one empty schema                                                    |209.08|100     |
|testSpec:allOf.json allOf with two empty schemas                                                   |228.48|100     |
|testSpec:allOf.json allOf with the first empty schema                                              |152.31|100     |
|testSpec:allOf.json allOf with the last empty schema                                               |142.07|100     |
|testSpec:maxProperties.json maxProperties validation                                               |109.23|100     |
|testSpec:minItems.json minItems validation                                                         |103.08|100     |
|testSpec:multipleOf.json by int                                                                    |133.92|100     |
|testSpec:multipleOf.json by number                                                                 |156.95|100     |
|testSpec:multipleOf.json by small number                                                           |190.94|100     |
|testSpec:maxItems.json maxItems validation                                                         |104.94|100     |
|testSpec:anyOf.json anyOf                                                                          |133.2 |100     |
|testSpec:anyOf.json anyOf with base schema                                                         |100   |121.52  |
|testSpec:anyOf.json anyOf with boolean schemas, all true                                           |132.92|100     |
|testSpec:anyOf.json anyOf with boolean schemas, some true                                          |133.46|100     |
|testSpec:anyOf.json anyOf with boolean schemas, all false                                          |100   |444.61  |
|testSpec:anyOf.json anyOf complex types                                                            |100   |100.87  |
|testSpec:anyOf.json anyOf with one empty schema                                                    |100   |100.33  |
|testSpec:anyOf.json nested anyOf, to check validation semantics                                    |100   |129.23  |
|testSpec:const.json const validation                                                               |100   |143.59  |
|testSpec:const.json const with object                                                              |100   |163.51  |
|testSpec:const.json const with array                                                               |100   |196.5   |
|testSpec:const.json const with null                                                                |100   |145.28  |
|testSpec:const.json const with false does not match 0                                              |100   |163.55  |
|testSpec:const.json const with true does not match 1                                               |100   |161.09  |
|testSpec:const.json const with 0 does not match false                                              |100   |-       |
|testSpec:const.json const with 1 does not match true                                               |100   |-       |
|testSpec:format.json validation of e-mail addresses                                                |146.4 |100     |
|testSpec:format.json validation of IP addresses                                                    |149.69|100     |
|testSpec:format.json validation of IPv6 addresses                                                  |151.96|100     |
|testSpec:format.json validation of hostnames                                                       |148.28|100     |
|testSpec:format.json validation of date-time strings                                               |149.87|100     |
|testSpec:format.json validation of JSON pointers                                                   |147.36|100     |
|testSpec:format.json validation of URIs                                                            |150.87|100     |
|testSpec:format.json validation of URI references                                                  |149.18|100     |
|testSpec:format.json validation of URI templates                                                   |147.52|100     |
|testSpec:ref.json root pointer ref                                                                 |134.45|100     |
|testSpec:ref.json relative pointer ref to object                                                   |135.71|100     |
|testSpec:ref.json relative pointer ref to array                                                    |174.76|100     |
|testSpec:ref.json escaped pointer ref                                                              |145.52|100     |
|testSpec:ref.json nested refs                                                                      |244.73|100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |151.13|100     |
|testSpec:ref.json remote ref, containing refs itself                                               |353.89|100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100   |113.64  |
|testSpec:ref.json $ref to boolean schema true                                                      |136.27|100     |
|testSpec:ref.json $ref to boolean schema false                                                     |100   |263.96  |
|testSpec:ref.json Recursive references between schemas                                             |253.49|100     |
|testSpec:ref.json refs with quote                                                                  |137.95|100     |
|testSpec:ref.json Location-independent identifier                                                  |171.06|100     |
|testSpec:ref.json Location-independent identifier with absolute URI                                |221.68|100     |
|testSpec:ref.json Location-independent identifier with base URI change in subschema                |214.4 |100     |
|testSpec:pattern.json pattern validation                                                           |100.52|100     |
|testSpec:pattern.json pattern is not anchored                                                      |153.69|100     |
|testSpec:properties.json object properties validation                                              |102.86|100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |100.37|100     |
|testSpec:properties.json properties with boolean schema                                            |100   |208.09  |
|testSpec:properties.json properties with escaped characters                                        |125.29|100     |
|testSpec:dependencies.json dependencies                                                            |107.94|100     |
|testSpec:dependencies.json dependencies with empty array                                           |133.69|100     |
|testSpec:dependencies.json multiple dependencies                                                   |100   |137.49  |
|testSpec:dependencies.json multiple dependencies subschema                                         |100   |115.95  |
|testSpec:dependencies.json dependencies with boolean subschemas                                    |100   |239.15  |
|testSpec:dependencies.json empty array of dependencies                                             |134.09|100     |
|testSpec:dependencies.json dependencies with escaped characters                                    |100   |125.65  |
|testSpec:minLength.json minLength validation                                                       |102.1 |100     |
|testSpec:type.json integer type matches integers                                                   |100   |146.26  |
|testSpec:type.json number type matches numbers                                                     |100   |129.12  |
|testSpec:type.json string type matches strings                                                     |100   |123.92  |
|testSpec:type.json object type matches objects                                                     |100   |135.44  |
|testSpec:type.json array type matches arrays                                                       |100   |140.63  |
|testSpec:type.json boolean type matches booleans                                                   |100   |132.99  |
|testSpec:type.json null type matches only the null object                                          |100   |158.68  |
|testSpec:type.json multiple types can be specified in an array                                     |100   |108.02  |
|testSpec:type.json type as array with one item                                                     |100.4 |100     |
|testSpec:type.json type                                                                            |100   |102.53  |
|testSpec:additionalItems.json additionalItems as schema                                            |143.11|100     |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |212.68|100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |167.73|100     |
|testSpec:additionalItems.json additionalItems as false without items                               |111.2 |100     |
|testSpec:additionalItems.json additionalItems are allowed by default                               |169.77|100     |
|testSpec:refRemote.json remote ref                                                                 |196.3 |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |222.48|100     |
|testSpec:refRemote.json ref within remote ref                                                      |305.52|100     |
|testSpec:refRemote.json base URI change                                                            |194.76|100     |
|testSpec:refRemote.json base URI change - change folder                                            |222.86|100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |237.35|100     |
|testSpec:refRemote.json root ref in remote ref                                                     |169.56|100     |
|testSpec:not.json not                                                                              |100   |153.26  |
|testSpec:not.json not multiple types                                                               |100   |147.41  |
|testSpec:not.json not more complex schema                                                          |100   |143.9   |
|testSpec:not.json forbidden property                                                               |100   |141.11  |
|testSpec:not.json not with boolean schema true                                                     |100   |150.25  |
|testSpec:not.json not with boolean schema false                                                    |100   |268.95  |
|testSpec:maximum.json maximum validation                                                           |150.53|100     |
|testSpec:enum.json simple enum validation                                                          |100   |104.75  |
|testSpec:enum.json heterogeneous enum validation                                                   |100   |139.96  |
|testSpec:enum.json enums in properties                                                             |112.14|100     |
|testSpec:enum.json enum with escaped characters                                                    |118.5 |100     |
|testSpec:enum.json enum with false does not match 0                                                |100   |142.67  |
|testSpec:enum.json enum with true does not match 1                                                 |100   |148.14  |
|testSpec:enum.json enum with 0 does not match false                                                |100   |-       |
|testSpec:enum.json enum with 1 does not match true                                                 |100   |-       |
|testSpec:minProperties.json minProperties validation                                               |110.46|100     |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|111.3 |100     |
|testSpec:additionalProperties.json non-ASCII pattern with additionalProperties                     |100.46|100     |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |136.22|100     |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |106.41|100     |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |148.23|100     |
|testSpec:additionalProperties.json additionalProperties should not look in applicators             |100   |182.24  |
|testSpec:propertyNames.json propertyNames validation                                               |133.95|100     |
|testSpec:propertyNames.json propertyNames with boolean schema true                                 |128.13|100     |
|testSpec:propertyNames.json propertyNames with boolean schema false                                |100   |175.87  |
|testSpec:contains.json contains keyword validation                                                 |100   |117.47  |
|testSpec:contains.json contains keyword with const keyword                                         |100   |144.94  |
|testSpec:contains.json contains keyword with boolean schema true                                   |100   |119.78  |
|testSpec:contains.json contains keyword with boolean schema false                                  |100   |112.49  |
|Total time for common passed                                                                       |111.22|100     |
|Total time for all tests (with failed)                                                             |112.51|100     |
|Tests passed (total: 160)                                                                          |160   |156     |
|Tests passed, %                                                                                    |100   |97.5    |


## Optional spec tests for draft-06
|Test                                                                                                                 |Opis    |Swaggest|
|---------------------------------------------------------------------------------------------------------------------|--------|--------|
|testSpecOptional:format.json validation of date-time strings                                                         |100     |-       |
|testSpecOptional:format.json validation of URIs                                                                      |120.89  |100     |
|testSpecOptional:format.json validation of URI References                                                            |115.48  |100     |
|testSpecOptional:format.json format                                                                                  |100     |132.86  |
|testSpecOptional:format.json validation of e-mail addresses                                                          |100     |100.17  |
|testSpecOptional:format.json validation of IP addresses                                                              |100     |115.31  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |100     |115.99  |
|testSpecOptional:format.json validation of host names                                                                |22117.65|100     |
|testSpecOptional:format.json validation of JSON-pointers (JSON String Representation)                                |103.27  |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|240.81  |100     |
|testSpecOptional:bignum.json integer                                                                                 |242.13  |100     |
|testSpecOptional:bignum.json number                                                                                  |262.41  |100     |
|testSpecOptional:bignum.json string                                                                                  |100     |104.15  |
|testSpecOptional:bignum.json integer comparison                                                                      |236.74  |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100     |106.42  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100     |108.32  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |100     |139.07  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex $ does not match trailing newline                              |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex converts \t to horizontal tab                                  |100     |101.05  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and upper letter                 |101.68  |100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and lower letter                 |102.31  |100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 \d matches ascii digits only                                         |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \D matches everything but ascii digits                               |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches ascii letters only                                        |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches everything but ascii letters                              |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \s matches ascii whitespace only                                     |-       |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \S matches everything but ascii whitespace                           |-       |-       |
|Total time for common passed                                                                                         |1225.5  |100     |
|Total time for all tests (with failed)                                                                               |1238.34 |100     |
|Tests passed (total: 27)                                                                                             |20      |19      |
|Tests passed, %                                                                                                      |74.07   |70.37   |


