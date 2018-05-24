## Mandatory spec tests for draft-04
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis  |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|------|---------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |114.49         |438.89        |503.89         |228.66|100      |134.98  |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |100            |633.9         |953.6          |348.66|108.3    |138.03  |
|testSpec:additionalItems.json array of items with no additionalItems                               |100            |544.99        |532.89         |268.84|118.6    |131.99  |
|testSpec:additionalItems.json additionalItems as false without items                               |100            |539.93        |2094.52        |366.73|324.96   |235.66  |
|testSpec:additionalItems.json additionalItems are allowed by default                               |100            |717.15        |534.21         |263.18|167.52   |144.7   |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|100            |495.69        |934.17         |265.7 |139.14   |179.89  |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |121.43         |465.19        |713.34         |232.12|100      |137.3   |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |105.77         |348.54        |1022.77        |167.12|100      |128.63  |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |100            |510.84        |395.27         |253.89|124.69   |129.89  |
|testSpec:allOf.json allOf                                                                          |134            |474.9         |740.16         |170.3 |100      |115.5   |
|testSpec:allOf.json allOf with base schema                                                         |100            |446.53        |575.4          |142.75|102.99   |100.66  |
|testSpec:allOf.json allOf simple types                                                             |114.7          |427.51        |488.46         |176.1 |100.09   |100     |
|testSpec:anyOf.json anyOf                                                                          |100            |392.62        |970.64         |227.44|102.46   |154.33  |
|testSpec:anyOf.json anyOf with base schema                                                         |101.72         |366.79        |668.55         |129.83|100      |150.26  |
|testSpec:anyOf.json anyOf complex types                                                            |119.84         |450.61        |725.13         |196.53|100      |160.31  |
|testSpec:default.json invalid type for default                                                     |100            |561.88        |698.06         |-     |157.65   |160.19  |
|testSpec:default.json invalid string value for default                                             |100            |580.02        |2279.28        |-     |191.78   |167.79  |
|testSpec:definitions.json valid definition                                                         |100            |23759.32      |7568.45        |-     |-        |862.67  |
|testSpec:definitions.json invalid definition                                                       |-              |1150.55       |518.61         |-     |-        |100     |
|testSpec:dependencies.json dependencies                                                            |100            |506.76        |1219.11        |309   |199.3    |185.97  |
|testSpec:dependencies.json multiple dependencies                                                   |100            |443.63        |1242.89        |197.11|138.14   |191.36  |
|testSpec:dependencies.json multiple dependencies subschema                                         |189.83         |500.81        |827.49         |177.62|100      |149.39  |
|testSpec:enum.json simple enum validation                                                          |100            |417.91        |634.3          |208.18|160.92   |148.26  |
|testSpec:enum.json heterogeneous enum validation                                                   |100            |442.53        |1818.79        |203.49|170.37   |193.12  |
|testSpec:enum.json enums in properties                                                             |100            |608.24        |1037.93        |234.34|141.09   |152.17  |
|testSpec:items.json a schema given for items                                                       |100            |328.11        |794.71         |234.28|117.42   |142.05  |
|testSpec:items.json an array of schemas for items                                                  |100            |402.99        |741.66         |187.57|108.12   |109.81  |
|testSpec:maximum.json maximum validation                                                           |100            |452.04        |1767.24        |300.66|193.27   |155.48  |
|testSpec:maximum.json exclusiveMaximum validation                                                  |100            |397.52        |2875.91        |230.69|142.96   |133.65  |
|testSpec:maxItems.json maxItems validation                                                         |100            |420.72        |713.58         |245.56|198.24   |161.83  |
|testSpec:maxLength.json maxLength validation                                                       |-              |302.57        |1438.68        |165.52|134.06   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |100            |496.87        |2100.24        |285.78|191.23   |183.29  |
|testSpec:minimum.json minimum validation                                                           |100            |438.18        |734.95         |295.34|195.03   |145.78  |
|testSpec:minimum.json exclusiveMinimum validation                                                  |100            |371.53        |2593.65        |238.46|149.02   |131.07  |
|testSpec:minItems.json minItems validation                                                         |100            |466.27        |786.29         |273.25|185.84   |167.63  |
|testSpec:minLength.json minLength validation                                                       |-              |282.68        |1135.27        |131.23|111.61   |100     |
|testSpec:minProperties.json minProperties validation                                               |100            |-             |2175.69        |298.52|198.75   |177.03  |
|testSpec:multipleOf.json by int                                                                    |100            |455.7         |3267.01        |261.3 |194.35   |142.76  |
|testSpec:multipleOf.json by number                                                                 |100            |517.11        |695.5          |302.1 |235.28   |144.95  |
|testSpec:multipleOf.json by small number                                                           |100            |432.21        |649.76         |282.42|181.09   |145.33  |
|testSpec:not.json not                                                                              |100            |383.21        |2135.75        |172.19|112.22   |192.55  |
|testSpec:not.json not multiple types                                                               |100            |375.32        |1178.93        |172.22|106.66   |198.42  |
|testSpec:not.json not more complex schema                                                          |124.85         |421.48        |787.47         |190.63|100      |204.26  |
|testSpec:not.json forbidden property                                                               |100            |-             |345.47         |160.11|118.57   |155.08  |
|testSpec:oneOf.json oneOf                                                                          |103            |368.11        |721.91         |194.29|100      |153.4   |
|testSpec:oneOf.json oneOf with base schema                                                         |100            |550.44        |1324.11        |192.91|147.49   |159.45  |
|testSpec:oneOf.json oneOf complex types                                                            |117.77         |445.53        |629            |179.57|100      |157.83  |
|testSpec:pattern.json pattern validation                                                           |100            |388.85        |644.33         |205.34|179.74   |154.08  |
|testSpec:pattern.json pattern is not anchored                                                      |100            |527.53        |880.52         |363.85|232.93   |150.41  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |111.7          |351.2         |1063.9         |154.47|100      |115.55  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |140.39         |406.22        |850.49         |170.47|100      |142.95  |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100.74         |310.62        |361.75         |138.41|100      |134.13  |
|testSpec:properties.json object properties validation                                              |116.53         |423.32        |1061.9         |161.1 |100      |116.91  |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |113.89         |464.84        |888.53         |189.43|100      |135.39  |
|testSpec:ref.json root pointer ref                                                                 |-              |428.57        |667.23         |200.48|-        |100     |
|testSpec:ref.json relative pointer ref to object                                                   |-              |498.25        |361.05         |221.78|-        |100     |
|testSpec:ref.json relative pointer ref to array                                                    |-              |433.25        |870.98         |215.12|-        |100     |
|testSpec:ref.json escaped pointer ref                                                              |-              |635.86        |551.78         |191.83|-        |100     |
|testSpec:ref.json nested refs                                                                      |-              |680.08        |1597.41        |321.21|-        |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |-              |-             |344.9          |223.68|-        |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |-              |2082.87       |1904.7         |-     |-        |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100            |338.26        |335.06         |153.06|-        |122.01  |
|testSpec:ref.json Recursive references between schemas                                             |-              |-             |-              |298.88|-        |100     |
|testSpec:refRemote.json remote ref                                                                 |-              |438.95        |376.21         |283.44|-        |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |-              |474.27        |1865.18        |399.39|-        |100     |
|testSpec:refRemote.json ref within remote ref                                                      |-              |450.62        |367.71         |418.25|-        |100     |
|testSpec:refRemote.json base URI change                                                            |-              |704.45        |1941.41        |368.71|100      |127.7   |
|testSpec:refRemote.json base URI change - change folder                                            |-              |573.22        |493.61         |294.94|-        |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |-              |577.75        |863.45         |304.25|-        |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |-              |595.42        |-              |397.07|100      |179.94  |
|testSpec:required.json required validation                                                         |100            |739.05        |2423.74        |263.95|176.08   |159.58  |
|testSpec:required.json required default validation                                                 |100            |718.1         |895.32         |426.15|221.39   |171.42  |
|testSpec:type.json integer type matches integers                                                   |100            |353           |1036.76        |142.28|126.37   |153.47  |
|testSpec:type.json number type matches numbers                                                     |100            |363.3         |1159.88        |160.88|135.06   |148.93  |
|testSpec:type.json string type matches strings                                                     |100            |387.58        |1123.73        |162.26|128.79   |148.17  |
|testSpec:type.json object type matches objects                                                     |100            |354.5         |1214.08        |151.71|124.12   |149.4   |
|testSpec:type.json array type matches arrays                                                       |100            |340.59        |1177.63        |143.84|123.09   |149.55  |
|testSpec:type.json boolean type matches booleans                                                   |100            |352.95        |1969.38        |139.82|128.87   |152.45  |
|testSpec:type.json null type matches only the null object                                          |100            |357.03        |1201.91        |151.16|130.4    |156.46  |
|testSpec:type.json multiple types can be specified in an array                                     |100            |403.34        |1511.07        |191.94|141.62   |151.41  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100            |358.17        |1252.67        |219.6 |186.26   |172.7   |
|Total time for common passed                                                                       |100            |386.95        |923.62         |174.92|112.98   |133.79  |
|Total time for all tests (with failed)                                                             |100            |570.37        |1139.99        |247.23|119.51   |168.91  |
|Tests passed (total: 81)                                                                           |63             |77            |79             |76    |65       |81      |
|Tests passed, %                                                                                    |77.78          |95.06         |97.53          |93.83 |80.25    |100     |


