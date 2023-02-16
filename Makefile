all:

	@docker compose -f ./srcs/docker-compose.yml up

down:
	@docker compose -f ./srcs/docker-compose.yml down

re:

	@docker compose -f srcs/docker-compose.yml up --build
	
v:
	@docker compose -f srcs/docker-compose.yml down -v
