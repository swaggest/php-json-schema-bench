## Mandatory spec tests for draft-04
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis  |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|------|---------|--------|
|testSpec:maxLength.json maxLength validation                                                       |-              |313.37        |596.83         |183.05|142.5    |100     |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100            |400.45        |797.45         |233.53|190.12   |193.58  |
|testSpec:oneOf.json oneOf                                                                          |107.79         |364.55        |683.94         |219.08|100      |157.37  |
|testSpec:oneOf.json oneOf with base schema                                                         |100            |501.52        |748.85         |195.89|144.27   |139.66  |
|testSpec:oneOf.json oneOf complex types                                                            |125.51         |472.91        |519.09         |194.96|100      |169.61  |
|testSpec:definitions.json valid definition                                                         |100            |20946.24      |8726.25        |-     |-        |736.22  |
|testSpec:definitions.json invalid definition                                                       |-              |1109.65       |420.91         |-     |-        |100     |
|testSpec:minimum.json minimum validation                                                           |100            |417.76        |579.71         |336.58|184.24   |153.9   |
|testSpec:minimum.json exclusiveMinimum validation                                                  |100            |350.46        |1558.61        |274.52|145.71   |146.39  |
|testSpec:required.json required validation                                                         |100            |666.07        |1080.11        |270.62|174.37   |153.87  |
|testSpec:required.json required default validation                                                 |100            |691.46        |710.63         |414.84|210.78   |188.51  |
|testSpec:items.json a schema given for items                                                       |100            |391.56        |665.83         |216.86|111.4    |130.91  |
|testSpec:items.json an array of schemas for items                                                  |100.85         |388.13        |577.38         |186.84|106.26   |100     |
|testSpec:default.json invalid type for default                                                     |100            |557.58        |1724.96        |-     |167.78   |162.78  |
|testSpec:default.json invalid string value for default                                             |100            |487.45        |616.28         |-     |152.14   |143.55  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |118.36         |354.7         |613.37         |158.33|100      |115.95  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |152.94         |430.83        |468.34         |186   |100      |141.12  |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |118            |333.45        |478.24         |153.22|100      |141.3   |
|testSpec:allOf.json allOf                                                                          |143.04         |501.69        |646.93         |175.72|100      |117.73  |
|testSpec:allOf.json allOf with base schema                                                         |108.99         |462.38        |505.06         |148.63|105.62   |100     |
|testSpec:allOf.json allOf simple types                                                             |130.04         |402.41        |731.42         |184.69|104.32   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |100            |497.45        |1146.42        |288.38|200.38   |184.43  |
|testSpec:minItems.json minItems validation                                                         |100            |458.12        |1746.44        |274.97|203.66   |176.46  |
|testSpec:multipleOf.json by int                                                                    |100            |357.48        |516.69         |229.63|174.35   |123.78  |
|testSpec:multipleOf.json by number                                                                 |100            |396.35        |620.87         |295.06|246.17   |145.2   |
|testSpec:multipleOf.json by small number                                                           |100            |375.62        |1986.85        |343.97|195.17   |193.51  |
|testSpec:maxItems.json maxItems validation                                                         |100            |409.47        |612.8          |256.25|183.64   |166.72  |
|testSpec:anyOf.json anyOf                                                                          |103.63         |350.46        |895.9          |231.04|100      |147.4   |
|testSpec:anyOf.json anyOf with base schema                                                         |110.71         |363.07        |554.01         |137.93|100      |146.1   |
|testSpec:anyOf.json anyOf complex types                                                            |126.99         |455.22        |600.41         |190.61|100      |162.28  |
|testSpec:ref.json root pointer ref                                                                 |-              |460.18        |505.65         |201.42|-        |100     |
|testSpec:ref.json relative pointer ref to object                                                   |-              |514.91        |266.08         |211.28|-        |100     |
|testSpec:ref.json relative pointer ref to array                                                    |-              |502.63        |710.75         |240.94|-        |100     |
|testSpec:ref.json escaped pointer ref                                                              |-              |768.83        |458.44         |220.66|-        |100     |
|testSpec:ref.json nested refs                                                                      |-              |777.99        |375            |359.12|-        |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |-              |-             |613.28         |229.25|-        |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |-              |2000.79       |1283.78        |-     |-        |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100            |312.59        |494.74         |131.48|-        |119.78  |
|testSpec:ref.json Recursive references between schemas                                             |-              |-             |-              |316.83|-        |100     |
|testSpec:pattern.json pattern validation                                                           |100            |369.25        |499.39         |201.82|168.01   |139.54  |
|testSpec:pattern.json pattern is not anchored                                                      |100            |497.53        |795.15         |368.2 |240.79   |169.71  |
|testSpec:properties.json object properties validation                                              |122.81         |430.72        |813.01         |160.09|100      |113.18  |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |129.27         |500.29        |711.9          |201.08|100      |148.44  |
|testSpec:dependencies.json dependencies                                                            |100            |473.04        |1190.35        |284.6 |185.98   |178.5   |
|testSpec:dependencies.json multiple dependencies                                                   |100            |406.48        |962.4          |188.92|136.89   |180.55  |
|testSpec:dependencies.json multiple dependencies subschema                                         |214.17         |514.17        |582.63         |171.65|100      |148.68  |
|testSpec:minLength.json minLength validation                                                       |-              |292.01        |684.83         |154.09|124.7    |100     |
|testSpec:type.json integer type matches integers                                                   |100            |337.6         |679.47         |141.58|120.96   |146.78  |
|testSpec:type.json number type matches numbers                                                     |100            |353.76        |1065.56        |155.06|127.85   |146.62  |
|testSpec:type.json string type matches strings                                                     |100            |339.66        |715.52         |155.22|126.27   |144.25  |
|testSpec:type.json object type matches objects                                                     |100            |331.91        |728.27         |147.12|117.74   |141.98  |
|testSpec:type.json array type matches arrays                                                       |100            |330.31        |718.56         |141.72|116.45   |140.68  |
|testSpec:type.json boolean type matches booleans                                                   |100            |332.78        |725.8          |140.78|122.4    |143.84  |
|testSpec:type.json null type matches only the null object                                          |100            |323.91        |709.63         |138.02|117.08   |139.47  |
|testSpec:type.json multiple types can be specified in an array                                     |100            |376.62        |928.65         |185.37|129.03   |145.95  |
|testSpec:additionalItems.json additionalItems as schema                                            |126.33         |431.19        |919.12         |218.47|100      |126.68  |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |100            |587.16        |494.4          |355.99|118.87   |136.94  |
|testSpec:additionalItems.json array of items with no additionalItems                               |100            |551.41        |953.73         |285.14|123.21   |134.55  |
|testSpec:additionalItems.json additionalItems as false without items                               |100            |578.5         |868.49         |404.36|337.59   |245.54  |
|testSpec:additionalItems.json additionalItems are allowed by default                               |100            |591.29        |520.47         |256.38|165.54   |119.59  |
|testSpec:refRemote.json remote ref                                                                 |-              |421.39        |1227.29        |267.89|-        |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |-              |477.93        |368.47         |343.69|-        |100     |
|testSpec:refRemote.json ref within remote ref                                                      |-              |507.84        |328.28         |405.27|-        |100     |
|testSpec:refRemote.json base URI change                                                            |-              |756.66        |1390.71        |330.79|100      |129.02  |
|testSpec:refRemote.json base URI change - change folder                                            |-              |602.91        |456.24         |285.51|-        |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |-              |651.61        |795.22         |306.29|-        |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |-              |639.48        |-              |401.86|100      |185.23  |
|testSpec:not.json not                                                                              |109.24         |313.95        |700.65         |143.54|100      |166.87  |
|testSpec:not.json not multiple types                                                               |100            |359.7         |847.89         |174.01|109.32   |209.47  |
|testSpec:not.json not more complex schema                                                          |123.19         |413.81        |588.25         |174.47|100      |195.34  |
|testSpec:not.json forbidden property                                                               |100            |-             |303.41         |153.9 |104.59   |152.93  |
|testSpec:maximum.json maximum validation                                                           |100            |434           |1568.3         |329.56|187.71   |152.9   |
|testSpec:maximum.json exclusiveMaximum validation                                                  |100            |363.16        |601.73         |267.33|148.42   |150.6   |
|testSpec:enum.json simple enum validation                                                          |100            |442.86        |2065.97        |205.71|171.58   |147.44  |
|testSpec:enum.json heterogeneous enum validation                                                   |100            |439.87        |520.54         |193.99|160.98   |200.42  |
|testSpec:enum.json enums in properties                                                             |100            |572.25        |1135.13        |218.5 |130.98   |139.46  |
|testSpec:minProperties.json minProperties validation                                               |100            |-             |1511.39        |301.5 |205.16   |187.69  |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|100            |473.57        |958.25         |257.82|122.25   |163.08  |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |130.53         |475.47        |681.88         |236.31|100      |131.78  |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |111.55         |344.11        |328.2          |156.86|100      |114.24  |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |100            |432.3         |377.15         |241.3 |108.21   |118.47  |
|Total time for common passed                                                                       |100            |365.95        |642.06         |169.12|106.14   |126.79  |
|Total time for all tests (with failed)                                                             |100            |543.22        |794.18         |238   |112.14   |159.48  |
|Tests passed (total: 81)                                                                           |63             |77            |79             |76    |65       |81      |
|Tests passed, %                                                                                    |77.78          |95.06         |97.53          |93.83 |80.25    |100     |


