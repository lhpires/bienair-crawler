<?php
require_once "vendor/autoload.php";

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use bienair\src\BuscaCategoria;

$requisicao = new Client();
$BuscaCategoria = new BuscaCategoria();
$domc = new Crawler();

$response = $requisicao->request('GET', 'https://www.bienair.com.br');

$response->getBody();

$filtro = ".cat-home > a";

echo $BuscaCategoria::cathome($response->getBody(),$filtro,$domc);
