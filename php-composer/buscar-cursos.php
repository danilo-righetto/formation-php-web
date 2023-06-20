<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Alura\BuscadorDeCursos\Finder;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br']);
$crawler = new Crawler();

$searchEngine = new Finder($client, $crawler);
$coursers = $searchEngine->find('/cursos-online-programacao/php');

foreach ($coursers as $key => $course) {
  echo $course . PHP_EOL;
}