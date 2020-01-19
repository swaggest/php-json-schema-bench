## Mandatory spec tests for draft-04
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis  |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|------|---------|--------|
|testSpec:maxLength.json maxLength validation                                                       |-              |279.33        |551.73         |175.25|142.22   |100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100            |365.48        |837.06         |246.39|203.44   |199.08  |
|testSpec:uniqueItems.json uniqueItems with an array of items                                       |100            |436.99        |792.65         |178.71|157.08   |143.7   |
|testSpec:uniqueItems.json uniqueItems with an array of items and additionalItems=false             |100            |376.15        |758.42         |184.29|135.47   |146.58  |
|testSpec:oneOf.json oneOf                                                                          |105.22         |341.56        |624.8          |224.43|100      |155     |
|testSpec:oneOf.json oneOf with base schema                                                         |100            |472.39        |758.31         |203.61|147.75   |143.27  |
|testSpec:oneOf.json oneOf complex types                                                            |116.5          |427.49        |482.6          |199.17|100      |164.04  |
|testSpec:oneOf.json oneOf with empty schema                                                        |100            |357.26        |357.29         |208.59|110.09   |146.69  |
|testSpec:oneOf.json oneOf with required                                                            |105.21         |405.67        |635.19         |190.84|100      |182.59  |
|testSpec:oneOf.json oneOf with missing optional property                                           |101.38         |477.33        |464.29         |188.26|100      |158.02  |
|testSpec:definitions.json valid definition                                                         |100            |21001.16      |9980.37        |-     |-        |816.54  |
|testSpec:definitions.json invalid definition                                                       |-              |1014.68       |419.71         |-     |-        |100     |
|testSpec:minimum.json minimum validation                                                           |100            |376.04        |1235.57        |323.37|186.83   |160.05  |
|testSpec:minimum.json minimum validation (explicit false exclusivity)                              |100            |377.6         |1295.22        |314.69|182.13   |153.12  |
|testSpec:minimum.json exclusiveMinimum validation                                                  |100            |329.82        |505.56         |249.42|145.05   |150.47  |
|testSpec:minimum.json minimum validation with signed integer                                       |100            |418.76        |1311.17        |265.92|204.34   |158.25  |
|testSpec:required.json required validation                                                         |100            |649.04        |1303.01        |269.92|185.22   |168.21  |
|testSpec:required.json required default validation                                                 |100            |678.9         |759.16         |418.23|236.79   |215.98  |
|testSpec:required.json required with escaped characters                                            |100            |572.35        |520.77         |193.92|169.17   |184.48  |
|testSpec:items.json a schema given for items                                                       |100            |385.9         |409.63         |216.87|120.72   |140.93  |
|testSpec:items.json an array of schemas for items                                                  |100            |367.47        |807.39         |185.38|110.13   |105.46  |
|testSpec:items.json items and subitems                                                             |-              |683.32        |529.11         |282.42|-        |100     |
|testSpec:items.json nested items                                                                   |297.04         |523.2         |551.8          |158.08|100      |104.53  |
|testSpec:default.json invalid type for default                                                     |100            |523.95        |655.55         |-     |177.51   |188.64  |
|testSpec:default.json invalid string value for default                                             |100            |531.65        |1895.8         |-     |197.78   |178.47  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |110.94         |320.32        |455.08         |149.82|100      |115.29  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |138.72         |379.82        |598.88         |169.22|100      |131.13  |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |103.63         |310.57        |512.06         |141.34|100      |134.67  |
|testSpec:allOf.json allOf                                                                          |124.61         |449.32        |623.14         |169.98|100      |113.91  |
|testSpec:allOf.json allOf with base schema                                                         |100            |424.93        |521.95         |149.76|106.48   |103.99  |
|testSpec:allOf.json allOf simple types                                                             |114.76         |369.35        |785.81         |185.26|104.6    |100     |
|testSpec:allOf.json allOf with one empty schema                                                    |100            |532.74        |747.45         |399.44|203.08   |164.09  |
|testSpec:allOf.json allOf with two empty schemas                                                   |100            |542.54        |633.33         |380.18|161.36   |135.59  |
|testSpec:allOf.json allOf with the first empty schema                                              |104.13         |344.08        |879.09         |191.61|100      |103.83  |
|testSpec:allOf.json allOf with the last empty schema                                               |109.72         |360.24        |369.06         |177.39|100      |101.48  |
|testSpec:maxProperties.json maxProperties validation                                               |100            |465.01        |1238.07        |292.47|206.63   |188.17  |
|testSpec:minItems.json minItems validation                                                         |100            |410.66        |1709.38        |261.15|197.27   |170.07  |
|testSpec:multipleOf.json by int                                                                    |100            |366.74        |586.71         |262.55|187.59   |141.67  |
|testSpec:multipleOf.json by number                                                                 |100            |397.66        |1854.08        |296.85|239.89   |144.47  |
|testSpec:multipleOf.json by small number                                                           |100            |333.72        |526.55         |330.82|191.81   |145.56  |
|testSpec:maxItems.json maxItems validation                                                         |100            |399.27        |1781.3         |268.1 |198.07   |176.75  |
|testSpec:anyOf.json anyOf                                                                          |100            |348.98        |618.9          |229.58|103.45   |152.99  |
|testSpec:anyOf.json anyOf with base schema                                                         |126.17         |320.61        |532.74         |125.81|100      |140.2   |
|testSpec:anyOf.json anyOf complex types                                                            |116.77         |409.04        |575.12         |184.88|100      |158.98  |
|testSpec:anyOf.json anyOf with one empty schema                                                    |100            |440.95        |488.69         |231.43|135.77   |144.61  |
|testSpec:anyOf.json nested anyOf, to check validation semantics                                    |115.1          |305.62        |730.39         |149.58|100      |170.26  |
|testSpec:format.json validation of e-mail addresses                                                |100            |-             |2017.82        |429.79|273.88   |194.19  |
|testSpec:format.json validation of IP addresses                                                    |100            |-             |2079.06        |414.83|263.91   |188.16  |
|testSpec:format.json validation of IPv6 addresses                                                  |100            |-             |2100.03        |422.47|272.02   |191.73  |
|testSpec:format.json validation of hostnames                                                       |100            |520.09        |910.83         |421.24|274.25   |195.09  |
|testSpec:format.json validation of date-time strings                                               |100            |-             |2150.71        |412.88|278.46   |188.76  |
|testSpec:format.json validation of URIs                                                            |100            |-             |2005.58        |407.42|267.89   |188.18  |
|testSpec:ref.json root pointer ref                                                                 |-              |410.16        |593.86         |191.33|-        |100     |
|testSpec:ref.json relative pointer ref to object                                                   |-              |454.81        |658.05         |210.66|-        |100     |
|testSpec:ref.json relative pointer ref to array                                                    |-              |466.18        |318.76         |232.7 |-        |100     |
|testSpec:ref.json escaped pointer ref                                                              |-              |666.32        |566.15         |207.39|-        |100     |
|testSpec:ref.json nested refs                                                                      |-              |706.41        |366.66         |346.37|-        |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |-              |-             |586.82         |210.82|-        |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |-              |1758.49       |1183.76        |-     |-        |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100            |314.27        |299.68         |149.09|-        |127.87  |
|testSpec:ref.json Recursive references between schemas                                             |-              |-             |-              |296.54|-        |100     |
|testSpec:ref.json refs with quote                                                                  |-              |-             |566.39         |192.04|-        |100     |
|testSpec:ref.json Location-independent identifier                                                  |-              |-             |-              |232.74|-        |100     |
|testSpec:ref.json Location-independent identifier with absolute URI                                |-              |-             |-              |288.13|-        |100     |
|testSpec:ref.json Location-independent identifier with base URI change in subschema                |-              |-             |-              |277.44|-        |100     |
|testSpec:pattern.json pattern validation                                                           |100            |319.63        |508.56         |207.78|166.19   |137.04  |
|testSpec:pattern.json pattern is not anchored                                                      |100            |297.86        |3691.22        |233.97|163.75   |107.5   |
|testSpec:properties.json object properties validation                                              |113.82         |387.27        |555.55         |157.2 |100      |114.52  |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |119.49         |476.48        |771.76         |208.06|100      |153.93  |
|testSpec:properties.json properties with escaped characters                                        |259.74         |570.23        |628.17         |155.81|100      |100.78  |
|testSpec:dependencies.json dependencies                                                            |100            |455.95        |1468.79        |305.67|205.76   |198.13  |
|testSpec:dependencies.json multiple dependencies                                                   |100            |387.01        |509.26         |190.91|140.65   |183.34  |
|testSpec:dependencies.json multiple dependencies subschema                                         |192.08         |465.51        |822.62         |169.44|100      |149.27  |
|testSpec:dependencies.json dependencies with escaped characters                                    |107.07         |363.23        |806.8          |157.39|100      |147.01  |
|testSpec:minLength.json minLength validation                                                       |-              |262.38        |414            |147.37|125.1    |100     |
|testSpec:type.json integer type matches integers                                                   |100            |331.42        |756.53         |148.64|128.78   |157.52  |
|testSpec:type.json number type matches numbers                                                     |100            |350.47        |1228.8         |169.34|137.33   |160.82  |
|testSpec:type.json string type matches strings                                                     |100            |351.11        |813.7          |178.78|144.06   |159.28  |
|testSpec:type.json object type matches objects                                                     |100            |320.42        |826.66         |154.64|130.15   |155.71  |
|testSpec:type.json array type matches arrays                                                       |100            |327.44        |799.96         |153.32|129.03   |156.06  |
|testSpec:type.json boolean type matches booleans                                                   |100            |328.66        |1012.75        |146.74|129.81   |155.81  |
|testSpec:type.json null type matches only the null object                                          |100            |322.15        |657.37         |136.45|124.57   |153.36  |
|testSpec:type.json multiple types can be specified in an array                                     |100            |378.59        |983.63         |186.28|131.97   |151.59  |
|testSpec:type.json type as array with one item                                                     |100            |401.59        |2688.18        |213.09|167.75   |160.33  |
|testSpec:type.json type                                                                            |100            |416.89        |1050.33        |229.48|159.57   |169.84  |
|testSpec:additionalItems.json additionalItems as schema                                            |116.29         |413.43        |1019.25        |221.59|100      |130.59  |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |100            |613.61        |592.96         |380.8 |127.99   |147.63  |
|testSpec:additionalItems.json array of items with no additionalItems                               |100            |520.33        |997.74         |282.89|126.49   |137.53  |
|testSpec:additionalItems.json additionalItems as false without items                               |100            |539.25        |924.45         |406.25|348.71   |249.71  |
|testSpec:additionalItems.json additionalItems are allowed by default                               |100            |778.55        |639.75         |328.55|214.81   |165.53  |
|testSpec:refRemote.json remote ref                                                                 |-              |409.29        |1230.59        |274.31|-        |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |-              |423.12        |311.06         |319.46|-        |100     |
|testSpec:refRemote.json ref within remote ref                                                      |-              |467.06        |307.81         |398.75|-        |100     |
|testSpec:refRemote.json base URI change                                                            |-              |760.4         |1464.82        |331.87|100      |131.15  |
|testSpec:refRemote.json base URI change - change folder                                            |-              |538.11        |427.77         |272.93|-        |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |-              |558.02        |688.82         |287.18|-        |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |-              |565.82        |-              |386.36|100      |182.83  |
|testSpec:not.json not                                                                              |100            |311.84        |846.46         |159.97|115.28   |286.61  |
|testSpec:not.json not multiple types                                                               |100            |328.05        |902.83         |175.65|112.09   |337.67  |
|testSpec:not.json not more complex schema                                                          |114.04         |358.91        |606.03         |174.35|100      |293.83  |
|testSpec:not.json forbidden property                                                               |100            |359.56        |307.2          |165.89|118.66   |263.11  |
|testSpec:maximum.json maximum validation                                                           |100            |418.14        |1655.84        |324.81|190.32   |157.98  |
|testSpec:maximum.json maximum validation (explicit false exclusivity)                              |100            |410.23        |1749.66        |339.82|191.4    |163.3   |
|testSpec:maximum.json exclusiveMaximum validation                                                  |100            |358.23        |609.04         |265.37|153.8    |152.58  |
|testSpec:enum.json simple enum validation                                                          |100            |423.93        |2089.28        |213.76|170.95   |157.62  |
|testSpec:enum.json heterogeneous enum validation                                                   |100            |415.27        |534.29         |198.9 |167.12   |212.67  |
|testSpec:enum.json enums in properties                                                             |100            |581.94        |1336.39        |243.63|152.13   |162.7   |
|testSpec:enum.json enum with escaped characters                                                    |100            |430.46        |671.46         |254.96|199.73   |160.79  |
|testSpec:enum.json enum with false does not match 0                                                |100            |381.57        |1602.08        |167.18|152.41   |154.58  |
|testSpec:enum.json enum with true does not match 1                                                 |100            |376.99        |499.28         |161.61|153.03   |155.26  |
|testSpec:enum.json enum with 0 does not match false                                                |-              |-             |-              |100   |-        |-       |
|testSpec:enum.json enum with 1 does not match true                                                 |-              |-             |-              |100   |-        |-       |
|testSpec:minProperties.json minProperties validation                                               |100            |-             |1597.85        |277.89|193.51   |176.72  |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|100            |464.18        |1104.88        |267.99|134.6    |177.35  |
|testSpec:additionalProperties.json non-ASCII pattern with additionalProperties                     |100            |384.15        |487.27         |237.13|129.57   |185.42  |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |118.94         |429.3         |745.6          |226.34|100      |135.74  |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |104.55         |310.16        |850.07         |159.78|100      |114.76  |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |100            |470.47        |427.72         |280.27|148.18   |142.15  |
|testSpec:additionalProperties.json additionalProperties should not look in applicators             |150.84         |468.44        |410.81         |100   |111.68   |157.49  |
|Total time for common passed                                                                       |100            |344.76        |657.39         |166.02|107.99   |130.11  |
|Total time for all tests (with failed)                                                             |100            |488.61        |828.47         |241.3 |115.78   |162.51  |
|Tests passed (total: 119)                                                                          |94             |105           |112            |114   |96       |117     |
|Tests passed, %                                                                                    |78.99          |88.24         |94.12          |95.8  |80.67    |98.32   |


