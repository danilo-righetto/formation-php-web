<?php 

namespace Alura\BuscadorDeCursos;

use Psr\Http\Client\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Finder
{
  private $httpClient;
  private $crawler;

  public function __construct(ClientInterface $httpClient, Crawler $crawler)
  {
    $this->httpClient = $httpClient;
    $this->crawler = $crawler;
  }

  public function find(string $url): array {
    $response = $this->httpClient->request('GET', $url);
    $html = $response->getBody();
    $this->crawler->addHtmlContent($html);

    $coursesElement = $this->crawler->filter('span.card-curso__nome');
    $courses = [];

    foreach ($coursesElement as $key => $courseElement) {
      $courses[] = $courseElement->textContent;
    }
    return $courses;
  }
}