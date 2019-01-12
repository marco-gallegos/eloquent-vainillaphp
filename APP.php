<?php
require "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;

//cargar env
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

//whoops
/**
 * 
 $whoops = new \Whoops\Run;
 $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
 $whoops->register();
*/

$capsule = new Capsule;
$capsule->addConnection([
    "driver"    => "mysql",
    "host"      => $_ENV['DB_HOST'],
    "database"  => $_ENV['DB_DATABASE'],
    "username"  => $_ENV['DB_USERNAME'],
    "password"  => $_ENV['DB_PASSWORD']
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

?>