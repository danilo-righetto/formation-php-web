# Curso de PHP Composer: Dependências, Autoload e Publicação

> Faça esse curso de PHP e:

- Saiba como gerenciar dependências
- Entenda o Autoload de classes e funções
- Integre ferramentas como PHPUnit
- Automatize tarefas rotineiras com scripts
- Publique e versione o seu pacote

## Instalando o Composer

> Antes de realizar a instalação do **Composer**, certifique-se que o PHP está devidamente instalado no seu computador/servidor!

Instale o [Composer](https://getcomposer.org/download/) utilizando o comando abaixo para linha de comando:

    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    php composer-setup.php
    php -r "unlink('composer-setup.php');"

Para o [windows](https://getcomposer.org/download/) existe um instalador especifico.

Para verificar qual é a versão do **Composer** que foi instalado, utilize esse comando:

```sh
composer --version
```

E para iniciar um projeto utilizando o **Composer**, utilize o comando:

```sh
composer init
```

## Instalando as dependências do Composer em Produção

Para instalar as dependências do Composer em Produção utilize o comando:

```sh
composer install --no-dev
```

## Verificando a versão do PHPUnit

Para checar a versão do PHPUnit no seu projeto, utilize o comando:

```sh
vendor\bin\phpunit --version
```

## Executando os testes do projeto

Para executar os testes do projeto via linha de comando, utilize o comando abaixo:

```sh
vendor\bin\phpunit tests\TestBuscadorDeCursos.php
```

## Executando o PHP Code Snifer

Para executar o PHPCodeSifer no código, e verificar se todos os padrões estão sendo atendidos execute o seguinte comando:

```sh
vendor\bin\phpcs --standard=PSR12 src/Finder.php
```

## Executando o Phan no código

O Phan é uma ferramenta que verifica possíveis erros no código e ajuda o desenvolvedor a se precaver se determinadas linhas precisam de estruturas de tratamento de erros, ou refatorações para que o código opere da melhor maneira possível.

Para isso após a instalação, é possível executar o Phan com o seguinte comando:

```sh
vendor\bin\phan --allow-polyfill-parser src\Finder.php
```
