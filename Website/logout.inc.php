<?php
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