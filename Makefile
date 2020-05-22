setup: ## submoduleの更新とlaradock内に.envファイルを作成してbuild
	git submodule update -i
	cp env-example laradock/.env
	make build
	cd laradock; docker-compose exec workspace composer update
	cp laravel/.env.example laravel/.env
	cd laradock; docker-compose exec workspace php artisan key:generate

restart: ## コンテナの再起動
	make stop
	make start

stop: ## コンテナの停止
	cd laradock; docker-compose down

start: ## コンテナの起動
	cd laradock; docker-compose up -d workspace php-fpm nginx postgres

build: ## コンテナのビルド
	cd laradock; docker-compose build workspace php-fpm nginx postgres
