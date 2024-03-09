<?php
/*
estore.php
This is our "front page" of e-store where visitors can simply browse our product line, site, and then proceed to make purchases (or simulate making purchases).
*/

session_start();
include("../common/header.html");
?>

<body class="body w3-auto">
    <header class="w3-auto">
        <?php
        echo '<div class="w3-border w3-border-black w3-light-grey">';
        include("../common/banner.php");
        include("../common/menus.html");
        echo '</div>';
        ?>
    </header>

    <main class="w3-container">
        <div class="w3-container w3-border-left w3-border-right w3-border-black w3-light-grey">
            <article>
                <h3>Welcome to our e-store</h3>
                <p>Thank you for visiting. We carry a large collection of truly unique products. For your shopping and browsing convenience, please choose one of the following links:</p>
                <ul>
                    <li>
                    To browse our exciting product catalog
                        <a title="Not yet active" href="pages/product_catalog.php">click here</a>.
                    </li>
                    <?php
                    if (isset($_SESSION['customer_id'])) {
                        echo '<li>Trying to log in as a different user?<br>You must first <a href="pages/logout.php">click here to log out</a>.</li>';
                    } else {
                        echo '<li>Ready to purchase and already have a username and password?<br>To log in to our e-store and begin shopping <a href="pages/formLogin.php">click here</a></li>';
                        echo '<li>Need to register for our e-store so you can make purchases?<br>To register (you only need to do it once) <a href="pages/formRegistration.php">click here</a>.</li>';
                    }
                    ?>
                </ul>
            </article>
        </div>
    </main>

    <footer class="w3-container">
    <?php
    echo '<div class="w3-border w3-border-black w3-light-grey">';
    include("../common/footer.html");
    ?>
</body>
</html>
