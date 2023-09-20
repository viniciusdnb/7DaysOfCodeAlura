<?php

include_once "./Controller.php";

$controller = new Controller();

$page = $_GET['page'];

if(method_exists($controller, $page))
{
    $controller->{$page}();
}else{
    echo $controller->do_not_found();
}



var_dump($_GET['page']);


/*$page = ($_GET['page']??'login').'.view';
$content = file_get_contents(VIEW_FOLDER.$page);
echo $content;*/