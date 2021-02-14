setup: .env
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