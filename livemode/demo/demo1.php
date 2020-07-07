<?php

session_start();

$_path = $_SESSION['session_number'] . ".css";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="<?php echo $_path; ?>">
    <title>Document</title>
</head>
<body>
    
</body>
</html>