<?php
    include_once('controllers/usercontroller.php');
    $controller = new usercontroller();

    $result = $controller->login($_POST['email'], $_POST['password']);

    echo $result;