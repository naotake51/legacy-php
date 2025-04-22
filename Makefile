mysql:
	docker exec -i lamp_db mysql -u user -ppassword myapp -e "$(COMMAND)"


composer:
	docker run --rm --interactive --tty --volume ${PWD}/html:/app composer $(COMMAND)
