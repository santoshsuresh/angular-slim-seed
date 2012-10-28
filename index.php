<?php

require_once("./vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/','getIndex');


# Functions

function getIndex() {
    echo "Works";
}

$app->run();

?>