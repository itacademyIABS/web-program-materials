<?php

class GoodController  {
    function add (){
        $data = $_POST['good'];
        $model = new GoodModel();
        $model->save();
        echo "Data saved!";
    }
}