## Mandatory spec tests for draft-04
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis  |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|------|---------|--------|
|testSpec:maxLength.json maxLength validation                                                       |-              |288.96        |563.61         |183.42|140.85   |100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100            |380.16        |833.97         |253.7 |199.58   |194.02  |
|testSpec:uniqueItems.json uniqueItems with an array of items                                       |100            |430.48        |762.01         |170.65|145.29   |129.82  |
|testSpec:uniqueItems.json uniqueItems with an array of items and additionalItems=false             |100            |386.55        |758.14         |183.08|137.22   |137.84  |
|testSpec:oneOf.json oneOf                                                                          |104.76         |358.94        |594.7          |222.65|100      |159     |
|testSpec:oneOf.json oneOf with base schema                                                         |100            |476.93        |754.73         |202.28|147      |142.42  |
|testSpec:oneOf.json oneOf complex types                                                            |118.35         |420           |497.64         |184.13|100      |158.03  |
|testSpec:oneOf.json oneOf with empty schema                                                        |100            |362.23        |359.96         |198.49|110.33   |142     |
|testSpec:oneOf.json oneOf with required                                                            |101.54         |442.42        |628.46         |185.1 |100      |177.56  |
|testSpec:oneOf.json oneOf with missing optional property                                           |100            |490.18        |474.07         |189.75|100.7    |163     |
|testSpec:definitions.json valid definition                                                         |100            |20461.51      |9583.75        |-     |-        |770.9   |
|testSpec:definitions.json invalid definition                                                       |-              |1072.28       |430.92         |-     |-        |100     |
|testSpec:minimum.json minimum validation                                                           |100            |401.23        |1278.65        |352.68|192.87   |155.78  |
|testSpec:minimum.json minimum validation (explicit false exclusivity)                              |100            |395.99        |1303.33        |332.22|197.3    |159.86  |
|testSpec:minimum.json exclusiveMinimum validation                                                  |100            |355.17        |552.58         |278.11|150.17   |154.35  |
|testSpec:minimum.json minimum validation with signed integer                                       |100            |408.99        |1319.54        |274.26|203.99   |157     |
|testSpec:required.json required validation                                                         |100            |669.28        |1273.66        |275.61|182.45   |166.74  |
|testSpec:required.json required default validation                                                 |100            |669.31        |728.19         |385.81|216.46   |198.75  |
|testSpec:required.json required with escaped characters                                            |100            |605.2         |1690.97        |204.32|172.18   |195.93  |
|testSpec:items.json a schema given for items                                                       |100            |375.52        |410.02         |218.74|116.06   |140.24  |
|testSpec:items.json an array of schemas for items                                                  |100            |373.92        |806.87         |185.6 |110.99   |102.86  |
|testSpec:items.json items and subitems                                                             |-              |686.27        |531.2          |279.56|-        |100     |
|testSpec:items.json nested items                                                                   |296.08         |531.62        |557.61         |162.04|100      |100.28  |
|testSpec:default.json invalid type for default                                                     |100            |535.38        |629.42         |-     |180.09   |173.24  |
|testSpec:default.json invalid string value for default                                             |100            |558.78        |1874.25        |-     |194.88   |186.13  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |109.33         |314.69        |447.61         |151.71|100      |113.14  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |142.45         |393.43        |619.77         |177.98|100      |137.29  |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |102.71         |289.3         |497.68         |141.12|100      |130.64  |
|testSpec:allOf.json allOf                                                                          |130.67         |454.98        |625.6          |167.12|100      |112.28  |
|testSpec:allOf.json allOf with base schema                                                         |102.24         |441           |530.97         |147.22|104.94   |100     |
|testSpec:allOf.json allOf simple types                                                             |118.07         |387.22        |788.38         |189.44|104.78   |100     |
|testSpec:allOf.json allOf with one empty schema                                                    |100            |533.38        |719.67         |391.28|197.62   |149.09  |
|testSpec:allOf.json allOf with two empty schemas                                                   |100            |524.11        |597.02         |364.78|156.54   |126.7   |
|testSpec:allOf.json allOf with the first empty schema                                              |116.88         |378.96        |916.16         |207.41|100      |107.09  |
|testSpec:allOf.json allOf with the last empty schema                                               |108.38         |371.27        |366.99         |181.52|100      |100.05  |
|testSpec:maxProperties.json maxProperties validation                                               |100            |454.69        |1213.17        |290.69|198.54   |183.64  |
|testSpec:minItems.json minItems validation                                                         |100            |403.94        |1648.97        |257.38|184.21   |164.49  |
|testSpec:multipleOf.json by int                                                                    |100            |382.64        |630.31         |275.46|198.68   |152.51  |
|testSpec:multipleOf.json by number                                                                 |100            |371.02        |1828.94        |310.34|241.65   |144.26  |
|testSpec:multipleOf.json by small number                                                           |100            |329.67        |507.22         |327.96|187.79   |140.74  |
|testSpec:maxItems.json maxItems validation                                                         |100            |400.84        |1727.14        |269.37|194.05   |174.42  |
|testSpec:anyOf.json anyOf                                                                          |100            |329.63        |665.56         |231.47|105.2    |158.24  |
|testSpec:anyOf.json anyOf with base schema                                                         |100            |324.79        |551.5          |134.33|100.19   |139     |
|testSpec:anyOf.json anyOf complex types                                                            |125.4          |412.85        |578.1          |186.9 |100      |156.12  |
|testSpec:anyOf.json anyOf with one empty schema                                                    |100            |393.95        |472.19         |231.26|131.1    |137.74  |
|testSpec:anyOf.json nested anyOf, to check validation semantics                                    |122.24         |312.05        |720.04         |158.88|100      |166.61  |
|testSpec:format.json validation of e-mail addresses                                                |100            |-             |1916.64        |416.93|271.67   |186.87  |
|testSpec:format.json validation of IP addresses                                                    |100            |-             |2090.06        |419.63|276.13   |189.19  |
|testSpec:format.json validation of IPv6 addresses                                                  |100            |-             |1971.56        |406.42|266.42   |186.21  |
|testSpec:format.json validation of hostnames                                                       |100            |499.43        |887.74         |414.92|267.47   |191.22  |
|testSpec:format.json validation of date-time strings                                               |100            |-             |1971.22        |415.36|261.08   |183.23  |
|testSpec:format.json validation of URIs                                                            |100            |-             |2063.66        |412.68|270.13   |190.89  |
|testSpec:ref.json root pointer ref                                                                 |-              |410.85        |598.17         |191.34|-        |100     |
|testSpec:ref.json relative pointer ref to object                                                   |-              |480.04        |658.52         |203.89|-        |100     |
|testSpec:ref.json relative pointer ref to array                                                    |-              |463.53        |315.69         |231.97|-        |100     |
|testSpec:ref.json escaped pointer ref                                                              |-              |718.67        |598.12         |214.89|-        |100     |
|testSpec:ref.json nested refs                                                                      |-              |751.24        |372.94         |371.27|-        |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |-              |-             |632.05         |227.13|-        |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |-              |1890.71       |1250.82        |-     |-        |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100            |317.05        |306.57         |144.66|-        |116.92  |
|testSpec:ref.json Recursive references between schemas                                             |-              |-             |-              |313.23|-        |100     |
|testSpec:ref.json refs with quote                                                                  |-              |-             |634.12         |212.89|-        |100     |
|testSpec:ref.json Location-independent identifier                                                  |-              |-             |-              |225.74|-        |100     |
|testSpec:ref.json Location-independent identifier with absolute URI                                |-              |-             |-              |296.83|-        |100     |
|testSpec:ref.json Location-independent identifier with base URI change in subschema                |-              |-             |-              |300.78|-        |100     |
|testSpec:pattern.json pattern validation                                                           |100            |355.4         |551.65         |226.47|176.17   |147.8   |
|testSpec:pattern.json pattern is not anchored                                                      |100            |431.77        |5337.58        |352.53|245.44   |161.5   |
|testSpec:properties.json object properties validation                                              |119.31         |410.01        |574.41         |163.44|100      |117.44  |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |125.43         |479.04        |778.94         |206.59|100      |147.78  |
|testSpec:properties.json properties with escaped characters                                        |274.64         |602.45        |657.64         |157.73|103.9    |100     |
|testSpec:dependencies.json dependencies                                                            |100            |452.78        |1412.85        |293.08|200.58   |191.44  |
|testSpec:dependencies.json multiple dependencies                                                   |100            |382.62        |1002.11        |192.36|141.95   |183.02  |
|testSpec:dependencies.json multiple dependencies subschema                                         |194.39         |466.39        |534.31         |168.13|100      |147.53  |
|testSpec:dependencies.json dependencies with escaped characters                                    |105.6          |365.61        |804.69         |156.7 |100      |148.76  |
|testSpec:minLength.json minLength validation                                                       |-              |265.34        |399.18         |147.1 |121.12   |100     |
|testSpec:type.json integer type matches integers                                                   |100            |318.45        |729.12         |141.21|120.27   |146.3   |
|testSpec:type.json number type matches numbers                                                     |100            |335.84        |1145.78        |163.88|131.15   |150.47  |
|testSpec:type.json string type matches strings                                                     |100            |331.2         |774.05         |172.69|135.32   |150.25  |
|testSpec:type.json object type matches objects                                                     |100            |328.51        |841.17         |157.68|127.53   |150.41  |
|testSpec:type.json array type matches arrays                                                       |100            |313.57        |774.95         |147.17|121.42   |144.67  |
|testSpec:type.json boolean type matches booleans                                                   |100            |322           |979.7          |146.69|125.84   |151.99  |
|testSpec:type.json null type matches only the null object                                          |100            |311.02        |623.87         |133.15|117.01   |143.48  |
|testSpec:type.json multiple types can be specified in an array                                     |100            |372.84        |999.01         |193.04|136.74   |149.47  |
|testSpec:type.json type as array with one item                                                     |100            |377.55        |2426.49        |209.23|150.77   |144.76  |
|testSpec:type.json type                                                                            |100            |408.11        |1015.11        |223.53|155.18   |162.14  |
|testSpec:additionalItems.json additionalItems as schema                                            |110.04         |359.44        |845.35         |196.35|100      |115.75  |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |100            |581.73        |510.77         |369.76|132.55   |147.89  |
|testSpec:additionalItems.json array of items with no additionalItems                               |100            |514.2         |991.11         |287.62|129.48   |133.12  |
|testSpec:additionalItems.json additionalItems as false without items                               |100            |515.33        |876.06         |392.81|334.95   |241.02  |
|testSpec:additionalItems.json additionalItems are allowed by default                               |100            |728.16        |635.68         |308.33|207.29   |147.68  |
|testSpec:refRemote.json remote ref                                                                 |-              |397.83        |1237.78        |277.79|-        |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |-              |432.97        |286.02         |310.54|-        |100     |
|testSpec:refRemote.json ref within remote ref                                                      |-              |479.96        |327.87         |411.27|-        |100     |
|testSpec:refRemote.json base URI change                                                            |-              |681.66        |1360.89        |316.13|100      |121.39  |
|testSpec:refRemote.json base URI change - change folder                                            |-              |568.28        |455.23         |293.29|-        |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |-              |586.82        |714.69         |290.97|-        |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |-              |581.2         |-              |387.56|100      |169.83  |
|testSpec:not.json not                                                                              |100            |308.42        |801.1          |151.09|100.53   |176.15  |
|testSpec:not.json not multiple types                                                               |100            |327.13        |856.58         |170.68|110.03   |199.62  |
|testSpec:not.json not more complex schema                                                          |124.98         |386.34        |628.49         |181.27|100      |197.57  |
|testSpec:not.json forbidden property                                                               |100            |-             |311            |165.52|108.25   |167.23  |
|testSpec:maximum.json maximum validation                                                           |100            |401.13        |1608.6         |338.21|189.19   |156.97  |
|testSpec:maximum.json maximum validation (explicit false exclusivity)                              |100            |395.82        |1677.84        |329.9 |184.68   |154.36  |
|testSpec:maximum.json exclusiveMaximum validation                                                  |100            |368.3         |606.64         |279.72|148.52   |150.68  |
|testSpec:enum.json simple enum validation                                                          |100            |434.13        |2029.92        |212.13|167.55   |149.83  |
|testSpec:enum.json heterogeneous enum validation                                                   |100            |422.6         |548.09         |202.39|169.01   |225.14  |
|testSpec:enum.json enums in properties                                                             |100            |581.11        |1306.83        |236.99|145.33   |155.75  |
|testSpec:enum.json enum with escaped characters                                                    |100            |450.25        |650.48         |257.59|192.18   |158.81  |
|testSpec:enum.json enum with false does not match 0                                                |100            |381.43        |1571.91        |167.15|150.56   |147.95  |
|testSpec:enum.json enum with true does not match 1                                                 |100            |379.71        |471.19         |162.62|150.93   |146.01  |
|testSpec:enum.json enum with 0 does not match false                                                |-              |-             |-              |100   |-        |-       |
|testSpec:enum.json enum with 1 does not match true                                                 |-              |-             |-              |100   |-        |-       |
|testSpec:minProperties.json minProperties validation                                               |100            |-             |1673.55        |307.43|208.23   |196.12  |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|100            |458.58        |1068.7         |263.73|131.67   |168.4   |
|testSpec:additionalProperties.json non-ASCII pattern with additionalProperties                     |100            |368.54        |464.97         |238.91|126.07   |181.7   |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |118.06         |441.49        |749.25         |229.94|100      |128.92  |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |100            |320.77        |874.09         |158.81|102.89   |114.24  |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |100            |456.91        |401.97         |270.49|130.3    |133.3   |
|testSpec:additionalProperties.json additionalProperties should not look in applicators             |153.57         |505.93        |418.95         |100   |112.06   |156.85  |
|Total time for common passed                                                                       |100            |344.92        |656.49         |165.47|106.42   |123.29  |
|Total time for all tests (with failed)                                                             |100            |488.26        |824.41         |240.71|114.34   |155.14  |
|Tests passed (total: 119)                                                                          |94             |104           |112            |114   |96       |117     |
|Tests passed, %                                                                                    |78.99          |87.39         |94.12          |95.8  |80.67    |98.32   |


