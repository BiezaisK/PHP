<?php

    // var_dump("view")
    
    require_once __DIR__ . "/../components/userForm.php";

    class RegisterView {

        public function html() {
          $from = new UserForm();
          $from->setBtnText("Save user");
          $from->html();

        }
    }


?>