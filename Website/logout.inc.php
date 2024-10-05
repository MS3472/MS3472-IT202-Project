<?php
//ms3472
//10/04/2024
//IT202-MC
//Phase 1 
//MS3472@njit.edu
if(isset($_SESSION['login'])){
    unset($_SESSION['login']);
    unset($_SESSION['emailAddress']);
    unset($_SESSION['firstName']);
    unset($_SESSION['lastName']);
    unset($_SESSION['pronouns']);
    session_destroy();
}
else {
    header("Location: index.php");
}
?>