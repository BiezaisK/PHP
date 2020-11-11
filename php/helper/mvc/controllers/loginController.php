<?php
    require_once __DIR__ . "/../components/userForm.php";
    require_once __DIR__ . "/../../database-wrapper.php";

    if(!empty($_POST["email"])) {
        $email = $_POST["email"];

        $sql = "SELECT * FROM users WHERE email = '$email' ";

        $response = DB::run($sql)->fetch_assoc();

        if ($response) {
            if (!empty($_POST["password"])) {
                $salt = "dfdsfsffdsf";
                $password = $_POST["password"];
                $password = $password . $salt;
                
                $isValidPassword = password_verify(
                    $_POST["password"], 
                    $response["password"]);


                if ($isValidPassword) {
                    session_start();
                    $_SESSION["id"] = $response["email"];
                    Header ("Location: / php/mvc/?page=list");
                } else {
                    echo "Invalid password";
                }
            } else {
                echo "Password not set";
            }

        } else {
            echo "User with email: '$email' does not exist";
        }
    }

          $from = new UserForm();
          $from->setBtnText("Login");
          $from->html();
?>