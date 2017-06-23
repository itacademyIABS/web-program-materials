<?php

/**
 * Created by PhpStorm.
 * User: otis
 * Date: 23.06.17
 * Time: 20:38
 */
class AddPage extends Page
{


    function getContent(){
        if (isset($_POST['auth'])) {
            $this->_auth();
        }
        if (!isset($_SESSION['already_auth'])) {
            return $this->_getAuthForm();
        } else {
            if (isset($_POST["add"])) {
                $this->_add();
            }
            return $this->_getAddForm();
        }
    }

    protected function _add(){
        OneArticle::create($_POST['title'], $_POST["content"]);
        die('success');
    }

    protected function _getAddForm(){
        return "<form method=\"post\">
            <input type=\"text\" placeholder=\"Заголовок\" name=\"title\">
            <textarea name=\"content\">
                Введите текст
            </textarea>
            <input type=\"submit\" name=\"add\">
        </form>";

    }



    protected function _auth(){
        if ($_POST['login'] == 'vova' && $_POST['password'] == '123') {
            $_SESSION['already_auth'] = true;
        } else {
            die('access denied');
        }
    }

    protected function _getAuthForm()
    {
        return "<form method=\"post\">
            <input type=\"text\" placeholder=\"login\" name=\"login\">
            <input type=\"password\" placeholder=\"password\" name=\"password\">
            <input type=\"submit\" name=\"auth\">
        </form>";
    }


}