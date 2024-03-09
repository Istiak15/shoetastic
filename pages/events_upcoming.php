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
            <h3>Upcoming One-Off Events</h3>
            <p>Here is a current list of our upcoming one-off events for this year:</p>

            <ul>
                <li>
                    <p><strong>Monday, April 5, 2024</strong></p>
                    <p>Join us for a special presentation on the evolution of iconic shoe designs over the past 50 years.</p>
                </li>

                <li>
                    <p><strong>Saturday, April 20, 2024</strong></p>
                    <p>Explore the world of 4/20 with a unique showcase of trendy and comfortable shoes that complement your laid-back style.</p>
                </li>

                <li>
                    <p><strong>Wednesday, May 1, 2024</strong></p>
                    <p>Immerse yourself in a captivating video presentation featuring various shoe celebrations, demonstrations, and insights into the evolving trends.</p>
                </li>
            </ul>

            <p>Note that all events will be hosted at our Shoetastic store at 7 pm, unless otherwise specified on this page at least 24 hours before the event. Stay tuned for additional details and surprises as each event approaches.</p>
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

