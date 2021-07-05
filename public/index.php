<?php

use Symfony\Component\VarDumper;

// require autoloader
require __DIR__ . "/../vendor/autoload.php";

// instanciate altorouter
$router = new AltoRouter();

if(array_key_exists('BASE_URI', $_SERVER)){
    // set basePath
    $router->setBasePath($_SERVER['BASE_URI']);
}else {
    $_SERVER['BASE_URI'] = '';
}

// map routes
$router->map(
    "GET",
    "/",
    [
        "controller" => "MainController",
        "action" => "home"
    ],
    "home"
);

$router->map(
    "GET",
    "/detail/[i:id]",
    [
        "controller" => "MainController",
        "action" => "detail"
    ],
    "detail"
);

$router->map(
    "GET",
    "/type",
    [
        "controller" => "MainController",
        "action" => "type"
    ],
    "type"
);

$router->map(
    "GET",
    "/type/[i:id]",
    [
        "controller" => "MainController",
        "action" => "pokemonOfType"
    ],
    "pokemon-of-type"
);

// check current url match
$match = $router->match();
$params = [];

if ($match) {
    // get controller and method name
    $controllerToUse = "\Pokedex\Controllers\\" . $match["target"]["controller"];
    $methodToUse = $match["target"]["action"];
    $params = $match["params"];
} else {
    // get pageNotFound 
    $controllerToUse = "\Pokedex\Controllers\MainController";
    $methodToUse = "pageNotFound";
}

// instanciate new controller
$controller = new $controllerToUse();

// call controller method
$controller->$methodToUse($params);

