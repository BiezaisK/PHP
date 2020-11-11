
<?php 
    require_once __DIR__ . "/../models/listModels.php";

    if (isset($_GET["product_id"])) {
        $model = new listModel();
        $model->deleteById($_GET["product_id"]);
    }

    Header("Location: /php/mvc/?page=list");
?>