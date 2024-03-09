<?php include("../common/header.html"); ?>

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
        <article class="w3-container w3-border-left w3-border-right w3-border-black w3-light-grey">
            <h3>Site Map</h3>
            <table class="w3-table w3-bordered">
                <tr>
                    <th><a href="my_business.php">Home</a></th>
                </tr>
                <tr>
                    <th><a href="pages/estore.php">e-store</a></th>
                    <td>
                        <ul>
                            <li><a href="pages/estore.php">e-store options</a></li>
                            <li><a href="pages/product_catalog.php">Product Catalog</a></li>
                            <li><a href="pages/formRegistration.php">Register</a></li>
                            <li><a href="pages/formLogin.php">Login</a></li>
                            <li><a href="pages/shopping_cart.php">Shopping Cart</a></li>
                            <li><a href="pages/checkout.php">Checkout</a></li>
                            <li><a href="pages/logout.php">Logout</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th><a href="pages/events_recurring.php">Events</a></th>
                    <td>
                        <ul>
                            <li><a href="pages/events_upcoming.php">Upcoming One-Offs</a></li>
                            <li><a href="pages/events_archived.php">Archived</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th><a href="pages/vision.php">About Us</a></th>
                    <td>
                        <ul>
                            <li><a href="pages/locations.php">Our Locations</a></li>
                            <li><a href="pages/formFeedback.php">Feedback Form</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <th><a href="pages/sitemap.php">Site Map</a></th>
                </tr>
            </table>
        </article>
    </main>

    <footer class="w3-container">
        <?php
        echo '<div class="w3-border w3-border-black w3-light-grey">';
        include("../common/footer.html");
        ?>
    </footer>
</body>
</html>














