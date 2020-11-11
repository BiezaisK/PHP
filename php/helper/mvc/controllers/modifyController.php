<?php 
    require_once __DIR__ . "/../models/listModels.php";
    $model = new listModel();
    if (!empty($_POST["id"])) {
        // Update
        $model->updateById(
            $_POST["id"],
            $_POST["name"],
            $_POST["price"],
        );
    } else {
        // Insert
        $model->insertNew(
            $_POST["name"],
            $_POST["price"],
        );
    }

    Header("Location: /php/mvc/?page=list");
?>