## Optional spec tests for draft-04
|Test                                                                                                                 |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis   |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------------------------|---------------|--------------|---------------|-------|---------|--------|
|testSpecOptional:format.json validation of date-time strings                                                         |-              |-             |-              |100    |-        |-       |
|testSpecOptional:format.json validation of URIs                                                                      |-              |-             |-              |188.56 |-        |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |-              |268.21        |272.57         |152.64 |100.79   |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |-              |280.91        |796.06         |153.94 |100      |113.36  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |-              |253.06        |921.35         |153.15 |100      |108.31  |
|testSpecOptional:format.json validation of host names                                                                |-              |-             |290.34         |22467.1|100      |108.62  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|100            |318.09        |361.77         |-      |113.75   |158     |
|testSpecOptional:bignum.json integer                                                                                 |-              |-             |-              |326.09 |-        |100     |
|testSpecOptional:bignum.json number                                                                                  |100            |439.82        |4003.92        |574.51 |244.25   |174.84  |
|testSpecOptional:bignum.json string                                                                                  |100            |312.81        |363.85         |200.27 |110.57   |171.92  |
|testSpecOptional:bignum.json integer comparison                                                                      |100            |508.41        |1037.57        |536.64 |265.95   |179.48  |
|testSpecOptional:bignum.json float comparison with high precision                                                    |100            |301.18        |406.89         |172.21 |107.54   |141.04  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100            |283.58        |2491.51        |162.15 |107.14   |141.66  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-              |-             |-              |116.28 |-        |100     |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex $ does not match trailing newline                              |-              |-             |-              |-      |-        |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex converts \t to horizontal tab                                  |100            |313.72        |487.08         |186.28 |148.35   |149.08  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and upper letter                 |100            |321.15        |1527.65        |194.12 |150.72   |145.24  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex escapes control codes with \c and lower letter                 |100            |332.05        |502.35         |202.39 |153.86   |142.66  |
|testSpecOptional:ecmascript-regex.json ECMA 262 \d matches ascii digits only                                         |100            |-             |1122.96        |-      |143.51   |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \D matches everything but ascii digits                               |-              |-             |-              |-      |-        |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches ascii letters only                                        |100            |-             |1650.83        |-      |162.09   |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \w matches everything but ascii letters                              |-              |-             |-              |-      |-        |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \s matches ascii whitespace only                                     |100            |-             |1652.74        |-      |166.71   |-       |
|testSpecOptional:ecmascript-regex.json ECMA 262 \S matches everything but ascii whitespace                           |-              |-             |-              |-      |-        |-       |
|Total time for common passed                                                                                         |100            |338.29        |1219.21        |246.75 |153.25   |152.47  |
|Total time for all tests (with failed)                                                                               |100            |435.32        |1897.68        |7336.45|261.63   |360.94  |
|Tests passed (total: 24)                                                                                             |12             |12            |16             |16     |16       |16      |
|Tests passed, %                                                                                                      |50             |50            |66.67          |66.67  |66.67    |66.67   |


