## Mandatory spec tests for draft-04
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis  |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|------|---------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |144.03         |507.16        |586.5          |235.48|100      |133.41  |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |100            |573.4         |787.4          |328.29|100.36   |100     |
|testSpec:additionalItems.json array of items with no additionalItems                               |105.17         |443.63        |489.44         |203.46|100      |108.65  |
|testSpec:additionalItems.json additionalItems as false without items                               |100            |524.03        |2007.46        |293.03|298.03   |282.3   |
|testSpec:additionalItems.json additionalItems are allowed by default                               |100            |820.99        |603.33         |287.25|205.61   |186.26  |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|100            |474.64        |1032.41        |207.53|136.18   |152.65  |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |118.35         |491.23        |795.8          |222.07|100      |115.56  |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |100            |354.72        |1222.75        |138.89|146.61   |109.61  |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |100            |497.04        |403.24         |259.89|133.94   |130.28  |
|testSpec:allOf.json allOf                                                                          |124.6          |452.06        |723.48         |149.73|100.79   |100     |
|testSpec:allOf.json allOf with base schema                                                         |126.44         |559.15        |743.51         |164.01|133.22   |100     |
|testSpec:allOf.json allOf simple types                                                             |140.71         |475.99        |577.33         |230.58|112.41   |100     |
|testSpec:anyOf.json anyOf                                                                          |100            |375.68        |979.24         |223.97|102.73   |151.65  |
|testSpec:anyOf.json anyOf with base schema                                                         |100            |386.5         |716.12         |137.54|106.57   |137.9   |
|testSpec:anyOf.json anyOf complex types                                                            |114.74         |428.68        |737.77         |159.27|100      |134.65  |
|testSpec:default.json invalid type for default                                                     |100            |652.24        |739.59         |-     |184.38   |150.43  |
|testSpec:default.json invalid string value for default                                             |100            |596.14        |1980.5         |-     |201.13   |135.26  |
|testSpec:definitions.json valid definition                                                         |100            |22525.58      |8802.44        |-     |-        |694.21  |
|testSpec:definitions.json invalid definition                                                       |-              |1446.7        |772.09         |-     |-        |100     |
|testSpec:dependencies.json dependencies                                                            |100            |465.59        |1278.54        |255.43|182.36   |171.1   |
|testSpec:dependencies.json multiple dependencies                                                   |100            |456.58        |1266.55        |144.8 |151.29   |170.77  |
|testSpec:dependencies.json multiple dependencies subschema                                         |192.16         |535.09        |942.93         |159.27|100      |131.88  |
|testSpec:enum.json simple enum validation                                                          |100            |525.81        |676.51         |201.1 |187.46   |128.4   |
|testSpec:enum.json heterogeneous enum validation                                                   |100            |456.31        |1804.82        |204.12|215.05   |125.54  |
|testSpec:enum.json enums in properties                                                             |100            |603.14        |1121.47        |236.96|169.47   |161.68  |
|testSpec:items.json a schema given for items                                                       |100            |311.48        |737.64         |164.1 |110.11   |111.2   |
|testSpec:items.json an array of schemas for items                                                  |101.03         |430.13        |953.67         |174.48|113.06   |100     |
|testSpec:maximum.json maximum validation                                                           |100            |471.55        |2017.16        |275.68|234.37   |142.08  |
|testSpec:maximum.json exclusiveMaximum validation                                                  |100            |368.79        |3214.86        |224.09|160.18   |136     |
|testSpec:maxItems.json maxItems validation                                                         |100            |402.96        |770.13         |232.96|186.65   |155.38  |
|testSpec:maxLength.json maxLength validation                                                       |-              |321.15        |1491.8         |156.1 |121.18   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |100            |541.32        |2358.78        |230.92|196.67   |186.72  |
|testSpec:minimum.json minimum validation                                                           |100            |416.25        |783.82         |269.31|195.54   |150.2   |
|testSpec:minimum.json exclusiveMinimum validation                                                  |100            |413.75        |3123.52        |270.03|152.93   |152.61  |
|testSpec:minItems.json minItems validation                                                         |100            |466.42        |771.57         |240.39|206.88   |167.02  |
|testSpec:minLength.json minLength validation                                                       |-              |248.5         |949.82         |118.46|107.71   |100     |
|testSpec:minProperties.json minProperties validation                                               |100            |-             |2086.96        |232.04|185.77   |148.29  |
|testSpec:multipleOf.json by int                                                                    |100            |392.15        |2760.52        |176.32|163.63   |108.76  |
|testSpec:multipleOf.json by number                                                                 |100            |458.39        |676.43         |219.57|201.63   |129.31  |
|testSpec:multipleOf.json by small number                                                           |100            |385.44        |664.96         |271.91|186.83   |146.52  |
|testSpec:not.json not                                                                              |100            |425.44        |2155.44        |147.1 |125.43   |133.98  |
|testSpec:not.json not multiple types                                                               |100            |386.36        |1209.02        |163.1 |110.28   |136.91  |
|testSpec:not.json not more complex schema                                                          |109.35         |424.28        |720.85         |152.85|100      |132.39  |
|testSpec:not.json forbidden property                                                               |100            |-             |338.33         |172.65|120.33   |109.49  |
|testSpec:oneOf.json oneOf                                                                          |110.02         |370.29        |695.39         |200.78|100      |145.26  |
|testSpec:oneOf.json oneOf with base schema                                                         |100            |555.96        |1501.37        |174.42|168.9    |158.09  |
|testSpec:oneOf.json oneOf complex types                                                            |119.14         |468.23        |672.12         |165.54|100      |132.23  |
|testSpec:pattern.json pattern validation                                                           |100            |336.2         |614.76         |159.93|173.14   |135.49  |
|testSpec:pattern.json pattern is not anchored                                                      |100            |478.92        |1028.97        |271.59|240.22   |141.02  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |104.04         |345.79        |1068.8         |118.37|100      |100.95  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |146.11         |421.03        |856.88         |135.95|100      |137.61  |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |102.65         |333.8         |396.15         |100   |105.13   |125.64  |
|testSpec:properties.json object properties validation                                              |121.83         |411.69        |1192.51        |136.41|100.52   |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |122.99         |503.46        |949.61         |161.64|100      |127.04  |
|testSpec:ref.json root pointer ref                                                                 |-              |542.97        |773.81         |217.49|-        |100     |
|testSpec:ref.json relative pointer ref to object                                                   |-              |437.6         |327.47         |162.34|-        |100     |
|testSpec:ref.json relative pointer ref to array                                                    |-              |509.89        |1099.2         |199.23|-        |100     |
|testSpec:ref.json escaped pointer ref                                                              |-              |780.51        |697.73         |188.3 |-        |100     |
|testSpec:ref.json nested refs                                                                      |-              |803.52        |1785.8         |320.11|-        |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |-              |-             |453.81         |222.43|-        |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |-              |2283.6        |2060.34        |-     |-        |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |115.45         |338.58        |300.59         |114.3 |-        |100     |
|testSpec:ref.json Recursive references between schemas                                             |-              |-             |-              |375.39|-        |100     |
|testSpec:refRemote.json remote ref                                                                 |-              |379.73        |380.89         |281.41|-        |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |-              |562.48        |2062.77        |315.16|-        |100     |
|testSpec:refRemote.json ref within remote ref                                                      |-              |522.69        |409.09         |358.62|-        |100     |
|testSpec:refRemote.json base URI change                                                            |-              |783.97        |2039.41        |336.23|100      |128.87  |
|testSpec:refRemote.json base URI change - change folder                                            |-              |690.37        |606.39         |322.34|-        |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |-              |757.39        |1075.48        |347.23|-        |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |-              |692.57        |-              |411.11|100      |163.2   |
|testSpec:required.json required validation                                                         |100            |687.24        |2359.28        |216.19|193.09   |186.24  |
|testSpec:required.json required default validation                                                 |100            |710.26        |757.92         |283.36|193.94   |151.39  |
|testSpec:type.json integer type matches integers                                                   |100            |335.91        |989.8          |130.44|117      |132.27  |
|testSpec:type.json number type matches numbers                                                     |100            |349.82        |974.6          |133.1 |117.83   |124.86  |
|testSpec:type.json string type matches strings                                                     |100            |363.86        |1204.49        |140.31|135.35   |153.89  |
|testSpec:type.json object type matches objects                                                     |100            |336.78        |1155.89        |127.1 |134.76   |142.04  |
|testSpec:type.json array type matches arrays                                                       |100            |349.99        |1111.24        |114.9 |144.75   |129.86  |
|testSpec:type.json boolean type matches booleans                                                   |100            |372.75        |2087.54        |125.63|158.84   |157.94  |
|testSpec:type.json null type matches only the null object                                          |100            |346.99        |1109.79        |116.41|125.93   |134.65  |
|testSpec:type.json multiple types can be specified in an array                                     |100            |368.29        |1331.31        |141   |123.11   |125.95  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100            |383.78        |1483.72        |203.85|196.99   |185.82  |
|Total time for common passed                                                                       |100            |384.81        |946.91         |151.2 |115.04   |119.77  |
|Total time for all tests (with failed)                                                             |100            |570.25        |1163.31        |216.2 |120.86   |149.35  |
|Tests passed (total: 81)                                                                           |63             |77            |79             |76    |65       |81      |
|Tests passed, %                                                                                    |77.78          |95.06         |97.53          |93.83 |80.25    |100     |


