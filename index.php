<?php
require_once("APP.php");

/*
require_once("models/Usuario.php");
require_once("models/Task.php");
*/

//$usuarios = Usuario::all();

$tasks = Task::all();

$newTask = new Task;

$newTask->nombre = "ok";

$newTask->save();

dump($tasks);
/*
krumo($tasks);
krumo($usuarios);
*/
?>