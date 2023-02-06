<?php
use App\JsonReader;
use App\Routing;
use App\DigitTask;

require __DIR__ . "/vendor/autoload.php";

$routing = new Routing($_SERVER['REQUEST_URI']);

$digitTask = new DigitTask();
if(!$routing->city) {
    $routing->city = $digitTask->getDefaultCity();
}

$digitTask->setCity($routing->city);

$task = $routing->getTask();
if($digitTask->filename == $task->filename)
    $task->setCity($routing->city);

$content = [
    'phone' => $digitTask->getContent(),
    'default_city' => $routing->city,
    'description' => $task->getTaskDescription(),
    'answer' => $task->getContent()
];

include "templates/head.php";
include "templates/header.php";
include "templates/content.php";
include "templates/footer.php";