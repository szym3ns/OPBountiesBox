## OPBountiesBox

Backend application (API) managing wanted posters of characters from the One Piece universe.

### Tech stack
* PHP 8.1
* Laravel 10.38.1
* PostgreSQL 14

### Installation

To install the project on a local machine, it is best to use docker-compose.
To perform the installation, execute the following commands:

```shell
# Copy environment file
cp .env.example .env
# Set the rest of the environment variables manually
```

```shell
# Build containers and run them in background
docker-compose build && docker-compose up -d
```

After building the containers, enter the container with application:
```shell
docker-compose exec opb_app /bin/bash
```
or
```shell
docker exec -it opb_app bash
```

and execute the following commands:
```shell
# Dependency installation, generating an application key and starting migration with seeds
composer install && php artisan key:generate && php artisan migrate --seed
```

Now apllication is available at:
```
http://localhost
```

### OpenAPI documentation

To generate OpenAPI documentation use following command inside docker container:
```shell
cd docs/ && npm install && npm run build-api
```
After executing the command, documentation is available at:
```
http://localhost/api/v1/openapi
```
