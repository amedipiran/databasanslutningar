<?php


//Aktivera felrapportering
error_reporting(-1);
ini_set("display_errors", 1);

spl_autoload_register(function ($class_name) {
    include  $class_name . '.class.php'; 
    //sökväg till mappen för dina klasser
});


//Definera databaser
define("DBHOST", "localhost");
define("DBUSER", "administrator");
define("DBPASS", "password");
define("DBDATABASE", "tododb");

