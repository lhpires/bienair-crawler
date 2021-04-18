<?php

namespace bienair\src;

use Symfony\Component\DomCrawler\Crawler;

class BuscaCategoria
{
    /**
     * Faz a busca de categorias no site Bienair
     */
    static function cathome(string $html, string $filtro, Crawler $domc): string
    {

        $arrlinks = array();
        $domc->addHtmlContent($html);

        $values = $domc->filter($filtro);

        foreach($values->links() as $link){

            array_push($arrlinks, $link->getUri());

        }

        $retorno = "<h1>Categorias da Loja Bienair :) clique e veja</h1>";
        foreach($values as $key => $value){

            $retorno .= "<h3><a target='_blank' href='{$arrlinks["$key"]}'>$value->textContent</a><h3>";

        }

        return $retorno;

    }
}
