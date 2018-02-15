#!/bin/bash

run_cmd() {
    #docker run --rm -v $(pwd):/code php:7.2 bash -c "cd /code;php vendor/bin/phpunit ./tests/src/PHPUnit/Benchmark${test_group}"
    php vendor/bin/phpunit ./tests/src/PHPUnit/Benchmark${test_group}
    #docker run --rm -v $(pwd):/code phperf/php-profiler php vendor/bin/phpunit ./tests/src/PHPUnit/Benchmark${test_group}
}

run_draft() {
    run_cmd

    echo "## Mandatory spec tests for ${report_name}" > ./report-${report_name}.md
    vendor/bin/phpunit-bench case-matrix benchmark-result.json --data-provider-separator : --filter testSpec: --format md >> ./report-${report_name}.md
    echo "" >> ./report-${report_name}.md

    echo "## Mandatory spec tests for ${report_name}" >> ./report-total.md
    vendor/bin/phpunit-bench case-matrix benchmark-result.json --total-only --data-provider-separator : --filter testSpec: --format md >> ./report-total.md

    echo "## Optional spec tests for ${report_name}" >> ./report-${report_name}.md
    vendor/bin/phpunit-bench case-matrix benchmark-result.json --data-provider-separator : --filter testSpecOptional: --format md >> ./report-${report_name}.md
    echo "" >> ./report-${report_name}.md

    echo "## Optional spec tests for ${report_name}" >> ./report-total.md
    vendor/bin/phpunit-bench case-matrix benchmark-result.json --total-only --data-provider-separator : --filter testSpecOptional: --format md >> ./report-total.md
}

format_report() {
    echo "## Format spec tests for ${report_name}" >> ./report-${report_name}.md
    vendor/bin/phpunit-bench case-matrix benchmark-result.json --data-provider-separator : --filter testSpecFormat: --format md >> ./report-${report_name}.md
    echo "" >> ./report-${report_name}.md

    echo "## Format spec tests for ${report_name}" >> ./report-total.md
    vendor/bin/phpunit-bench case-matrix benchmark-result.json  --total-only --data-provider-separator : --filter testSpecFormat: --format md >> ./report-total.md
}

ajv_report() {
    echo "## Performance tests of ajv" > ./report-${report_name}.md
    vendor/bin/phpunit-bench case-matrix benchmark-result.json --data-provider-separator ": " --filter testAjv: --format md >> ./report-${report_name}.md
    echo "" >> ./report-${report_name}.md

    echo "## Performance tests of ajv" >> ./report-total.md
    vendor/bin/phpunit-bench case-matrix benchmark-result.json --total-only --data-provider-separator ": " --filter testAjv: --format md >> ./report-total.md
}

rm report-total.md

test_group=Draft4
report_name="draft-04"
run_draft

report_name="ajv"
ajv_report

test_group=Draft6
report_name="draft-06"
run_draft

test_group=Draft7
report_name="draft-07"
run_draft
format_report


