up:
	docker compose up -d

fresh:
	docker exec -i lamp_web php new/artisan migrate:fresh

mysql:
	docker exec -i lamp_db mysql -u user -ppassword myapp -e "$(COMMAND)"

composer:
	docker run --rm --interactive --tty --volume ${PWD}/html/new:/app composer $(COMMAND)

e2e-test:
	cd e2e && npx playwright test

e2e-ui:
	cd e2e && npx playwright test --ui

e2e-codegen:
	cd e2e && npx playwright codegen
