<?php
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
        <article class="w3-container w3-border-left w3-border-right w3-border-black w3-light-grey">
            <h3>Our Locations</h3>
            <p>As Shoetastic continues to grow, our vision is to establish a global presence with stores worldwide. We aspire to bring the Shoetastic experience to various locations, providing access to our curated collection of fashionable and comfortable footwear.</p>

            <p>In the future, we plan to provide a comprehensive list of all our store locations on this page. Each location will come with detailed contact information, allowing you to connect with us easily. Additionally, we will include map links for every store, guiding you on how to find us at each location.</p>

            <p>For now, we invite you to visit our current and only location:</p>

            <div>
                <strong>Shoetastic, Inc.</strong><br>
                5651 Oxford Street<br>
                Halifax, NS<br>
                Canada B3H 5XG<br>
                Tel: 902.123.9876
            </div>

            <p>Feel free to drop by and explore our captivating range of stylish shoes. We look forward to welcoming you at Shoetastic!</p>
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
