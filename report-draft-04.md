## Mandatory spec tests for draft-04
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis  |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|------|---------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |114.5          |455.48        |532.59         |231.92|100      |138.3   |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |100            |725.29        |1034.68        |430.65|125.64   |156.03  |
|testSpec:additionalItems.json array of items with no additionalItems                               |100            |599.73        |582.53         |281.2 |125.04   |135.44  |
|testSpec:additionalItems.json additionalItems as false without items                               |100            |586.86        |2209.06        |391.86|326.58   |234.18  |
|testSpec:additionalItems.json additionalItems are allowed by default                               |100            |894.88        |640.28         |352.65|230.76   |168.31  |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|100            |519.59        |976.47         |250.85|133      |171.46  |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |114.3          |462.23        |699.57         |215.49|100      |128.7   |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |100.42         |319.15        |892.52         |153.95|100      |114.6   |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |100            |415.79        |335.71         |205.59|108.57   |106.32  |
|testSpec:allOf.json allOf                                                                          |124.93         |496.08        |731.27         |166.27|100      |119.13  |
|testSpec:allOf.json allOf with base schema                                                         |102.82         |456.89        |583.76         |146.52|106.77   |100     |
|testSpec:allOf.json allOf simple types                                                             |145.3          |400.59        |466.28         |165.29|104.23   |100     |
|testSpec:anyOf.json anyOf                                                                          |101.77         |370.18        |896.08         |209.7 |100      |150.72  |
|testSpec:anyOf.json anyOf with base schema                                                         |100            |371.72        |620.03         |127.19|100.44   |137.78  |
|testSpec:anyOf.json anyOf complex types                                                            |116.75         |439.55        |675.61         |187.77|100      |154.77  |
|testSpec:default.json invalid type for default                                                     |100            |553.57        |709.39         |-     |173.17   |165.94  |
|testSpec:default.json invalid string value for default                                             |100            |601.04        |2509           |-     |187.73   |159.83  |
|testSpec:definitions.json valid definition                                                         |100            |21689.87      |7209.09        |-     |-        |822.41  |
|testSpec:definitions.json invalid definition                                                       |-              |1172.28       |538.82         |-     |-        |100     |
|testSpec:dependencies.json dependencies                                                            |100            |482.95        |1055.1         |280.21|187.22   |176.73  |
|testSpec:dependencies.json multiple dependencies                                                   |100            |422.21        |1080.68        |184.52|139.75   |174.28  |
|testSpec:dependencies.json multiple dependencies subschema                                         |192.66         |480.39        |815.18         |164.17|100      |149.32  |
|testSpec:enum.json simple enum validation                                                          |100            |444.1         |674.31         |216.79|172.35   |140.87  |
|testSpec:enum.json heterogeneous enum validation                                                   |100            |439.34        |1544.85        |202.56|171.53   |184.81  |
|testSpec:enum.json enums in properties                                                             |100            |619.12        |902.09         |224.43|142.59   |150.13  |
|testSpec:items.json a schema given for items                                                       |100            |334.18        |815.9          |228.28|122.77   |143.18  |
|testSpec:items.json an array of schemas for items                                                  |100            |412.79        |895.54         |187.52|114.14   |109.52  |
|testSpec:maximum.json maximum validation                                                           |100            |421.43        |1617.29        |299   |198.89   |140.51  |
|testSpec:maximum.json exclusiveMaximum validation                                                  |100            |370.2         |2263.38        |243.12|161.78   |141.56  |
|testSpec:maxItems.json maxItems validation                                                         |100            |416.71        |704.76         |248.37|191.16   |169.11  |
|testSpec:maxLength.json maxLength validation                                                       |-              |293.65        |1469.84        |170.64|136.92   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |100            |511.99        |2080.48        |281.9 |202.44   |179.32  |
|testSpec:minimum.json minimum validation                                                           |100            |428.31        |733.25         |296.03|178.93   |150.12  |
|testSpec:minimum.json exclusiveMinimum validation                                                  |100            |369.19        |3296.85        |250.37|144.09   |140.93  |
|testSpec:minItems.json minItems validation                                                         |100            |464.48        |799.73         |254.18|200.37   |168.98  |
|testSpec:minLength.json minLength validation                                                       |-              |274.52        |1148.3         |138.04|115.33   |100     |
|testSpec:minProperties.json minProperties validation                                               |100            |-             |2253.34        |289.98|200.37   |186.8   |
|testSpec:multipleOf.json by int                                                                    |100            |409.09        |2997.95        |234.4 |180.32   |145.63  |
|testSpec:multipleOf.json by number                                                                 |100            |444.91        |649.29         |252.28|207.5    |131.05  |
|testSpec:multipleOf.json by small number                                                           |100            |419.5         |632.43         |288.17|198.03   |137.2   |
|testSpec:not.json not                                                                              |100            |345.23        |1988.28        |155.02|106.27   |188.02  |
|testSpec:not.json not multiple types                                                               |100            |395.79        |1150.55        |174.69|109.81   |203.05  |
|testSpec:not.json not more complex schema                                                          |118.74         |447.04        |787.8          |176.73|100      |189.35  |
|testSpec:not.json forbidden property                                                               |100            |-             |354.94         |151.61|106.68   |156.84  |
|testSpec:oneOf.json oneOf                                                                          |102.3          |376.57        |638.31         |188.36|100      |155.84  |
|testSpec:oneOf.json oneOf with base schema                                                         |100            |525.26        |1368.74        |190.68|144.41   |150.84  |
|testSpec:oneOf.json oneOf complex types                                                            |119.3          |461.77        |646            |183.21|100      |163.88  |
|testSpec:pattern.json pattern validation                                                           |100            |377.12        |638.38         |219.44|181.52   |140.16  |
|testSpec:pattern.json pattern is not anchored                                                      |100            |457.68        |958.89         |316.69|228.38   |152.27  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |108.21         |354.57        |1042.39        |148.09|100      |115.08  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |129.72         |376.52        |798.34         |152.07|100      |137.31  |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |100            |294.54        |342.4          |125.79|104.13   |132.28  |
|testSpec:properties.json object properties validation                                              |114.07         |412.66        |988.9          |154.73|100      |109.4   |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |125.66         |513.6         |969.07         |202.1 |100      |151.66  |
|testSpec:ref.json root pointer ref                                                                 |-              |445.39        |714.06         |204.58|-        |100     |
|testSpec:ref.json relative pointer ref to object                                                   |-              |501.19        |330.43         |213.26|-        |100     |
|testSpec:ref.json relative pointer ref to array                                                    |-              |464.65        |1100.48        |229.75|-        |100     |
|testSpec:ref.json escaped pointer ref                                                              |-              |684.99        |564.57         |206.02|-        |100     |
|testSpec:ref.json nested refs                                                                      |-              |692.83        |1498.57        |339.84|-        |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |-              |-             |343.56         |215.22|-        |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |-              |2054.67       |2010.58        |-     |-        |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100            |323.08        |340.29         |142.48|-        |120.1   |
|testSpec:ref.json Recursive references between schemas                                             |-              |-             |-              |306.36|-        |100     |
|testSpec:refRemote.json remote ref                                                                 |-              |421.16        |402.15         |274.09|-        |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |-              |427.56        |1510.19        |326.37|-        |100     |
|testSpec:refRemote.json ref within remote ref                                                      |-              |462.18        |393.25         |385.61|-        |100     |
|testSpec:refRemote.json base URI change                                                            |-              |714.67        |1906.07        |343.43|100      |128.03  |
|testSpec:refRemote.json base URI change - change folder                                            |-              |549.29        |476.61         |271.58|-        |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |-              |626.96        |913.84         |307.9 |-        |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |-              |608.25        |-              |376.21|100      |177.28  |
|testSpec:required.json required validation                                                         |100            |727.09        |2309.02        |273.16|181.32   |161.82  |
|testSpec:required.json required default validation                                                 |100            |750.16        |847.43         |356.74|206.65   |175.39  |
|testSpec:type.json integer type matches integers                                                   |100            |356.95        |883.74         |144.13|127.37   |146.05  |
|testSpec:type.json number type matches numbers                                                     |100            |368.73        |1171.06        |165.72|136.62   |152.5   |
|testSpec:type.json string type matches strings                                                     |100            |366.78        |1153.05        |156.72|138.98   |153.61  |
|testSpec:type.json object type matches objects                                                     |100            |326.01        |1101           |144.34|127.14   |142.29  |
|testSpec:type.json array type matches arrays                                                       |100            |347.97        |1185.21        |145.9 |128.36   |151.16  |
|testSpec:type.json boolean type matches booleans                                                   |100            |360.35        |1802.94        |149.49|128.64   |152.93  |
|testSpec:type.json null type matches only the null object                                          |100            |343.79        |980.75         |142.29|125.4    |147.46  |
|testSpec:type.json multiple types can be specified in an array                                     |100            |399.94        |1237.47        |197.89|141.35   |152.35  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100            |366.55        |1444.24        |233.51|188.67   |184.82  |
|Total time for common passed                                                                       |100            |386.89        |897.01         |171.78|113.91   |132.85  |
|Total time for all tests (with failed)                                                             |100            |568.82        |1115.74        |241.84|120.31   |167.21  |
|Tests passed (total: 81)                                                                           |63             |77            |79             |76    |65       |81      |
|Tests passed, %                                                                                    |77.78          |95.06         |97.53          |93.83 |80.25    |100     |


