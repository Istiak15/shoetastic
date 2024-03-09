<?php
// logout.php
// Handle the user interaction for the Logout process. An included script will perform any necessary database cleanup.

session_start();

$loggedInAtStartOfLogout = isset($_SESSION['customer_id']) ? true : false;

if ($loggedInAtStartOfLogout) {
    session_unset();
    session_destroy();
}

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
    <div class="w3-container w3-border-left w3-border-right
            w3-border-black w3-light-grey">
        <article>
            <h4>Logout</h4>
            <?php
            if ($loggedInAtStartOfLogout) {
                echo '<p>Thank you for visiting our e-store.<br>You have successfully logged out.</p>';
                echo '<p>If you wish to log back in, <a href="pages/formLogin.php">click here</a>.</p>';
                echo '<p>To browse our product catalog, <a title="Not yet active" href="pages/sorry.php">click here</a>.</p>';
            } else {
                echo '<p>Thank you for visiting Amazing Stuff. You have not yet logged in.</p>';
                echo '<p>If you do wish to log in, <a href="pages/formLogin.php">click here</a>.</p>';
                echo '<p>Or you can browse our product catalog without logging in by <a href="pages/product_catalog.php">clicking here</a>.</p>';
            }
            ?>
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