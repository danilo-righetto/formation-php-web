# Curso de PHP e PDO: trabalhando com bancos de dados

> Faça esse curso de PHP e:

- Aprenda sobre a classe PDO do PHP
- Veja as vantagens em utilizar o PDO para se comunicar com qualquer banco relacional
- Melhore a segurança da sua aplicação PHP
- Organize o seu código com boas práticas
- Descubra como tratar erros no PHP e no PDO
- Veja como é fácil trabalhar com um banco de dados relacional com PHP orientado a objetos e o PDO

## Como verificar onde estão as configurações do PHP

Para saber onde estão as configurações do PHP no seu Sistema Operacional , utilize o comando:

```sh
php --ini
```

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
