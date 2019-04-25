## Performance tests of ajv
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis   |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|-------|---------|--------|
|testAjv:complex2.json complex schema from jsck benchmark without IDs in definitions                |-              |653.81        |575.85         |304.86 |-        |100     |
|testAjv:complex3.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)     |100            |-             |-              |9986.28|-        |3407.98 |
|testAjv:complex.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)      |100            |-             |-              |9885.41|-        |3406.07 |
|testAjv:basic.json basic schema from z-schema benchmark (https://github.com/zaggino/z-schema)      |121.69         |-             |-              |189.97 |-        |100     |
|testAjv:cosmicrealms.json schema from cosmicrealms benchmark                                       |100            |1025.7        |1139.83        |281.79 |213.33   |153.12  |
|testAjv:medium.json medium schema from jsck benchmark (https://github.com/pandastrike/jsck)        |132.93         |586.08        |904.17         |288.69 |100      |146.15  |
|testAjv:advanced.json advanced schema from z-schema benchmark (https://github.com/zaggino/z-schema)|-              |657.66        |506.52         |163.6  |-        |100     |
|Total time for common passed                                                                       |100            |794.57        |958.17         |256.25 |158.75   |136.06  |
|Total time for all tests (with failed)                                                             |220.7          |4276.47       |3734.68        |3035.88|100      |1216.39 |
|Tests passed (total: 7)                                                                            |5              |4             |4              |7      |2        |7       |
|Tests passed, %                                                                                    |71.43          |57.14         |57.14          |100    |28.57    |100     |
