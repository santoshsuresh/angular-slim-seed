<?php

require_once("./vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/','getIndex');
$app->get('/api/names','getNames');


# Functions

function getIndex() {
    echo "Works";
}


function getNames() {
    $result = array(
        array('name'=>'Name 1','city'=>'City'),
        array('name'=>'Name 2','city'=>'City'),
        array('name'=>'Name 3','city'=>'City'),
        array('name'=>'Name 4','city'=>'City'),
        array('name'=>'Name 5','city'=>'City'),
        array('name'=>'Name 6','city'=>'City'),
    );
    echo json_encode($result);
}

$app->run();

?>