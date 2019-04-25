## Mandatory spec tests for draft-04
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis  |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|------|---------|--------|
|testSpec:enum.json simple enum validation                                                          |100            |294.78        |490.26         |153.47|123.05   |110.19  |
|testSpec:enum.json heterogeneous enum validation                                                   |100            |316.01        |499.43         |160.95|126.61   |160.53  |
|testSpec:enum.json enums in properties                                                             |100            |507.14        |1085.97        |195.32|123.87   |127.79  |
|testSpec:maximum.json maximum validation                                                           |100            |338.39        |1272.23        |271.22|159.18   |132.98  |
|testSpec:maximum.json exclusiveMaximum validation                                                  |100            |270.39        |467.89         |203.15|116.27   |116.93  |
|testSpec:default.json invalid type for default                                                     |100            |480.1         |1765.91        |-     |148.56   |140.55  |
|testSpec:default.json invalid string value for default                                             |100            |507.8         |747.07         |-     |167      |146.85  |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|100            |444.16        |1046.55        |237.12|121.93   |147.47  |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |124.38         |442.29        |750.68         |215.78|100      |122.93  |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |117.96         |323.33        |886.76         |157.73|100      |116.04  |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |100            |419.51        |409.01         |231.79|111.06   |113.78  |
|testSpec:maxLength.json maxLength validation                                                       |-              |277.85        |1226.18        |177.31|138.35   |100     |
|testSpec:ref.json root pointer ref                                                                 |-              |427.09        |635.2          |188.31|-        |100     |
|testSpec:ref.json relative pointer ref to object                                                   |-              |521.43        |357.97         |209.09|-        |100     |
|testSpec:ref.json relative pointer ref to array                                                    |-              |461.89        |915.54         |226.54|-        |100     |
|testSpec:ref.json escaped pointer ref                                                              |-              |724.19        |560.41         |203.62|-        |100     |
|testSpec:ref.json nested refs                                                                      |-              |714.97        |438.02         |340.55|-        |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |-              |-             |761.25         |196.62|-        |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |-              |2292.19       |1638.4         |-     |-        |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |101.17         |315.95        |635.12         |127.46|-        |100     |
|testSpec:ref.json Recursive references between schemas                                             |-              |-             |-              |298.24|-        |100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100            |317.76        |986.29         |201.66|163.24   |166.44  |
|testSpec:minProperties.json minProperties validation                                               |100            |-             |1741.53        |268.13|180.67   |162.02  |
|testSpec:allOf.json allOf                                                                          |141.75         |511.95        |683.74         |167.37|100      |107.38  |
|testSpec:allOf.json allOf with base schema                                                         |106.1          |487.84        |724.09         |139.7 |102.63   |100     |
|testSpec:allOf.json allOf simple types                                                             |123.28         |471.89        |529.46         |183.24|100      |101.95  |
|testSpec:dependencies.json dependencies                                                            |100            |466.19        |1229.93        |253.38|173.29   |161.53  |
|testSpec:dependencies.json multiple dependencies                                                   |100            |384.51        |1171.07        |165.89|123.49   |159.17  |
|testSpec:dependencies.json multiple dependencies subschema                                         |215.57         |490.22        |1065.19        |167.82|100      |137.59  |
|testSpec:type.json integer type matches integers                                                   |100            |265.81        |708.69         |120.58|102.86   |143.13  |
|testSpec:type.json number type matches numbers                                                     |100            |279.02        |886.87         |137.92|117.13   |132     |
|testSpec:type.json string type matches strings                                                     |100            |292.24        |1420.77        |144.72|116.84   |138.05  |
|testSpec:type.json object type matches objects                                                     |100            |275.66        |956.14         |132.17|108.6    |134.79  |
|testSpec:type.json array type matches arrays                                                       |100            |280.84        |950.71         |131.98|110.68   |142.85  |
|testSpec:type.json boolean type matches booleans                                                   |100            |282.06        |957.91         |129.55|110.53   |135.65  |
|testSpec:type.json null type matches only the null object                                          |100            |280.32        |952.29         |129.14|110.42   |134.99  |
|testSpec:type.json multiple types can be specified in an array                                     |100            |306.91        |1130.1         |155.67|110.12   |128.56  |
|testSpec:items.json a schema given for items                                                       |100            |350.39        |1112.28        |197.31|105.53   |126.3   |
|testSpec:items.json an array of schemas for items                                                  |121.86         |364.49        |816.51         |178.04|104.97   |100     |
|testSpec:refRemote.json remote ref                                                                 |-              |359.17        |416.58         |242.74|-        |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |-              |389.52        |2071.33        |277.64|-        |100     |
|testSpec:refRemote.json ref within remote ref                                                      |-              |380.81        |390.03         |310.81|-        |100     |
|testSpec:refRemote.json base URI change                                                            |-              |665.67        |708.87         |298.25|100      |129.63  |
|testSpec:refRemote.json base URI change - change folder                                            |-              |606.28        |1164.88        |282.54|-        |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |-              |617.63        |950.3          |288.48|-        |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |-              |597.43        |-              |365.81|100      |169.89  |
|testSpec:minimum.json minimum validation                                                           |100            |358.69        |1703.44        |275.01|161.56   |137.47  |
|testSpec:minimum.json exclusiveMinimum validation                                                  |100            |305.38        |630.81         |223.73|129.71   |149.11  |
|testSpec:maxProperties.json maxProperties validation                                               |100            |390.99        |1507.09        |234.7 |159.68   |151.24  |
|testSpec:minItems.json minItems validation                                                         |100            |359.03        |2246.6         |226.24|166.18   |148.73  |
|testSpec:additionalItems.json additionalItems as schema                                            |125.03         |416.55        |513.41         |228.75|100      |126.32  |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |100            |537.29        |2153.52        |329.14|113.82   |134.23  |
|testSpec:additionalItems.json array of items with no additionalItems                               |100            |481.7         |591.91         |259.44|111.82   |122.2   |
|testSpec:additionalItems.json additionalItems as false without items                               |100            |450.82        |3566.44        |341.77|287.94   |206.37  |
|testSpec:additionalItems.json additionalItems are allowed by default                               |100            |683.1         |728.23         |332.98|192.53   |143.99  |
|testSpec:pattern.json pattern validation                                                           |100            |309.77        |635.44         |203.59|150.19   |130     |
|testSpec:pattern.json pattern is not anchored                                                      |100            |406.51        |7964.36        |302.83|220      |142.17  |
|testSpec:multipleOf.json by int                                                                    |100            |310.48        |689.22         |216.91|158.47   |138.47  |
|testSpec:multipleOf.json by number                                                                 |100            |332.68        |2535.68        |316.03|236.89   |131.89  |
|testSpec:multipleOf.json by small number                                                           |100            |297.39        |589.11         |289.97|176.78   |163.69  |
|testSpec:maxItems.json maxItems validation                                                         |100            |366.56        |718.1          |224.89|161.65   |149.42  |
|testSpec:not.json not                                                                              |105.28         |313.7         |1710.81        |149.58|100      |164.43  |
|testSpec:not.json not multiple types                                                               |112.31         |311.23        |999.69         |157.08|100      |179.47  |
|testSpec:not.json not more complex schema                                                          |137.83         |400.04        |754            |178.99|100      |200.12  |
|testSpec:not.json forbidden property                                                               |108.85         |-             |346.93         |147.74|100      |140.61  |
|testSpec:required.json required validation                                                         |100            |602.19        |1497.01        |237.78|159.79   |143.54  |
|testSpec:required.json required default validation                                                 |100            |630.53        |5366.22        |338.27|193.47   |167.06  |
|testSpec:anyOf.json anyOf                                                                          |106.66         |335.71        |837.09         |229.72|100      |155.05  |
|testSpec:anyOf.json anyOf with base schema                                                         |116.33         |362.32        |748.54         |136.25|100      |142.35  |
|testSpec:anyOf.json anyOf complex types                                                            |132.57         |454.82        |861.69         |191.52|100      |152.19  |
|testSpec:properties.json object properties validation                                              |129.92         |425.19        |761.62         |163.08|100      |106.51  |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |133.36         |517.06        |1079.8         |194.86|100      |133.93  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |123.04         |344.65        |926.66         |148.96|100      |107.21  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |153.03         |413.85        |897.08         |166.96|100      |134.4   |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |118.29         |316.11        |411.12         |137.85|100      |126.47  |
|testSpec:minLength.json minLength validation                                                       |-              |270.11        |1206.08        |147.51|117.39   |100     |
|testSpec:oneOf.json oneOf                                                                          |130.45         |370.72        |1265.27        |221.83|100      |166.17  |
|testSpec:oneOf.json oneOf with base schema                                                         |100            |436.05        |933.61         |164.38|119.28   |133.72  |
|testSpec:oneOf.json oneOf complex types                                                            |136.8          |471.82        |772            |186.09|100      |154.23  |
|testSpec:definitions.json valid definition                                                         |100            |19632.46      |7103.59        |-     |-        |623.9   |
|testSpec:definitions.json invalid definition                                                       |-              |1317.12       |594.36         |-     |-        |100     |
|Total time for common passed                                                                       |100.59         |334.98        |842.81         |155.9 |100      |117.96  |
|Total time for all tests (with failed)                                                             |100            |497.31        |1020.94        |214.21|105.01   |146.97  |
|Tests passed (total: 81)                                                                           |63             |77            |79             |76    |65       |81      |
|Tests passed, %                                                                                    |77.78          |95.06         |97.53          |93.83 |80.25    |100     |


