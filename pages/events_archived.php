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
            <h3>Archived Events</h3>
            <p>Even before our establishment, Shoetastic hosted a couple of memorable events leading up to our formal opening. Here are brief summaries of those two events:</p>

            <ul>
                <li>
                    <strong>Tuesday, December 5, 2023</strong>
                    <ul>
                        <li>We hosted a visitor who claimed to have a rare and iconic shoe from a historical collection, which he planned to auction off at the end of the evening.</li>
                        <li>The evening, however, did not go as planned, and it became an interesting chapter in our journey.</li>
                    </ul>
                </li>

                <li>
                    <strong>Friday, December 29, 2023</strong>
                    <ul>
                        <li>We gathered at our new headquarters-to-be, and then the group repaired to the basement of an acquaintance who claimed to have in his possession the very first shoe ever worn by a famous personality.</li>
                        <li>Not all of those who attended were convinced, making it a unique experience for everyone present.</li>
                    </ul>
                </li>
            </ul>

            <p>Eventually, we will have links on this page to those event details, as well as links to the details of any future events once they have occurred. So you will eventually be able to look through our past events and perhaps let us know if you think any of them should be repeated.</p>
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
