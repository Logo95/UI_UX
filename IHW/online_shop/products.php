<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $db = new SQLite3('items.db');
        $category = $_GET["ref"];
        $result = $db->querySingle("SELECT Name FROM categories WHERE ID={$category}");
    ?>
    <title><?php echo htmlspecialchars($result) ?> - Магазин электроники Bidgital</title>
    <link href="style_products.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <a href="index.php" class="logo" aria-label="Bitgital Home">Bitgital</a>
        <nav>
            <ul>
                <li><a href="#" aria-label="About Us">About</a></li>
                <li><a href="#" aria-label="Contact Us">Contacts</a></li>
                <li><a href="#" class="highlight" aria-label="Special Offer">Click here</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="cat_name">
            <h1 class="category_text"><?php echo htmlspecialchars($result) ?></h1>
        </section>
        <section class="main">
            <ul class="products" role="list">
            <?php
                $category = $_GET["ref"];
                $result = $db->query("SELECT * FROM products WHERE Category={$category}");
                while ($row = $result->fetchArray()) { ?>
                    <li class="product-wrapper">
                        <a href="purchase_page.php?id=<?php echo $row['ID'] ?>" class="product">
                            <div class="product-photo">
                                <img src="img/<?php echo $row['ID'] ?>.jpg" alt="<?php echo htmlspecialchars($row['Name']) ?> photo">
                            </div>
                            <p class="name"><?php echo htmlspecialchars($row['Name']) ?></p>
                            <p><?php echo nl2br(htmlspecialchars($row['Description'])) ?></p>
                            <button class="button" aria-label="Buy <?php echo htmlspecialchars($row['Name']) ?> for <?php echo $row['Price'] ?>₽">
                                <?php echo "{$row['Price']}₽"?>
                            </button>
                        </a>
                    </li>
            <?php } ?>
            </ul>
        </section>
    </main>
</body>
</html>
