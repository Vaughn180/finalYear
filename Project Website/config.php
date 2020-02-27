<?php
define('USER', 'root');
define('PASSWORD', 'co600project');
define('HOST', '127.0.0.1:3306');
define('DATABASE', 'walkingzebra');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>