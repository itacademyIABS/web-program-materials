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
        echo "header" , '<br>';
    }
    protected function _renderFooter(){
        echo "footer" , '<br>';
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