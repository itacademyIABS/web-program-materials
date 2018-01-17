<?php
/**
 * Created by PhpStorm.
 * User: otis
 * Date: 17.01.18
 * Time: 22:29
 */

namespace IABS\MVC\Controller;

use IABS\MVC\Model;
use IABS\MVC\View;

class Main
{
    public function index(){
        $model = new Model\Main();
        $articles = $model->getArticles();
        $view = new View\Main();
        $view->renderArticles($articles);
    }
    public function test(){
        echo "test";
    }
}