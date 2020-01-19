## Performance tests of ajv
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testAjv:medium.json medium schema from jsck benchmark (https://github.com/pandastrike/jsck)        |121.09         |518.36        |815.48         |276.04  |100      |144.32  |
|testAjv:cosmicrealms.json schema from cosmicrealms benchmark                                       |100            |1064.06       |1119.04        |302.02  |242.67   |163.99  |
|testAjv:advanced.json advanced schema from z-schema benchmark (https://github.com/zaggino/z-schema)|-              |576.72        |388.48         |155.49  |-        |100     |
|testAjv:complex.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)      |100            |-             |-              |11502.91|-        |3897.5  |
|testAjv:basic.json basic schema from z-schema benchmark (https://github.com/zaggino/z-schema)      |108.96         |-             |-              |179.91  |-        |100     |
|testAjv:complex3.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)     |100            |-             |-              |11469.62|-        |3761.11 |
|testAjv:complex2.json complex schema from jsck benchmark without IDs in definitions                |-              |600.35        |522.09         |314.48  |-        |100     |
|Total time for common passed                                                                       |100            |807.56        |939.32         |272.15  |178.1    |145.92  |
|Total time for all tests (with failed)                                                             |199.12         |3870.59       |3175.65        |2991.82 |100      |1200.49 |
|Tests passed (total: 7)                                                                            |5              |4             |4              |7       |2        |7       |
|Tests passed, %                                                                                    |71.43          |57.14         |57.14          |100     |28.57    |100     |


