<?php
    session_start();
    unset($_SESSION['admin_id']);
    session_destroy();

    header("Location: pass-login[1].php");
    exit;
?>
