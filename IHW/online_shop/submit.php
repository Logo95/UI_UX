<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style_cat.css" type ="text/css" rel="stylesheet">
    <title>Магазин электроники Bidgital</title>
</head>
<body>
    <header>
        <a href="index.php" class="logo">Bitgital</a>
        <ul>
            <li><a href="#">About</a> </li>
            <li><a href="#">Contacts</a> </li>
            <li><a href="prikol.php" class="highlight">Click here</a> </li>
        </ul>
    </header>
    <div class="thanksForThePuchase">
        <p>Спасибо за покупку, мы перезвоним вам!</p>
    </div>
</body>
</html>

<?php
    $phoneNumber = $_POST["phoneNumber"];
    $productID = $_GET["id"];
    $orderDB = new SQLite3('orders.db');
    $insertion = $orderDB->exec("INSERT INTO orders (productID, phoneNumber) VALUES ({$productID}, {$phoneNumber})");
?>
