.PHONY: install up migrate keygen link all ini-setup clone-setup larastan fixer

# デフォルトのPHPバージョンを設定
PHP_VERSION ?= 83

rm-composer-lock:
	rm composer.lock

install:
	DOCKER_CONTENT_TRUST=0 docker run --rm \
	    -u "$(shell id -u):$(shell id -g)" \
	    -v "$(shell pwd):/var/www/html" \
	    -w /var/www/html \
	    laravelsail/php$(PHP_VERSION)-composer:latest \
	    composer install --ignore-platform-reqs
	cp .env.example .env
	@echo "Dependencies installed and .env file created."

up:
	./vendor/bin/sail up -d
	sleep 9

migrate:
	./vendor/bin/sail artisan migrate

keygen:
	./vendor/bin/sail artisan key:generate

link:
	./vendor/bin/sail artisan storage:link

# 初回構築時（composer.lockを削除して最新の状態で構築）
ini-setup: rm-composer-lock install up  migrate keygen link
	@echo "環境構築完了！ http://localhost でアクセスできます。"

# クローン構築時
clone-setup: install up  migrate keygen link
	@echo "環境構築完了！ http://localhost でアクセスできます。"

# larastan実行
larastan:
	./vendor/bin/sail exec laravel.test ./vendor/bin/phpstan analyse --memory-limit=2G

# php-cs-fixer実行
fixer:
	./vendor/bin/sail exec laravel.test ./vendor/bin/php-cs-fixer fix -v --diff