## Optional spec tests for draft-04
|Test                                                                                                                 |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testSpecOptional:bignum.json integer                                                                                 |-              |-             |-              |318.87  |-        |100     |
|testSpecOptional:bignum.json number                                                                                  |100            |451.21        |2234.71        |526.13  |226.42   |157.53  |
|testSpecOptional:bignum.json string                                                                                  |100            |295.24        |415.85         |186.41  |102.17   |174.04  |
|testSpecOptional:bignum.json integer comparison                                                                      |100            |478.84        |1141.65        |441.5   |226.64   |146.61  |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100            |416.1         |452.49         |151.42  |101.28   |128.48  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |103.16         |272.81        |3485.59        |149.4   |100      |147.7   |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-              |-             |-              |108.07  |-        |100     |
|testSpecOptional:format.json validation of date-time strings                                                         |-              |258.71        |363.31         |143.73  |396.14   |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-              |-             |-              |164.26  |-        |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |-              |283.31        |337.76         |138.92  |100      |100.89  |
|testSpecOptional:format.json validation of IP addresses                                                              |-              |294.16        |1173.09        |142.17  |100      |119.82  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |-              |285.69        |399.23         |139.95  |100      |116.21  |
|testSpecOptional:format.json validation of host names                                                                |-              |-             |1283.86        |20244.12|100      |113.75  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|100            |325.54        |430.48         |-       |104.89   |139.49  |
|Total time for common passed                                                                                         |100            |371.79        |1532.72        |267.26  |141.76   |149.25  |
|Total time for all tests (with failed)                                                                               |100            |1101.19       |3945.16        |15960.53|641.64   |894.79  |
|Tests passed (total: 14)                                                                                             |6              |10            |11             |13      |11       |14      |
|Tests passed, %                                                                                                      |42.86          |71.43         |78.57          |92.86   |78.57    |100     |
