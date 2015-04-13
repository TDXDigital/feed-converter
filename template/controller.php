<?php
require_once 'template_engine.php';

$view = new Template();
$view->title = "Welcome";
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
$view->body = "Rendering new Bootstrap Template??";
$view->content = $view->render('content.php');
echo $view->render('tpl/cover.php');