<?php
require_once "vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\JsonResponseHandler;
use Carbon\Carbon;

//cargar env
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

//whoops
if($_ENV['APP_ENV'] === "debug"){
    $run     = new Whoops\Run;
    $handler = new PrettyPageHandler;
    
    $run->pushHandler($handler);
    
    // Register the handler with PHP, and you're set!
}
$run->register();
//final de whoop


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