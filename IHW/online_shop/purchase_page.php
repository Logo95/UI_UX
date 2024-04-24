<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $db = new SQLite3('items.db');
        $id = $_GET["id"];
        $result = $db->query("SELECT * FROM products WHERE ID={$id}");
        $row = $result->fetchArray();
        if (!$row) {
            echo "Товар не найден";
            exit;
        }
        $name = $row["Name"];
        $description = $row["Description"];
        $price = $row["Price"];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style_purchase.css" type ="text/css" rel="stylesheet">
    <title><?php echo $name ?> - Магазин электроники Bidgital</title>
</head>
<body>
    <header>
        <a href="index.php" class="logo">Bitgital</a>
        <ul>
            <li><a href="#">About</a> </li>
            <li><a href="#">Contacts</a> </li>
            <li><a href="#" class="highlight">Click here</a> </li>
        </ul>
    </header>
    <div class="product_img">
        <img src="img/<?php echo $id ?>.jpg">
    </div>
    <div class="description">
        <p class="name"><?php echo $name ?></p>
        <p><?php echo nl2br($description) ?></p>
        <br>
        <div class="group">     
        <form action="submit.php?<?php echo "id={$id}" ?>" method="POST">
            <input name="phoneNumber" type="text" required>
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Phone Number</label>
            <br><br>
            <input type="submit" class="button" value="Отправить">
        </form> 
        </div>
    </div>
</body>

</html>