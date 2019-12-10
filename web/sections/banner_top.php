<?php
    //session_start();
    if(isset($_SESSION['usuario'])){
        $button = '<a class="sign" href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>'.$_SESSION['usuario']->nombre.'</a>';
    }else{
        $button = '<a class="sign" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>';
    }
    print('
    <div class="banner-top w3layouts">
        <div class="container">
            <ul class="agile_top_section">
                    <li>
                        <div class="logo">
                        <a href=""><img src="images/logo.svg" alt="" width="40%">
                    </li>
                    <li>
                        <p>Cambia tu vida y la suya</p>
                    </li>
                    <li>'.$button.
                   '</li>
                </ul>
        </div>
    </div>');
?>