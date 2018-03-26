## Mandatory spec tests for draft-04
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis  |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|------|---------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |109.65         |425.92        |518.38         |202   |100      |125.65  |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |100            |656.84        |927.88         |346.68|115.83   |148.44  |
|testSpec:additionalItems.json array of items with no additionalItems                               |100            |475.12        |491.14         |227.14|107.9    |106.1   |
|testSpec:additionalItems.json additionalItems as false without items                               |100            |428.85        |1522.05        |281.97|241.87   |167.53  |
|testSpec:additionalItems.json additionalItems are allowed by default                               |100            |810.29        |607.13         |258.41|216.88   |158.88  |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|100            |476.33        |986.7          |222.01|131.25   |151.53  |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |111.35         |423.82        |690.92         |186.01|100      |114.38  |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |108.91         |346.7         |973.41         |142.18|100      |120.37  |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |100            |579.59        |374.2          |218.15|137.95   |112.07  |
|testSpec:allOf.json allOf                                                                          |134.73         |473.05        |756.85         |163.9 |100      |112.23  |
|testSpec:allOf.json allOf with base schema                                                         |103.6          |459.47        |598.05         |134.52|109.83   |100     |
|testSpec:allOf.json allOf simple types                                                             |129.02         |478.86        |570.99         |183.38|123.96   |100     |
|testSpec:anyOf.json anyOf                                                                          |100            |370.3         |895.32         |195.12|104.39   |139.06  |
|testSpec:anyOf.json anyOf with base schema                                                         |103.24         |381.37        |734.44         |120.51|100      |142.95  |
|testSpec:anyOf.json anyOf complex types                                                            |119.26         |418.67        |698.48         |164.34|100      |137.51  |
|testSpec:default.json invalid type for default                                                     |100            |559.76        |688.71         |-     |166.07   |157.28  |
|testSpec:default.json invalid string value for default                                             |100            |598.32        |2307.95        |-     |206.87   |152.31  |
|testSpec:definitions.json valid definition                                                         |100            |20443.06      |6804.51        |-     |-        |624     |
|testSpec:definitions.json invalid definition                                                       |-              |1230.09       |625.81         |-     |-        |100     |
|testSpec:dependencies.json dependencies                                                            |100            |486.64        |1168.56        |225.81|186.99   |162.85  |
|testSpec:dependencies.json multiple dependencies                                                   |100            |412.56        |1192.49        |162.06|137.6    |177.41  |
|testSpec:dependencies.json multiple dependencies subschema                                         |211.33         |515.78        |983.69         |162.71|100      |141.46  |
|testSpec:enum.json simple enum validation                                                          |100            |420.42        |535.68         |141   |159.03   |110.96  |
|testSpec:enum.json heterogeneous enum validation                                                   |100            |452.57        |1572.5         |160.77|156.47   |142.59  |
|testSpec:enum.json enums in properties                                                             |100            |503.45        |720.18         |157.19|123.7    |118.12  |
|testSpec:items.json a schema given for items                                                       |100            |286.34        |724.66         |161.02|102.44   |113.46  |
|testSpec:items.json an array of schemas for items                                                  |100            |391.03        |809.29         |155.09|108.65   |100.05  |
|testSpec:maximum.json maximum validation                                                           |100            |442.96        |2135.77        |256.02|192.91   |140.04  |
|testSpec:maximum.json exclusiveMaximum validation                                                  |100            |362.27        |2813.81        |201.49|140.66   |135.87  |
|testSpec:maxItems.json maxItems validation                                                         |100            |414.46        |785.66         |201.51|186.22   |149.57  |
|testSpec:maxLength.json maxLength validation                                                       |-              |325.84        |1587.87        |141.67|155.98   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |100            |506.91        |2162.21        |225.93|208.88   |167.84  |
|testSpec:minimum.json minimum validation                                                           |100            |428.6         |718.62         |265.98|184.13   |147.24  |
|testSpec:minimum.json exclusiveMinimum validation                                                  |100            |315.74        |3006.62        |175.4 |132.04   |124.4   |
|testSpec:minItems.json minItems validation                                                         |100            |461.92        |778.57         |236.39|205.4    |158.17  |
|testSpec:minLength.json minLength validation                                                       |-              |291.97        |1194.65        |130.23|127.17   |100     |
|testSpec:minProperties.json minProperties validation                                               |100            |-             |2318.32        |261.35|206.72   |165.05  |
|testSpec:multipleOf.json by int                                                                    |100            |445.48        |2881           |197.01|192.76   |128.19  |
|testSpec:multipleOf.json by number                                                                 |100            |438.03        |685.73         |236.77|223.01   |137.94  |
|testSpec:multipleOf.json by small number                                                           |100            |396.69        |587.5          |266.89|161.03   |115.65  |
|testSpec:not.json not                                                                              |103.76         |315.82        |1718.37        |116.55|100      |156     |
|testSpec:not.json not multiple types                                                               |100            |348.66        |1088.62        |138.58|126.36   |182.36  |
|testSpec:not.json not more complex schema                                                          |135.07         |436.46        |859.58         |164.34|100      |183.67  |
|testSpec:not.json forbidden property                                                               |100            |-             |344.42         |139.41|106.52   |158.85  |
|testSpec:oneOf.json oneOf                                                                          |112            |383.9         |759.44         |186.6 |100      |161.46  |
|testSpec:oneOf.json oneOf with base schema                                                         |100            |503.23        |1331.81        |160.49|142.14   |141.49  |
|testSpec:oneOf.json oneOf complex types                                                            |130.77         |445.54        |716.83         |168.25|100      |162.55  |
|testSpec:pattern.json pattern validation                                                           |100            |328.18        |590.25         |155.71|144.05   |120.78  |
|testSpec:pattern.json pattern is not anchored                                                      |100            |493.7         |865.57         |246.95|249.96   |147.42  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |121.5          |356.48        |1053.06        |129.93|100      |107.3   |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |139.23         |385.38        |794.97         |141.25|100      |136.24  |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |105.42         |319.06        |363.89         |123.84|100      |147.02  |
|testSpec:properties.json object properties validation                                              |122.83         |424.04        |1130.51        |152.96|100      |103.35  |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |128.01         |485.33        |906.08         |176.35|100      |139.28  |
|testSpec:ref.json root pointer ref                                                                 |-              |405.64        |675.7          |181.36|-        |100     |
|testSpec:ref.json relative pointer ref to object                                                   |-              |460.91        |301.06         |157.91|-        |100     |
|testSpec:ref.json relative pointer ref to array                                                    |-              |469.14        |997.86         |198.49|-        |100     |
|testSpec:ref.json escaped pointer ref                                                              |-              |738.89        |623.99         |184.4 |-        |100     |
|testSpec:ref.json nested refs                                                                      |-              |683.6         |1639.87        |295.71|-        |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |-              |-             |372.58         |190.44|-        |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |-              |2227.4        |2145.23        |-     |-        |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100            |341.72        |375.32         |131.13|-        |127.23  |
|testSpec:ref.json Recursive references between schemas                                             |-              |-             |-              |325.44|-        |100     |
|testSpec:refRemote.json remote ref                                                                 |-              |412.29        |392.53         |231.41|-        |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |-              |399.61        |1721.25        |273.56|-        |100     |
|testSpec:refRemote.json ref within remote ref                                                      |-              |500.09        |396.9          |364.74|-        |100     |
|testSpec:refRemote.json base URI change                                                            |-              |698.84        |1883.95        |314.53|100      |130.01  |
|testSpec:refRemote.json base URI change - change folder                                            |-              |583.18        |558.24         |288.24|-        |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |-              |552.14        |851.34         |277.68|-        |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |-              |631.16        |-              |374.36|100      |190.25  |
|testSpec:required.json required validation                                                         |100            |738.9         |2380.97        |211.4 |179.26   |154.04  |
|testSpec:required.json required default validation                                                 |100            |845.62        |871.43         |303.36|209.39   |154.44  |
|testSpec:type.json integer type matches integers                                                   |100            |344.19        |1041.82        |126.97|125.94   |150.72  |
|testSpec:type.json number type matches numbers                                                     |100            |341.74        |1074.92        |124.66|124.7    |139.39  |
|testSpec:type.json string type matches strings                                                     |100            |338.73        |1065.38        |128.58|127.95   |141.35  |
|testSpec:type.json object type matches objects                                                     |100            |326.19        |1142.65        |117.88|120.79   |138.67  |
|testSpec:type.json array type matches arrays                                                       |100            |338.39        |1130.06        |120.56|125.47   |142.46  |
|testSpec:type.json boolean type matches booleans                                                   |100            |332.64        |1825.95        |115.6 |128.85   |137.91  |
|testSpec:type.json null type matches only the null object                                          |100            |356.02        |1139.4         |118.75|130.6    |145.17  |
|testSpec:type.json multiple types can be specified in an array                                     |100            |394.35        |1416.49        |157.78|147.12   |145.7   |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100            |378.76        |1432.77        |207.64|199.57   |185.82  |
|Total time for common passed                                                                       |100            |368.57        |898.49         |145.8 |110      |122.4   |
|Total time for all tests (with failed)                                                             |100            |542.74        |1109.71        |207.43|116.53   |154.46  |
|Tests passed (total: 81)                                                                           |63             |77            |79             |76    |65       |81      |
|Tests passed, %                                                                                    |77.78          |95.06         |97.53          |93.83 |80.25    |100     |


