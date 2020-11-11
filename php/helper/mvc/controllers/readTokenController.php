<?php
require_once __DIR__ . "/../../database-wrapper.php";
    $token = $_GET['token'];

    DB::run("SELECT * FROM token = '$token'")->fetch_assoc();

    if ($tokenExists) {
        echo "You can access site";
    } else {
        Header("Location: /php/mvc/?page=list");
    }
 

?>