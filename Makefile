all:
	# mkdir /home/abayar/data/mariadb
	# mkdir /home/abayar/data/wordpress
	@docker compose -f ./srcs/docker-compose.yml up

down:
	@docker compose -f ./srcs/docker-compose.yml down

re:

	@docker compose -f srcs/docker-compose.yml up --build