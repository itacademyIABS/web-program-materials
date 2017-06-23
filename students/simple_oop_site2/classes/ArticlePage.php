<?php

/**
 * Created by PhpStorm.
 * User: otis
 * Date: 16.06.17
 * Time: 0:04
 */
class ArticlePage extends Page
{
    public function getContent(){
        $article = new OneArticle($_GET['file']);
        $this->_renderH1($article->title);
        $this->_renderArticle($article->content);
    }

    function _renderH1($text) {
        echo "<h1>", $text, "</h1>";
    }

    function _renderArticle($text) {
        echo "<article>", $text, "</article>";
    }
}