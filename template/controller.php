<?php
require 'template_engine.php';

$view = new Template();
$view->title = "Error 404";
$view->links = array(
        array(
            'display'=>"List Entries",
            'href'=>"../list",
            'target'=>'_self'
        ),
        array(
            'display'=>"API",
            'href'=>"../api",
            'target'=>'_self'
        ));
$view->body = "Hi, sup";
$view->content = $view->render('content.php');
echo $view->render('main.php');