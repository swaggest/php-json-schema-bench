## Mandatory spec tests for draft-04
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis  |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|------|---------|--------|
|testSpec:additionalItems.json additionalItems as schema                                            |100            |445.73        |513.31         |206.46|103.05   |119.41  |
|testSpec:additionalItems.json items is schema, no additionalItems                                  |100            |674.64        |961.06         |325.54|124.42   |123.86  |
|testSpec:additionalItems.json array of items with no additionalItems                               |100            |573.66        |642.07         |236.62|111.19   |116.44  |
|testSpec:additionalItems.json additionalItems as false without items                               |100            |488.49        |2403.68        |290.2 |342.19   |192.41  |
|testSpec:additionalItems.json additionalItems are allowed by default                               |100            |1003.15       |996.17         |300.95|216.85   |146.06  |
|testSpec:additionalProperties.json additionalProperties being false does not allow other properties|100            |438.7         |968.96         |207.51|131.44   |136.08  |
|testSpec:additionalProperties.json additionalProperties allows a schema which should validate      |116.16         |466.56        |725.3          |179.98|100      |105.69  |
|testSpec:additionalProperties.json additionalProperties can exist by itself                        |109.51         |397.61        |1029.82        |140.14|100      |128.68  |
|testSpec:additionalProperties.json additionalProperties are allowed by default                     |100            |484.35        |367.87         |234.21|133.78   |113.24  |
|testSpec:allOf.json allOf                                                                          |131.19         |517.15        |763.66         |158.82|104.47   |100     |
|testSpec:allOf.json allOf with base schema                                                         |107.65         |484.55        |668.08         |155.47|122.85   |100     |
|testSpec:allOf.json allOf simple types                                                             |121.51         |513.57        |578.26         |191.49|117.53   |100     |
|testSpec:anyOf.json anyOf                                                                          |107.48         |382.61        |961.61         |194.46|100      |130.24  |
|testSpec:anyOf.json anyOf with base schema                                                         |100            |391.68        |716.27         |119.37|105.79   |157.02  |
|testSpec:anyOf.json anyOf complex types                                                            |124.75         |484.89        |741.48         |169.67|100      |143.28  |
|testSpec:default.json invalid type for default                                                     |100            |409.18        |503.26         |-     |157.21   |133.47  |
|testSpec:default.json invalid string value for default                                             |100            |481.23        |1891.42        |-     |157.96   |121.04  |
|testSpec:definitions.json valid definition                                                         |100            |18086.5       |7036.53        |-     |-        |574.32  |
|testSpec:definitions.json invalid definition                                                       |-              |1181.22       |631.38         |-     |-        |100     |
|testSpec:dependencies.json dependencies                                                            |100            |494.85        |1128.69        |231.05|188.5    |204.33  |
|testSpec:dependencies.json multiple dependencies                                                   |100            |417.1         |1255.06        |166.89|164.95   |162.14  |
|testSpec:dependencies.json multiple dependencies subschema                                         |192.2          |531.87        |879.97         |150.31|100      |138.75  |
|testSpec:enum.json simple enum validation                                                          |100            |464.54        |565.65         |198.77|168.66   |173.36  |
|testSpec:enum.json heterogeneous enum validation                                                   |100            |436.24        |1643.21        |207.66|174.53   |134.17  |
|testSpec:enum.json enums in properties                                                             |100            |626.12        |941.76         |229.74|136.26   |124.68  |
|testSpec:items.json a schema given for items                                                       |100            |332.71        |949.81         |208.29|124.17   |129.53  |
|testSpec:items.json an array of schemas for items                                                  |100            |426.91        |886.08         |178.77|122.5    |115.31  |
|testSpec:maximum.json maximum validation                                                           |100            |472.27        |2020.35        |265.22|184.92   |138.51  |
|testSpec:maximum.json exclusiveMaximum validation                                                  |100            |393.86        |2821.53        |222.92|141.13   |153.01  |
|testSpec:maxItems.json maxItems validation                                                         |100            |425.43        |717.48         |221.36|183.28   |149.82  |
|testSpec:maxLength.json maxLength validation                                                       |-              |309.97        |1504.63        |146.35|142.91   |100     |
|testSpec:maxProperties.json maxProperties validation                                               |100            |488.74        |1759.89        |240.22|211.12   |173.97  |
|testSpec:minimum.json minimum validation                                                           |100            |433.6         |848.09         |271.7 |194.4    |160.05  |
|testSpec:minimum.json exclusiveMinimum validation                                                  |100            |373.2         |3137.25        |216.34|155.06   |158.42  |
|testSpec:minItems.json minItems validation                                                         |100            |493.17        |771.72         |218.08|204.35   |154.62  |
|testSpec:minLength.json minLength validation                                                       |-              |295.66        |1026.48        |130.96|116.2    |100     |
|testSpec:minProperties.json minProperties validation                                               |100            |-             |2150.08        |253.41|198.1    |163.27  |
|testSpec:multipleOf.json by int                                                                    |100            |522.98        |3105.25        |276.69|226.04   |145.93  |
|testSpec:multipleOf.json by number                                                                 |100            |506.09        |698.74         |273.26|240.77   |144.44  |
|testSpec:multipleOf.json by small number                                                           |100            |413.61        |712.19         |294.7 |181.23   |132.57  |
|testSpec:not.json not                                                                              |100            |366.33        |2064.83        |159.07|115.1    |128.22  |
|testSpec:not.json not multiple types                                                               |100            |392.09        |1101.29        |158.47|109.11   |151.46  |
|testSpec:not.json not more complex schema                                                          |130.12         |433.99        |711.13         |159.88|100      |148.75  |
|testSpec:not.json forbidden property                                                               |120.04         |-             |358.66         |120.21|100      |113.58  |
|testSpec:oneOf.json oneOf                                                                          |108.65         |380.52        |767.51         |188.97|100      |157.68  |
|testSpec:oneOf.json oneOf with base schema                                                         |100            |495.07        |1324.79        |187.28|137.77   |142.15  |
|testSpec:oneOf.json oneOf complex types                                                            |130.35         |451.02        |646.32         |171.5 |100      |160.32  |
|testSpec:pattern.json pattern validation                                                           |100            |404.91        |574.96         |229.51|188.95   |136.79  |
|testSpec:pattern.json pattern is not anchored                                                      |100            |461.86        |889.05         |253.08|219.27   |152.37  |
|testSpec:patternProperties.json patternProperties validates properties matching a regex            |100            |315.64        |971.48         |111.68|107.15   |101.54  |
|testSpec:patternProperties.json multiple simultaneous patternProperties are validated              |148.73         |414.22        |790.89         |137.84|100      |130.1   |
|testSpec:patternProperties.json regexes are not anchored by default and are case sensitive         |109.61         |299.36        |403.24         |108.77|100      |125.04  |
|testSpec:properties.json object properties validation                                              |114.37         |424.05        |1255.75        |155.13|100.34   |100     |
|testSpec:properties.json properties, patternProperties, additionalProperties interaction           |130.88         |520.99        |997.48         |165.77|100      |136.31  |
|testSpec:ref.json root pointer ref                                                                 |-              |496.6         |719.66         |179.72|-        |100     |
|testSpec:ref.json relative pointer ref to object                                                   |-              |553.63        |399.16         |212.94|-        |100     |
|testSpec:ref.json relative pointer ref to array                                                    |-              |511.18        |1166.06        |261.15|-        |100     |
|testSpec:ref.json escaped pointer ref                                                              |-              |855.01        |773.29         |234.36|-        |100     |
|testSpec:ref.json nested refs                                                                      |-              |789.56        |1561.41        |367.36|-        |100     |
|testSpec:ref.json ref overrides any sibling keywords                                               |-              |-             |348.66         |176.8 |-        |100     |
|testSpec:ref.json remote ref, containing refs itself                                               |-              |1877.31       |1937.25        |-     |-        |100     |
|testSpec:ref.json property named $ref that is not a reference                                      |100            |349.7         |393.78         |133.82|-        |111.55  |
|testSpec:ref.json Recursive references between schemas                                             |-              |-             |-              |331.35|-        |100     |
|testSpec:refRemote.json remote ref                                                                 |-              |471.11        |443.49         |256.98|-        |100     |
|testSpec:refRemote.json fragment within remote ref                                                 |-              |493.07        |1674.23        |297.51|-        |100     |
|testSpec:refRemote.json ref within remote ref                                                      |-              |580.42        |414.1          |402.23|-        |100     |
|testSpec:refRemote.json base URI change                                                            |-              |674.88        |1904.75        |301.63|100      |108.26  |
|testSpec:refRemote.json base URI change - change folder                                            |-              |702.51        |593            |300.74|-        |100     |
|testSpec:refRemote.json base URI change - change folder in subschema                               |-              |707.9         |976.9          |329.81|-        |100     |
|testSpec:refRemote.json root ref in remote ref                                                     |-              |491.45        |-              |341.28|100      |128.48  |
|testSpec:required.json required validation                                                         |100            |748.19        |2382.88        |243.09|193.45   |151.6   |
|testSpec:required.json required default validation                                                 |100            |679.33        |759.71         |291.46|329.36   |159.44  |
|testSpec:type.json integer type matches integers                                                   |100            |367.48        |1081.54        |127.15|153.26   |146.14  |
|testSpec:type.json number type matches numbers                                                     |100            |348.55        |1112.88        |133.54|132.68   |135.05  |
|testSpec:type.json string type matches strings                                                     |100            |378.93        |1298.22        |138.98|137.83   |144.14  |
|testSpec:type.json object type matches objects                                                     |100            |348.63        |1235.2         |132.32|140.38   |151.91  |
|testSpec:type.json array type matches arrays                                                       |100            |364.62        |1222.02        |122.71|159.76   |141.18  |
|testSpec:type.json boolean type matches booleans                                                   |100            |344.53        |1733.4         |115.14|119.6    |134.98  |
|testSpec:type.json null type matches only the null object                                          |100            |371.7         |1329.22        |121.8 |134.28   |149.39  |
|testSpec:type.json multiple types can be specified in an array                                     |100            |370.47        |1129.87        |155.38|141.88   |126.87  |
|testSpec:uniqueItems.json uniqueItems validation                                                   |100            |381.19        |1322.87        |194.5 |181.65   |165.45  |
|Total time for common passed                                                                       |100            |388.53        |927.74         |152.62|115.89   |121.56  |
|Total time for all tests (with failed)                                                             |100            |566.63        |1141.15        |217.05|122.22   |151.62  |
|Tests passed (total: 81)                                                                           |63             |77            |79             |76    |65       |81      |
|Tests passed, %                                                                                    |77.78          |95.06         |97.53          |93.83 |80.25    |100     |