## Optional spec tests for draft-04
|Test                                                                                                                 |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testSpecOptional:bignum.json integer                                                                                 |-              |-             |-              |266.47  |-        |100     |
|testSpecOptional:bignum.json number                                                                                  |100            |429.1         |912.38         |414.4   |230.28   |138.88  |
|testSpecOptional:bignum.json string                                                                                  |100            |346.27        |587.54         |185.1   |118.06   |162.29  |
|testSpecOptional:bignum.json integer comparison                                                                      |101.21         |413.19        |4111.4         |299.21  |187.86   |100     |
|testSpecOptional:bignum.json float comparison with high precision                                                    |130.13         |349.84        |522.22         |170.7   |100      |127.32  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |124.43         |326.93        |466.04         |134.98  |100      |119.76  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-              |-             |-              |-       |-        |100     |
|testSpecOptional:format.json validation of date-time strings                                                         |-              |240.75        |313.12         |108.55  |298.5    |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-              |-             |-              |-       |-        |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |-              |256.46        |293.27         |148.83  |108.9    |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |-              |293.55        |1140.32        |115.36  |102.94   |100     |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |-              |267.82        |391.06         |126.85  |102.03   |100     |
|testSpecOptional:format.json validation of host names                                                                |-              |-             |1252.82        |15461.35|100      |104.78  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|100            |362.92        |414.4          |-       |153.6    |147.16  |
|Total time for common passed                                                                                         |100            |331.23        |1183.49        |210.1   |128.98   |114.56  |
|Total time for all tests (with failed)                                                                               |100            |1067.04       |3661.12        |12314.15|618.46   |799.95  |
|Tests passed (total: 14)                                                                                             |6              |10            |11             |11      |11       |14      |
|Tests passed, %                                                                                                      |42.86          |71.43         |78.57          |78.57   |78.57    |100     |


