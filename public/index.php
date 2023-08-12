<?php

// Mise en place de l'autoloader
require_once __DIR__ . '/../vendor/autoload.php';


$router = new AltoRouter();

// récuperation de l'url de base jusqu'au dossier public
$router->setBasePath($_SERVER['BASE_URI']);

//Mise en place du mappage

$router->map('GET','/',[
    'action' => 'home',
    'controller' => 'app\controllers\MainController'
], 'home');

$router->map('GET', '/pokemon/[i:id]',[
    'action' => 'pokemon',
    'controller' => 'app\controllers\PokemonController'
], 'pokemon');

$router->map('GET','/types',[
    'action' => 'types',
    'controller' => 'app\controllers\MainController'
], 'types');

$router->map('GET','/type/[i:id]',[
    'action' => 'type',
    'controller' => 'app\controllers\MainController'
], 'type');

$match = $router->match();
// dump($match);
if($match){

    $controllerName = $match['target']['controller'];
    $methodName = $match['target']['action'];


    // DISPATCHER

    $controller = new $controllerName();
    $controller -> $methodName($match['params']);

} else{

    $errorController = new app\controllers\ErrorController();
    $errorController -> error404();
}