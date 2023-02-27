all:

	@docker-compose -f ./srcs/docker-compose.yml up

down:
	@docker-compose -f ./srcs/docker-compose.yml down
	
v:
	@docker-compose -f srcs/docker-compose.yml down -v

i:
	@docker system prune -a

clean : 

fclean : clean v

re:
	@docker-compose -f srcs/docker-compose.yml up --build
