<?php

function ShowError(){
    
}


$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$elements = explode('/', $path);                // Split path on slashes
if(count($elements) == 0)                       // No path elements means home
{
    header('HTTP/1.1 500 Internal Server Error');
        ShowError(500);
}
else switch(array_shift($elements))             // Pop off first item and switch
{
    case 'fetch':
        ShowPicture($elements); // passes rest of parameters to internal function
        break;
    case 'gui':
        //echo "GUI not supported, please use API";
        include "template/controller.php";
        break;
    case 'api':
        echo "complete";
        break;
    default:
        header('HTTP/1.1 404 Not Found');
        ShowError(404);
}