<?php

class IndexController  {
    function index(){
        $view = new IndexView();
        echo $view->getIndex();
    }
    function contacts (){
        echo "This is contact Page!";
    }
}