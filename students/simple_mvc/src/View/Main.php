<?php
/**
 * Created by PhpStorm.
 * User: otis
 * Date: 17.01.18
 * Time: 22:39
 */

namespace IABS\MVC\View;


class Main
{
    public function renderArticles($articles) {
        echo "<ul>";
        foreach ($articles as $article) {
            echo "<li>" . $article . "</li>";
        }
        echo "</ul>";
    }
}