<?php

session_start();
$name = $_POST['name'];

$_SESSION['name'] = $name;


//BUGFIX added
$_SESSION['levels'] = array();
$_SESSION['session_number'] = rand(100,647);

//create file thml
$myfile = fopen( "../userfiles/" . $_SESSION['session_number'] . ".php", "w+");
//lees demo content
$demo = file_get_contents('../demo/demo1.php');
fwrite($myfile,$demo);
fclose($myfile);

$level = array
(
    'standard' => $demo
);

array_push($_SESSION['levels'], $level);


//create file thml
$css = fopen( "../userfiles/" . $_SESSION['session_number'] . ".css", "w+");
//lees demo content
$cssdemo = file_get_contents('../demo/style.css');
fwrite($css,$cssdemo);
fclose($css);


// echo $_SESSION['session_number'];

//echo htmlentities($_SESSION['levels'][0]['standard']);



header("Location: ../levels/level.php?level=1");

?> 