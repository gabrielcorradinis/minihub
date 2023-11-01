install:
	@docker exec -u 1000 php composer install
	@docker exec php php artisan key:generate

dump:
	@docker exec -u 1000 php composer dumpautoload

up:
	@docker-compose -f ../docker/docker-compose.yml -p hub up -d

down:
	@docker-compose -f ../docker/docker-compose.yml -p hub down

restart:
	@docker-compose -f ../docker/docker-compose.yml -p hub restart

reset:
	@docker-compose -f ../docker/docker-compose.yml -p hub down -v
	@docker-compose -f ../docker/docker-compose.yml -p hub up --build -d

permissions:
	@docker exec php chown -cR 1000:33 ./bootstrap/cache/ ./storage/
	@docker exec php chmod -cR 775 ./bootstrap/cache/ ./storage/

clear:
	@docker exec php rm ./bootstrap/cache/*.php
	@docker exec php php artisan optimize:clear

migrate:
	@docker exec -t php php artisan migrate:refresh --seed

php:
	@docker exec -it -u 1000 php bash

admin:
	@docker exec -it php bash

tinker:
	@docker exec -it php bash -c "while true; do php artisan tinker; done"

init: 
	@docker-compose -f ../docker/docker-compose.yml -p hub up -d
	@docker exec php cp .env.example .env
	@docker exec -u 1000 php composer install
	@docker exec php php artisan key:generate
	@docker exec php chown -cR 1000:33 ./bootstrap/cache/ ./storage/
	@docker exec php chmod -cR 775 ./bootstrap/cache/ ./storage/
