## Performance tests of ajv
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testAjv:advanced.json advanced schema from z-schema benchmark (https://github.com/zaggino/z-schema)|-              |676.61        |534.77         |-       |-        |100     |
|testAjv:basic.json basic schema from z-schema benchmark (https://github.com/zaggino/z-schema)      |119.2          |-             |-              |185.53  |-        |100     |
|testAjv:complex.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)      |100            |-             |-              |10226.04|-        |-       |
|testAjv:complex2.json complex schema from jsck benchmark without IDs in definitions                |-              |713.87        |558.29         |370.14  |-        |100     |
|testAjv:complex3.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)     |100            |-             |-              |10311.36|-        |-       |
|testAjv:cosmicrealms.json schema from cosmicrealms benchmark                                       |100            |1003.36       |1314.27        |369.4   |311.32   |211.47  |
|testAjv:medium.json medium schema from jsck benchmark (https://github.com/pandastrike/jsck)        |138.15         |621.52        |994.1          |296.27  |100      |137.61  |
|Total time for common passed                                                                       |100            |772.57        |1066.29        |304.79  |211.69   |164.82  |
|Total time for all tests (with failed)                                                             |170.26         |3407.6        |2895.07        |2151.92 |100      |610.16  |
|Tests passed (total: 7)                                                                            |5              |4             |4              |6       |2        |5       |
|Tests passed, %                                                                                    |71.43          |57.14         |57.14          |85.71   |28.57    |71.43   |


