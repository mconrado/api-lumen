#!/bin/bash

echo Subindo a aplicação docker 
docker-compose up --build -d

echo Instalando dependências
docker run --rm --interactive --tty -v $PWD/api-starwars:/app composer install

echo Acesse do navegador: http://localhost:8080
 
