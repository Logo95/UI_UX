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
            </ul>
        </nav>
    </header>
    <div class="menu" role="navigation" aria-label="Main Categories">
        <button class="toggle" aria-expanded="false" aria-controls="menu-list">
            <ion-icon class="main_icon" name="apps-outline" aria-hidden="true"></ion-icon>
            <span class="sr-only">Toggle Menu</span>
        </button>
        <ul id="menu-list">
            <li style="--i:0">
                <a href="products.php?ref=1" aria-label="Laptops">
                    <ion-icon class="cat_icon" name="laptop-outline" aria-hidden="true"></ion-icon>
                    <span class="sr-only">Laptops</span>
                </a>
            </li>
            <li style="--i:1">
                <a href="products.php?ref=2" aria-label="Phones">
                    <ion-icon class="cat_icon" name="phone-portrait-outline" aria-hidden="true"></ion-icon>
                    <span class="sr-only">Phones</span>
                </a>
            </li>
            <li style="--i:2">
                <a href="products.php?ref=3" aria-label="Headsets">
                    <ion-icon class="cat_icon" name="headset-outline" aria-hidden="true"></ion-icon>
                    <span class="sr-only">Headsets</span>
                </a>
            </li>
            <li style="--i:3">
                <a href="products.php?ref=4" aria-label="Cameras">
                    <ion-icon class="cat_icon" name="camera-outline" aria-hidden="true"></ion-icon>
                    <span class="sr-only">Cameras</span>
                </a>
            </li>
            <li style="--i:4">
                <a href="products.php?ref=5" aria-label="Game Controllers">
                    <ion-icon class="cat_icon" name="game-controller-outline" aria-hidden="true"></ion-icon>
                    <span class="sr-only">Game Controllers</span>
                </a>
            </li>
            <li style="--i:5">
                <a href="products.php?ref=6" aria-label="Printers">
                    <ion-icon class="cat_icon" name="print-outline" aria-hidden="true"></ion-icon>
                    <span class="sr-only">Printers</span>
                </a>
            </li>
            <li style="--i:6">
                <a href="products.php?ref=7" aria-label="Watches">
                    <ion-icon class="cat_icon" name="watch-outline" aria-hidden="true"></ion-icon>
                    <span class="sr-only">Watches</span>
                </a>
            </li>
            <li style="--i:7">
                <a href="products.php?ref=8" aria-label="Terminals">
                    <ion-icon class="cat_icon" name="terminal-outline" aria-hidden="true"></ion-icon>
                    <span class="sr-only">Terminals</span>
                </a>
            </li>
        </ul>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let toggle = document.querySelector('.toggle');
        let menu = document.querySelector('.menu');
        let menuList = document.getElementById('menu-list');

        toggle.onclick = function() {
            let expanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', !expanded);
            menu.classList.toggle('active');
        }
    </script>
</body>
</html>
