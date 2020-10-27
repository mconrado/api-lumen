# API Lumen de consumo SWAPI
Consulta a API [SWAPI](https://swapi.dev/)  e retorna a ordem dos filmes do StarWars de acordo com os tipos de visualização:

- lucas
- release
- rinster
- machete
- magnotta
- lee
  



## Requisitos

- [Docker](https://docs.docker.com/engine/install/) 
- [Docker compose](https://docs.docker.com/compose/install/) 


## Instalação

Com Docker e Docker compose instalados siga as instruções:

#### Linux

execute o arquivo run.sh
```bash
sh ./run.sh
```


#### Outros Sistemas

no terminal execute os seguintes comandos:

```bash
docker-compose up --build -d
```


```bash
docker run --rm --interactive --tty -v $PWD/api-starwars:/app composer install
```

#### Importante
Certifique-se que as portas 8080 e 9000 não estejam sendo usadas por outra aplicação, ambas serão usadas pelo NGINX e PHP respectivamente. 


## Como utilizar

Do navagador ou do Postman acesse o endereço:

[http://localhost:8080/films?order=lucas](http://localhost:8080/films?order=lucas)

e deverá retornar algo como:

```json
[
    {"title":"The Phantom Menace","episode_id":1,"opening_crawl":"Turmoil has engulfed the\r\nGalactic Republic. The
taxation\r\nof trade routes to outlying star\r\nsystems is in dispute.\r\n\r\nHoping to resolve the matter\r\nwith a
blockade of deadly\r\nbattleships, the greedy Trade\r\nFederation has stopped all\r\nshipping to the small planet\r\nof
Naboo.\r\n\r\nWhile the Congress of the\r\nRepublic endlessly debates\r\nthis alarming chain of events,\r\nthe Supreme
Chancellor has\r\nsecretly dispatched two Jedi\r\nKnights, the guardians of\r\npeace and justice in the\r\ngalaxy, to
settle the conflict....","director":"George Lucas","producer":"Rick
McCallum","release_date":"1999-05-19"}
...
]
```

Caso queira usar o [Postman](https://www.postman.com/) para testes, importe o arquivo starwars.postman_collection.json localizado na raiz projeto.

 

## Abordagem
Como se tratava de um volume pequeno de retorno de dados, o consumo se dá somente em uma requisição trazendo todos os filme, em seguida fazendo o tratamento json para objeto e logo em seguida a ordenação de acordo com requisição no parametro "order".

São 6 tipos de lista de visualização neste caso foi bem interessante usar suite de testes.  