## Optional spec tests for draft-04
|Test                                                                                                                 |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testSpecOptional:bignum.json integer                                                                                 |-              |-             |-              |298.98  |-        |100     |
|testSpecOptional:bignum.json number                                                                                  |100            |504.47        |933.92         |539.78  |253.47   |153.21  |
|testSpecOptional:bignum.json string                                                                                  |100            |330.22        |406.04         |203.76  |116.08   |174.29  |
|testSpecOptional:bignum.json integer comparison                                                                      |100            |508.95        |4513.08        |445.75  |235.36   |146.01  |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100            |261.64        |402.49         |138.28  |106.92   |121.28  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100            |291.05        |417.8          |144.73  |102.8    |126.66  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-              |-             |-              |114.19  |-        |100     |
|testSpecOptional:format.json validation of date-time strings                                                         |-              |281.83        |369.45         |154.01  |343.63   |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-              |-             |-              |187.35  |-        |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |-              |258.42        |300.37         |141.81  |106      |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |-              |284.22        |1119.63        |145.57  |100      |105.29  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |-              |261.29        |362.64         |143.63  |100      |104.2   |
|testSpecOptional:format.json validation of host names                                                                |-              |-             |930.96         |15191.91|100.98   |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|100            |372.11        |516.96         |-       |137.23   |160.69  |
|Total time for common passed                                                                                         |100            |361.55        |1144.25        |268.03  |152.34   |142.64  |
|Total time for all tests (with failed)                                                                               |100            |1161.57       |3627.84        |14419.14|679.28   |907.32  |
|Tests passed (total: 14)                                                                                             |6              |10            |11             |13      |11       |14      |
|Tests passed, %                                                                                                      |42.86          |71.43         |78.57          |92.86   |78.57    |100     |


