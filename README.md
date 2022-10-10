# Desafio - Cadastro de Vendas

Aplicação simples, porém completa de Cadastro de Vendas de uma Loja

### Requisitos Minimos

* PHP version 7.2 
* PDO PHP PgSQL
* cURL PHP 
* OpenSSL PHP 
* Mbstring PHP 
* ZipArchive PHP 
* GD PHP 
* SimpleXML PHP 


### Características

* Cadastro de Produtos
* Cadastro de Vendedores
* Cadastro de Vendas
* Relatório de Vendas e Performance do Vendedor

## Instalação

```shell
# Clonando o projeto
$ git clone git@github.com:leosanlima/desafio-cadastro-vendas.git cadastro-vendas
$ cd cadastro-vendas

# Criando arquivo .env 
$ cp .env.example .env

# Instalando pacotes
$ composer install

# Instalando aplicação
$ composer run-dev

```
  A senha gerada para o usuário _admin_ será exibida após o primeiro seeder

```shell
Seeded Backend 

\Backend\Database\Seeds\DatabaseSeeder reported:
 - The following password has been automatically generated for the "admin" account: 2NXdoaEQlNBoIDamJvbIrJ
```

## Configuração

Edite o arquivo .env com as definições de conexão com o Banco de Dados PostgreSQL

```shell
DB_CONNECTION=pgsql
DB_HOST=
DB_PORT=5432
DB_DATABASE=
DB_USERNAME=postgres
DB_PASSWORD=

```

## Executando aplicação

    php artisan serve