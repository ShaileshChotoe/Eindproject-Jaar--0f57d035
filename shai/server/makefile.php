<?php
include '../server/DB.class.php';

$level = $_POST['level'];
$user_input = $_POST['html'];

$db = new DB('localhost', 'bitgame', 'root', '');

$levelData = $db->connect()->getLevelData($level);

$template = $levelData[0]->template;

$myfile = fopen("../demo/demo1.html", "w") or die("Unable to open file!");
$template = str_replace("</body>", $user_input . "</body>", $template);
fwrite($myfile, $template);
fclose($myfile);

header("Location: ../levels/level.php?level=$level");

?>