## Optional spec tests for draft-04
|Test                                                                                                                 |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testSpecOptional:bignum.json integer                                                                                 |-              |-             |-              |252.14  |-        |100     |
|testSpecOptional:bignum.json number                                                                                  |100            |513.8         |894.21         |537.17  |248.84   |161.05  |
|testSpecOptional:bignum.json string                                                                                  |100            |328.81        |427.14         |175.53  |118.64   |156.83  |
|testSpecOptional:bignum.json integer comparison                                                                      |100            |487.05        |4813.66        |413.86  |235.09   |143.74  |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100            |322.27        |480.31         |159.4   |114.24   |149.8   |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100            |321.1         |463.74         |149.42  |115.27   |132.38  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-              |-             |-              |152.39  |-        |100     |
|testSpecOptional:format.json validation of date-time strings                                                         |-              |272.74        |355.91         |147.64  |329.62   |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-              |-             |-              |181.99  |-        |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |-              |271.62        |307.49         |157.76  |102.86   |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |-              |303.42        |1150.96        |153.33  |100      |110.53  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |-              |273.01        |343.27         |153.05  |100      |107.11  |
|testSpecOptional:format.json validation of host names                                                                |-              |-             |1225.77        |16372.13|100      |107.88  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|100            |340.44        |514.7          |-       |107.38   |167.5   |
|Total time for common passed                                                                                         |100            |385.21        |1289.81        |270.27  |159.72   |148.32  |
|Total time for all tests (with failed)                                                                               |100            |1246.9        |4049.22        |15251.02|693.63   |973.51  |
|Tests passed (total: 14)                                                                                             |6              |10            |11             |13      |11       |14      |
|Tests passed, %                                                                                                      |42.86          |71.43         |78.57          |92.86   |78.57    |100     |


