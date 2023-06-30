# Curso de PHP na Web: conhecendo o padrão MVC

> Faça esse curso de [PHP](https://cursos.alura.com.br/course/php-web-conhecendo-padrao-mvc) e:

- Aprenda a usar o PHP na web
- Saiba como gerar HTML usando PHP
- Filtre e valide dados de formulários com PHP
- Aprenda a usar a orientação a objetos para organizar um projeto
- Entenda o padrão Model-View-Controller

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
