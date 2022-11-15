<?php
session_start();

//destroy session to logout
if(session_destroy()){
    header("location: ../index.php");
}
?>