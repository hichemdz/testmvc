<?php


function  path(array $file, $sp = SP)
{

    return implode(SP, $file);
}


function dis($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function view($name, $data = '')
{


    if (file_exists(path([VIEW, "$name.php"]))) {

        include_once path([VIEW, "$name.php"]);
        
    } else {
        die('this view not found');
    }
}


function route($name, $parame = [])
{
    if (isset($_SERVER['PATH_INFO'])) {
        $route = rtrim($_SERVER['REQUEST_URI'], $_SERVER['PATH_INFO']);
    } else {
        $route = $_SERVER['REQUEST_URI'];
    }

    return path([$route , $name]);
}
