composer:
	docker run --rm --interactive --tty --volume ${PWD}/html:/app composer $(COMMAND)