## Optional spec tests for draft-04
|Test                                                                                                                 |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testSpecOptional:format.json validation of date-time strings                                                         |-              |274.6         |760.62         |151.54  |449.09   |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-              |-             |-              |180.51  |-        |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |-              |276.46        |1136.19        |144.22  |100.67   |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |-              |300.61        |313.83         |151.2   |100      |117.29  |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |-              |278.65        |876.88         |147.68  |100      |113.06  |
|testSpecOptional:format.json validation of host names                                                                |-              |-             |806.12         |23537.08|100      |112.07  |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|100            |386.14        |379.09         |-       |119.27   |172.04  |
|testSpecOptional:bignum.json integer                                                                                 |-              |-             |-              |324.43  |-        |100     |
|testSpecOptional:bignum.json number                                                                                  |100            |461.8         |820.47         |582.7   |242.43   |175     |
|testSpecOptional:bignum.json string                                                                                  |100            |340.4         |336.47         |199.13  |118      |159.81  |
|testSpecOptional:bignum.json integer comparison                                                                      |100            |482.8         |953.26         |525.66  |244.51   |161.78  |
|testSpecOptional:bignum.json float comparison with high precision                                                    |113.27         |298.65        |2442.01        |165.54  |100      |134.18  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100            |305.49        |413.8          |163.76  |112.86   |145.78  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-              |-             |-              |109.61  |-        |100     |
|Total time for common passed                                                                                         |100            |354.72        |999.1          |290.67  |148.96   |148.86  |
|Total time for all tests (with failed)                                                                               |100            |1163.21       |3560.95        |20678.31|728.19   |949.91  |
|Tests passed (total: 14)                                                                                             |6              |10            |11             |13      |11       |14      |
|Tests passed, %                                                                                                      |42.86          |71.43         |78.57          |92.86   |78.57    |100     |


