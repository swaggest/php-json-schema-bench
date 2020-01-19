update-tests:
	@git submodule update --remote --merge && git add .

update-libs:
	@composer update

deps:
	@git submodule init && git submodule update
	@composer install

bench:
	@./run_bench.sh

