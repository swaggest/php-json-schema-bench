## Performance tests of ajv
|Test                                                                                               |GeraintluffJsv4|JustinRainbows|LeagueJsonGuard|Opis    |StefkJval|Swaggest|
|---------------------------------------------------------------------------------------------------|---------------|--------------|---------------|--------|---------|--------|
|testAjv:medium.json medium schema from jsck benchmark (https://github.com/pandastrike/jsck)        |118.56         |509.19        |813.91         |276.79  |100      |151.83  |
|testAjv:cosmicrealms.json schema from cosmicrealms benchmark                                       |100            |1059.71       |1130.18        |300.82  |237.95   |182.68  |
|testAjv:advanced.json advanced schema from z-schema benchmark (https://github.com/zaggino/z-schema)|-              |537.81        |369.92         |149.7   |-        |100     |
|testAjv:complex.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)      |100            |-             |-              |11533.94|-        |3991.13 |
|testAjv:basic.json basic schema from z-schema benchmark (https://github.com/zaggino/z-schema)      |104.02         |-             |-              |174.31  |-        |100     |
|testAjv:complex3.json complex schema from jsck benchmark (https://github.com/pandastrike/jsck)     |100            |-             |-              |11512.67|-        |3961.69 |
|testAjv:complex2.json complex schema from jsck benchmark without IDs in definitions                |-              |565.1         |496.73         |302.48  |-        |100     |
|Total time for common passed                                                                       |100            |808.46        |953.3          |273.97  |176.71   |160.91  |
|Total time for all tests (with failed)                                                             |199.55         |3863.5        |3218.56        |3042.58 |100      |1272.41 |
|Tests passed (total: 7)                                                                            |5              |4             |4              |7       |2        |7       |
|Tests passed, %                                                                                    |71.43          |57.14         |57.14          |100     |28.57    |100     |


