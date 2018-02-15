## Performance tests of ajv
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis   |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|-------|---------|--------|
|testAjv:advanced.json advanced schema from z-schema benchmark (https://github.com/zaggino/z-schema)|-              |657.96        |540.98         |-      |-        |100     |
|testAjv:basic.json basic schema from z-schema benchmark (https://github.com/zaggino/z-schema)      |111.89         |-             |-              |196.8  |-        |100     |
|testAjv:complex.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)      |100            |-             |-              |9936.25|-        |3084.26 |
|testAjv:complex2.json complex schema from jsck benchmark without IDs in definitions                |-              |667.46        |535.74         |358.28 |-        |100     |
|testAjv:complex3.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)     |100            |-             |-              |9883.45|-        |3127.13 |
|testAjv:cosmicrealms.json schema from cosmicrealms benchmark                                       |100            |779.35        |986.05         |278.87 |228.52   |136.43  |
|testAjv:medium.json medium schema from jsck benchmark (https://github.com/pandastrike/jsck)        |125.93         |574.11        |860.25         |293.81 |100      |126.22  |
|Total time for common passed                                                                       |100            |666.62        |880.47         |262.99 |176.55   |123.81  |
|Total time for all tests (with failed)                                                             |180.23         |3419.03       |2967.51        |2237.52|100      |947.73  |
|Tests passed (total: 7)                                                                            |5              |4             |4              |6      |2        |7       |
|Tests passed, %                                                                                    |71.43          |57.14         |57.14          |85.71  |28.57    |100     |


