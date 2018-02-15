# Benchmark of JSON-Schema implementations for PHP

## Benchmark

Performance and accuracy is assessed using
* [JSON-Schema Test Suite](https://github.com/json-schema-org/JSON-Schema-Test-Suite.git)
* Tests included in [`ajv`](https://github.com/epoberezkin/ajv/tree/master/spec/tests/schemas)
Each test is running for a number of iterations, total time is normalized to 100% of fastest runner.
If single test is failing, whole test case is failing.

## Participants

### Draft 04

* [`justinrainbow/json-schema`](https://github.com/justinrainbow/json-schema) `5.2.7`
* [`opis/json-schema`](https://github.com/opis/json-schema) `1.0.3`
* [`geraintluff/jsv4`](https://github.com/geraintluff/jsv4-php) `v1.0.1`
* [`stefk/jval`](https://github.com/stefk/JVal) `master@1c26dd2c1`
* [`league/json-guard`](https://github.com/thephpleague/json-guard) `master@256bc2582`
* [`swaggest/json-schema`](https://github.com/swaggest/php-json-schema) `v0.10.0`

### Draft 06

* [`opis/json-schema`](https://github.com/opis/json-schema) `1.0.3`
* [`swaggest/json-schema`](https://github.com/swaggest/php-json-schema) `v0.10.0`

### Draft 07

* [`opis/json-schema`](https://github.com/opis/json-schema) `1.0.3`
* [`swaggest/json-schema`](https://github.com/swaggest/php-json-schema) `v0.10.0`

## Results

* [Total](report-total.md)
* [Draft-04](report-draft-04.md)
* [Draft-06](report-draft-06.md)
* [Draft-07](report-draft-07.md)
* [AJV](report-ajv.md)