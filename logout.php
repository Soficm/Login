<?php

    session_start();

    require_once('App/Auth/Auth.php');

    Auth::logout();
 
    header('Location:index.php');


?>