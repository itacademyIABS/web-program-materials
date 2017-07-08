<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author otis
 */
class IndexController {
    function contacts(){
        $view = new View();
        if (!$_POST['contact']) {
            echo $view->contactPage();
        } else {
            $model = new Model();
            $model->save($_POST);            
            echo $view->success();
        }
    }
    
    function commands(){
        echo "commands";
    }
}
