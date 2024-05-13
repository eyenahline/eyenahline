<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header>
        <h1>Welcome to The Shop</h1>
        <nav>
            <ul>
                <li><a href="http://localhost/damir/index.php">Home</a></li>
                <li><a href="http://localhost/damir/shop.php">Shop</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li style="float:right"><a href="http://localhost/damir/registration.php">Register</a></li> 
                <li style="float:right"><a href="http://localhost/damir/login.php">Login</a></li> 
            </ul>
        </nav>
    </header>
    
    <section class="hero">
        <h2>Discover Amazing Products</h2>
        <p>Find everything you need from our wide selection of products.</p>
        <a href="http://localhost/damir/shop.php" class="btn">Shop Now</a>
    </section>
    
    <section class="featured-products">
        <h2>Featured Products</h2>
        <section class="products">
                <?php
                    $host = "localhost";
                    $user = "eyenahline";
                    $pass = "asdf1234";
                    $dbnm = "shop";
                    $connect = mysqli_connect($host, $user, $pass, $dbnm);

                    $sel = mysqli_query($connect, "SELECT * FROM items;"); 
                    while($data = mysqli_fetch_array($sel)){
                        echo '<div>';
                        echo '<img src = "'.$data['photo'].'"alt = "'.$data['name'].'">';
                        echo '<h3>'.$data['name'].'</h3>';
                        echo '<button onclick = "addToFavorites('.$data['itemid'].')" class="add-to-favorites">🤍</button>';
                        echo '<button onclick = "saveToCart('.$data['itemid'].')" class="add-to-cart">🛒</button>';
                        echo '</div>';
                    }
                ?>
            </section>
    </section>
    
    <footer>
        <p>&copy; 2024 Online Shop. All rights reserved.</p>
    </footer>
    <script  src="./js/script.js"></script>
</body>
</html>
