## Performance tests of ajv
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testAjv:advanced.json advanced schema from z-schema benchmark (https://github.com/zaggino/z-schema)|-              |570.79        |444.34         |-       |-        |100     |
|testAjv:basic.json basic schema from z-schema benchmark (https://github.com/zaggino/z-schema)      |113.77         |-             |-              |172.77  |-        |100     |
|testAjv:complex.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)      |100            |-             |-              |10454.03|-        |3701.54 |
|testAjv:complex2.json complex schema from jsck benchmark without IDs in definitions                |-              |605.3         |471.73         |288.86  |-        |100     |
|testAjv:complex3.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)     |100            |-             |-              |10835.82|-        |3781.95 |
|testAjv:cosmicrealms.json schema from cosmicrealms benchmark                                       |100            |893.77        |1103.31        |317.33  |258.13   |180.8   |
|testAjv:medium.json medium schema from jsck benchmark (https://github.com/pandastrike/jsck)        |128.79         |573.82        |822.92         |273.87  |100      |150.24  |
|Total time for common passed                                                                       |100            |718.57        |921.81         |276.41  |187.58   |155.73  |
|Total time for all tests (with failed)                                                             |187.27         |3459.36       |2887.62        |2192.34 |100      |1090.22 |
|Tests passed (total: 7)                                                                            |5              |4             |4              |6       |2        |7       |
|Tests passed, %                                                                                    |71.43          |57.14         |57.14          |85.71   |28.57    |100     |


