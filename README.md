# Comparative benchmark for JSON-schema PHP validators

[![Build Status](https://travis-ci.org/swaggest/php-json-schema-bench.svg?branch=master)](https://travis-ci.org/swaggest/php-json-schema-bench)

Updated on 2020.01.

## Benchmark

Performance and accuracy is assessed using
* [JSON-Schema Test Suite](https://github.com/json-schema-org/JSON-Schema-Test-Suite.git)
* Tests included in [`ajv`](https://github.com/epoberezkin/ajv/tree/master/spec/tests/schemas)

Each test is running for a number of iterations, total time is normalized to 100% of fastest runner.
If single test is failing, whole test case is failing.

## Participants

### Draft 04

* [`justinrainbow/json-schema`](https://github.com/justinrainbow/json-schema) `5.2.9`
* [`opis/json-schema`](https://github.com/opis/json-schema) `1.0.18`
* [`geraintluff/jsv4`](https://github.com/geraintluff/jsv4-php) `v1.0.1`
* [`stefk/jval`](https://github.com/stefk/JVal) `master@1c26dd2c1`
* [`league/json-guard`](https://github.com/thephpleague/json-guard) `master@d03dad628`
* [`swaggest/json-schema`](https://github.com/swaggest/php-json-schema) `v0.12.25`

### Draft 06

* [`opis/json-schema`](https://github.com/opis/json-schema) `1.0.18`
* [`swaggest/json-schema`](https://github.com/swaggest/php-json-schema) `v0.12.25`

### Draft 07

* [`opis/json-schema`](https://github.com/opis/json-schema) `1.0.18`
* [`swaggest/json-schema`](https://github.com/swaggest/php-json-schema) `v0.12.25`

## Results

These results were produced on Dell 7590 with i9-9980HK CPU with PHP 7.3.11 (no xdebug).
Values are normalized to best result (100%) in row.

* [Total](report-total.md)
* [Draft-04](report-draft-04.md)
* [Draft-06](report-draft-06.md)
* [Draft-07](report-draft-07.md)
* [AJV](report-ajv.md)