<?php
    session_start();
    session_destroy();
    header("Location: final1.php?msg=exit");
?>