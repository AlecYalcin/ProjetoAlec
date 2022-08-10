<?php
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('database.db');
        }
    }
    $db = new MyDB();
    if(!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Hello, World!</h1>

    <script type="text/javascript" src="script.js"></script>
</body>
</html>