<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style_cat.css" type="text/css" rel="stylesheet">
    <title>Магазин электроники Bidgital</title>
</head>
<body>
    <header>
        <a href="index.php" class="logo" aria-label="Bitgital Home">Bitgital</a>
        <nav>
            <ul>
                <li><a href="#" aria-label="About Us">About</a></li>
                <li><a href="#" aria-label="Contact Us">Contacts</a></li>
                <li><a href="prikol.php" class="highlight" aria-label="Special Offer">Click here</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="thanksForThePuchase">
            <p>Спасибо за покупку, мы перезвоним вам!</p>
        </section>
    </main>
</body>
</html>

<?php
    $phoneNumber = htmlspecialchars($_POST["phoneNumber"]);
    $productID = htmlspecialchars($_GET["id"]);
    $orderDB = new SQLite3('orders.db');
    $stmt = $orderDB->prepare('INSERT INTO orders (productID, phoneNumber) VALUES (:productID, :phoneNumber)');
    $stmt->bindValue(':productID', $productID, SQLITE3_INTEGER);
    $stmt->bindValue(':phoneNumber', $phoneNumber, SQLITE3_TEXT);
    $stmt->execute();
?>