## Optional spec tests for draft-04
|Test                                                                                                                 |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testSpecOptional:bignum.json integer                                                                                 |-              |-             |-              |316.03  |-        |100     |
|testSpecOptional:bignum.json number                                                                                  |100            |342.92        |586.33         |328.77  |212.43   |116.84  |
|testSpecOptional:bignum.json string                                                                                  |100            |303.34        |394.91         |187.77  |132.3    |141.48  |
|testSpecOptional:bignum.json integer comparison                                                                      |100            |459.05        |5967.26        |399.64  |241.64   |134.75  |
|testSpecOptional:bignum.json float comparison with high precision                                                    |103.45         |280.28        |416.1          |130.32  |100      |139.68  |
|testSpecOptional:bignum.json float comparison with high precision on negative numbers                                |100            |303           |396.7          |128.61  |101.81   |123.07  |
|testSpecOptional:ecmascript-regex.json ECMA 262 regex non-compliance                                                 |-              |-             |-              |-       |-        |100     |
|testSpecOptional:format.json validation of date-time strings                                                         |-              |312.67        |316.13         |122.25  |331.41   |100     |
|testSpecOptional:format.json validation of URIs                                                                      |-              |-             |-              |-       |-        |100     |
|testSpecOptional:format.json validation of e-mail addresses                                                          |-              |304.42        |318.21         |134.78  |100.38   |100     |
|testSpecOptional:format.json validation of IP addresses                                                              |-              |305.69        |1160.35        |137.25  |117.72   |100     |
|testSpecOptional:format.json validation of IPv6 addresses                                                            |-              |270.65        |425.58         |126.77  |115.53   |100     |
|testSpecOptional:format.json validation of host names                                                                |-              |-             |1418.71        |16424.55|104.18   |100     |
|testSpecOptional:zeroTerminatedFloats.json some languages do not distinguish between different types of numeric value|100            |437.14        |525.2          |-       |124.37   |156.85  |
|Total time for common passed                                                                                         |100            |328.42        |1287.8         |224.94  |152.26   |129.89  |
|Total time for all tests (with failed)                                                                               |100            |1141.91       |3892.55        |12631.17|652.22   |832.43  |
|Tests passed (total: 14)                                                                                             |6              |10            |11             |11      |11       |14      |
|Tests passed, %                                                                                                      |42.86          |71.43         |78.57          |78.57   |78.57    |100     |


