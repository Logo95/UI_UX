<!DOCTYPE html>
<html>
<head>
    <?php
        $db = new SQLite3('items.db');
        $category = $_GET["ref"];
        $result = $db->querySingle("SELECT Name FROM categories WHERE ID={$category}");
    ?>
    <title><?php echo $result ?> - Магазин электроники Bidgital</title>
    <link href="style_products.css" type ="text/css" rel="stylesheet">
</head>
    <body>
        <header>
            <a href="index.php" class="logo">Bitgital</a>
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#" class="highlight">Click here</a></li>
            </ul>
        </header>
        <div class="cat_name">
            <p class="category_text"> <?php echo $result ?> </p>
        </div>
        <div class="main">
            <ul class="products">
            <?php
                $db = new SQLite3('items.db');
                $category = $_GET["ref"];
                $result = $db->query("SELECT * FROM products WHERE Category={$category}");
                while ($row = $result->fetchArray()) { ?>
                    <li class="product-wrapper">
                        <a href="purchase_page.php?id=<?php echo $row['ID'] ?>" class="product">
                            <div class="product-photo">
                                <img src="img/<?php echo $row['ID'] ?>.jpg">
                            </div>
                            <p class="name"><?php echo $row['Name'] ?></p>
                            <p><?php echo nl2br($row['Description']) ?></p>
                            <button class="button"><?php echo "{$row['Price']}₽"?></button>
                        </a>
                    </li>
            <?php } ?>
            </ul>
        </div>
    </body>
</html>