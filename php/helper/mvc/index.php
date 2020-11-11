<?php
    if (isset($_GET["page"])) {
        $file =  __DIR__ . "/controllers/" . $_GET["page"] . "Controller.php";

        if (file_exists($file)) {

            require_once $file;
        } else {
            require_once __DIR__ . "/controllers/loginController.php";
        }

    }
?>