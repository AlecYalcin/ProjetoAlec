<?php
    // PDO para SQLITE3
    $pdo = new PDO('sqlite:database.db');

    //Write SQL
    $statement = $pdo->query("SELECT * FROM person");

    //Run SQL
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    //Show
    var_dump($rows);
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