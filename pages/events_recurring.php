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
            <h3>Recurring Events</h3>
            <p>Explore our upcoming shoe showcase events where we unveil the latest and most stylish footwear trends. Join us for these exclusive events and get a sneak peek into the world of fashion-forward footwear. Here's what you can expect:</p>

            <ul>
                <li>
                    <strong>Monday, April 1, 2024</strong>
                    <ul>
                        <li>Talks on the inspiration behind our unique shoe designs.</li>
                        <li>Insights into the materials and craftsmanship that make our shoes stand out.</li>
                        <li>Live demonstrations of how to pair different shoe styles with various outfits.</li>
                        <li>Exclusive previews of upcoming shoe collections.</li>
                    </ul>
                </li>
            </ul>

            <p>Whether you're a fashion enthusiast or just love comfortable and trendy shoes, our recurring events are the perfect opportunity to stay connected with the latest in the world of footwear. Step into style with Shoetastic!</p>
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

