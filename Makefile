setup: .env
	$(MAKE) up
	docker-compose run --rm profile-gui chmod 777 /tmp
	docker-compose run --rm app composer dump-autoload
.PHONY: setup

.env:
	cp .env.example .env

up:
	docker-compose up -d
.PHONY: up

down:
	docker-compose down
.PHONY: down

flash:
	docker-compose down --rmi all --volumes --remove-orphans
.PHONY: flash