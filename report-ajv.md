## Performance tests of ajv
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testAjv:medium.json medium schema from jsck benchmark (https://github.com/pandastrike/jsck)        |129.25         |552.07        |912.14         |282.07  |100      |147.83  |
|testAjv:cosmicrealms.json schema from cosmicrealms benchmark                                       |100            |1056.96       |1040.99        |291.06  |228.22   |153.73  |
|testAjv:advanced.json advanced schema from z-schema benchmark (https://github.com/zaggino/z-schema)|-              |581.5         |379.9          |156.7   |-        |100     |
|testAjv:complex.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)      |100            |-             |-              |11155.36|-        |3688.09 |
|testAjv:basic.json basic schema from z-schema benchmark (https://github.com/zaggino/z-schema)      |113.21         |-             |-              |179.12  |-        |100     |
|testAjv:complex3.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)     |100            |-             |-              |11037.77|-        |3637.61 |
|testAjv:complex2.json complex schema from jsck benchmark without IDs in definitions                |-              |620.15        |514.96         |314.07  |-        |100     |
|Total time for common passed                                                                       |100            |803.3         |905.96         |261.73  |167.47   |137.88  |
|Total time for all tests (with failed)                                                             |211.19         |4039.37       |3193.71        |3044.95 |100      |1217.6  |
|Tests passed (total: 7)                                                                            |5              |4             |4              |7       |2        |7       |
|Tests passed, %                                                                                    |71.43          |57.14         |57.14          |100     |28.57    |100     |


