<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

$html = $response->getBody();

/* Instanciando o Crawler */
$crawler = new Crawler();
$crawler->addHtmlContent($html);

$coursers = $crawler->filter('span.card-curso__nome');

foreach ($coursers as $key => $course) {
  echo $course->textContent . PHP_EOL;
}