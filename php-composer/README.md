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
