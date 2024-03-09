<?php
session_start();
include("../common/header.html");
?>
<body class="body w3-auto">
    <header class="w3-auto">
        <?php
        echo '<div class="w3-boarder w3-boarder-black w3-light-grey">';
        include("../common/banner.php");
        include("../common/menus.html");
        include("../scripts/connectToDatabase.php");
        echo '</div>';
        ?>
        </header>

        <main class="w3-container">
            <article class="w3-container w3-boarder-left w3-boarder-right w3-boarder-black w3-light-grey">
                <?php
                $_SESSION['POST_SAVE']=$_POST;

                include("../scripts/formRegistrationProcess.php");
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