## Optional spec tests for draft-04
|Test                                                                                                                 |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testSpecOptional:bignum.json integer                                                                                 |-              |-             |-              |284.17  |-        |100     |
|testSpecOptional:bignum.json number                                                                                  |100            |511.2         |820.84         |423.34  |212.64   |151.61  |
|testSpecOptional:bignum.json string                                                                                  |100            |303.6         |377.08         |151.5   |101.79   |159.82  |
|testSpecOptional:bignum.json integer comparison                                                                      |100            |502.01        |5844.69        |369.76  |237.48   |135.92  |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100            |278.47        |532.09         |138.32  |118.04   |129.18  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |137.92         |281.98        |429.33         |127.74  |100      |158.3   |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-              |-             |-              |-       |-        |100     |
|testSpecOptional:format.json validation of date-time strings                                                         |-              |288.14        |366.91         |127.72  |368.03   |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-              |-             |-              |-       |-        |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |-              |276.45        |305.49         |155.48  |115.64   |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |-              |291.16        |1136.68        |119.49  |100.31   |100     |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |-              |262.89        |349.38         |113.81  |100      |112.7   |
|testSpecOptional:format.json validation of host names                                                                |-              |-             |1276.2         |14925.99|100      |115.35  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|100            |371.19        |465.94         |-       |119.57   |184.24  |
|Total time for common passed                                                                                         |100            |336.42        |1319.81        |211.75  |136.65   |135.89  |
|Total time for all tests (with failed)                                                                               |100            |1100.79       |3857.8         |12221.4 |636.32   |872.96  |
|Tests passed (total: 14)                                                                                             |6              |10            |11             |11      |11       |14      |
|Tests passed, %                                                                                                      |42.86          |71.43         |78.57          |78.57   |78.57    |100     |


