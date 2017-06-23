<?php

/**
 * Created by PhpStorm.
 * User: otis
 * Date: 15.06.17
 * Time: 23:55
 */
class Page
{
    protected function _renderHeader(){
        echo 'header <a href="add.php">add</a>' , '<br>';
    }
    protected function _renderFooter(){
        echo "footer" , '<br>';
        echo "demo login: vova, demo password: 123";
    }
    protected function _renderContent() {
        echo $this->getContent();
    }

    public function render(){
        $this->_renderHeader();
        $this->_renderContent();
        $this->_renderFooter();
    }

}