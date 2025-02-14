up:
	docker compose up -d
build:
	docker compose build
down:
	docker compose down
app:
	docker compose exec app bash
web:
	docker compose exec web bash
db:
	docker compose exec db bash
migrate:
	php artisan migrate
cache:
	php artisan config:cache
mysql:
	mysql -h 127.0.0.1 -P 3306 -u user -password
route:
	php artisan route:list > route.txt