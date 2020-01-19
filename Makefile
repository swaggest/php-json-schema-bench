deps:
	@git submodule init && git submodule update
	@composer install

bench:
	@./run_bench.sh
