<?php
require "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
    "driver" => "mysql",
    "host" =>"localhost",
    "database" => "test",
    "username" => "root",
    "password" => "test"
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

?>