## Optional spec tests for draft-04
|Test                                                                                                                 |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis   |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------------------------|---------------|--------------|---------------|-------|---------|--------|
|testSpecOptional:format.json validation of date-time strings                                                         |-              |-             |-              |100    |-        |-       |
|testSpecOptional:format.json validation of URIs                                                                      |-              |-             |-              |183.33 |-        |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |-              |253.79        |268.98         |143.14 |106.6    |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |-              |262.34        |771.08         |143.49 |100      |108.92  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |-              |228.52        |971.38         |142.66 |100      |103.8   |
|testSpecOptional:format.json validation of host names                                                                |-              |-             |289.39         |20517.2|100      |105.56  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|100            |319.16        |379.73         |-      |115.48   |159.03  |
|testSpecOptional:bignum.json integer                                                                                 |-              |-             |-              |332.73 |-        |100     |
|testSpecOptional:bignum.json number                                                                                  |100            |462.84        |4454.49        |588.73 |256.13   |179.67  |
|testSpecOptional:bignum.json string                                                                                  |100            |326.05        |348.35         |201.91 |115.75   |181.82  |
|testSpecOptional:bignum.json integer comparison                                                                      |100            |499.7         |1053.83        |541.81 |273.78   |178.49  |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100            |296.95        |429.04         |168.02 |114.1    |150.12  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100            |296.49        |2518.89        |168.57 |109.09   |148     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-              |-             |-              |114.03 |-        |100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex $ does not match trailing newline                              |-              |-             |-              |-      |-        |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex converts \t to horizontal tab                                  |100            |309.62        |470.1          |186.1  |149.53   |138.71  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and upper letter                 |100            |337.18        |1766.53        |209.7  |165.23   |153.03  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and lower letter                 |100            |328.16        |519.01         |198.61 |165.05   |150.34  |
|testSpecOptional:ecmascript-regex.json ECMA 262 \d matches ascii digits only                                         |100            |-             |1190.43        |-      |149.41   |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \D matches everything but ascii digits                               |-              |-             |-              |-      |-        |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches ascii letters only                                        |100            |-             |1659.8         |-      |165.57   |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches everything but ascii letters                              |-              |-             |-              |-      |-        |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \s matches ascii whitespace only                                     |100            |-             |1607.86        |-      |162.11   |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \S matches everything but ascii whitespace                           |-              |-             |-              |-      |-        |-       |
|Total time for common passed                                                                                         |100            |342.76        |1282.82        |249.4  |160.56   |156.19  |
|Total time for all tests (with failed)                                                                               |100            |428.99        |1992.99        |7255.98|274.72   |367.43  |
|Tests passed (total: 24)                                                                                             |12             |12            |16             |16     |16       |16      |
|Tests passed, %                                                                                                      |50             |50            |66.67          |66.67  |66.67    |66.67   |


