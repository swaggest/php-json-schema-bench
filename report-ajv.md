## Performance tests of ajv
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testAjv:advanced.json advanced schema from z-schema benchmark (https://github.com/zaggino/z-schema)|-              |563.12        |433.94         |-       |-        |100     |
|testAjv:basic.json basic schema from z-schema benchmark (https://github.com/zaggino/z-schema)      |105.45         |-             |-              |172.43  |-        |100     |
|testAjv:complex.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)      |100            |-             |-              |10117.08|-        |3622.96 |
|testAjv:complex2.json complex schema from jsck benchmark without IDs in definitions                |-              |624.12        |470.81         |292.03  |-        |100     |
|testAjv:complex3.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)     |100            |-             |-              |10211.83|-        |3574.06 |
|testAjv:cosmicrealms.json schema from cosmicrealms benchmark                                       |100            |930.59        |1161.47        |334.13  |271.02   |190.02  |
|testAjv:medium.json medium schema from jsck benchmark (https://github.com/pandastrike/jsck)        |127.65         |571.14        |816.02         |288.19  |100      |149.24  |
|Total time for common passed                                                                       |100            |736.44        |951.63         |290.59  |193.59   |160.64  |
|Total time for all tests (with failed)                                                             |180            |3508.29       |2874.53        |2194.19 |100      |1096.91 |
|Tests passed (total: 7)                                                                            |5              |4             |4              |6       |2        |7       |
|Tests passed, %                                                                                    |71.43          |57.14         |57.14          |85.71   |28.57    |100     |


