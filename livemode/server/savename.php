<?php

session_start();

$name = $_POST['name'];

$_SESSION['name'] = $name;

header("Location: ../levels/level.php?level=1");

?>