<?php
    session_start();
    unset($_SESSION['eamil']);
    header("Location:index.php");
?>