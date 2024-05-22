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
        $name = htmlspecialchars($row["Name"]);
        $description = htmlspecialchars($row["Description"]);
        $price = htmlspecialchars($row["Price"]);
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="style_purchase.css" type="text/css" rel="stylesheet">
    <title><?php echo $name ?> - Магазин электроники Bidgital</title>
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
        <section class="product_img">
            <img src="img/<?php echo $id ?>.jpg" alt="<?php echo $name ?> photo">
        </section>
        <section class="description">
            <h1 class="name"><?php echo $name ?></h1>
            <p><?php echo nl2br($description) ?></p>
            <br>
            <div class="group">
                <form action="submit.php?id=<?php echo $id ?>" method="POST">
                    <label for="phoneNumber">Phone Number</label>
                    <input name="phoneNumber" id="phoneNumber" type="text" required aria-required="true">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <br><br>
                    <input type="submit" class="button" value="Отправить" aria-label="Submit phone number">
                </form>
            </div>
        </section>
    </main>
</body>
</html>
