## Performance tests of ajv
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis   |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|-------|---------|--------|
|testAjv:advanced.json advanced schema from z-schema benchmark (https://github.com/zaggino/z-schema)|-              |584.84        |442.94         |-      |-        |100     |
|testAjv:basic.json basic schema from z-schema benchmark (https://github.com/zaggino/z-schema)      |117.98         |-             |-              |172.37 |-        |100     |
|testAjv:complex.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)      |100            |-             |-              |9368.7 |-        |3454.87 |
|testAjv:complex2.json complex schema from jsck benchmark without IDs in definitions                |-              |609.95        |456.19         |271.81 |-        |100     |
|testAjv:complex3.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)     |100            |-             |-              |9943.84|-        |3252.56 |
|testAjv:cosmicrealms.json schema from cosmicrealms benchmark                                       |100            |967.17        |1171.64        |302.78 |290.08   |210.09  |
|testAjv:medium.json medium schema from jsck benchmark (https://github.com/pandastrike/jsck)        |122.07         |573.24        |790.19         |239.18 |100      |133.89  |
|Total time for common passed                                                                       |100            |763.21        |956.72         |258.98 |204.76   |168.94  |
|Total time for all tests (with failed)                                                             |175.99         |3342.1        |2701.25        |1975.62|100      |1017.25 |
|Tests passed (total: 7)                                                                            |5              |4             |4              |6      |2        |7       |
|Tests passed, %                                                                                    |71.43          |57.14         |57.14          |85.71  |28.57    |100     |


