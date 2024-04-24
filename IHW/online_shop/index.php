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
        </ul>
    </header>
        <div class="menu">
            <div class="toggle">
                <ion-icon class="main_icon" name="apps-outline"></ion-icon>
            </div>
            <li style="--i:0">
                <a href="products.php?ref=1"><ion-icon class="cat_icon" name="laptop-outline"></ion-icon></a>
            </li>
            <li style="--i:1">
                <a href="products.php?ref=2"><ion-icon class="cat_icon" name="phone-portrait-outline"></ion-icon></a>
            </li>
            <li style="--i:2">
                <a href="products.php?ref=3"><ion-icon class="cat_icon" name="headset-outline"></ion-icon></a>
            </li>
            <li style="--i:3">
                <a href="products.php?ref=4"><ion-icon class="cat_icon" name="camera-outline"></ion-icon></a>
            </li>
            <li style="--i:4">
                <a href="products.php?ref=5"><ion-icon class="cat_icon" name="game-controller-outline"></ion-icon></a>
            </li>
            <li style="--i:5">
                <a href="products.php?ref=6"><ion-icon class="cat_icon"name="print-outline"></ion-icon></a>
            </li>
            <li style="--i:6">
                <a href="products.php?ref=7"><ion-icon class="cat_icon" name="watch-outline"></ion-icon></a>
            </li>
            <li style="--i:7">
                <a href="products.php?ref=8"><ion-icon class="cat_icon" name="terminal-outline"></ion-icon></a>
            </li>
        </div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    let toggle = document.querySelector('.toggle');
    let menu = document.querySelector('.menu');
    toggle.onclick = function(){
        menu.classList.toggle('active')
    }
</script>
</body>
</html>