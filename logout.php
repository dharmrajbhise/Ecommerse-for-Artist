
<?php

session_start();
session_destroy();

//delete session header username if exist
if(isset($_SESSION['username'])){
    unset($_SESSION['username']);
    header('Location: login.php');
}





?>