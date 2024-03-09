<!--my_business.php-->
<!-- Link to my JavaScript file -->
<script src="scripts/carousel.js"></script>


<?php include("common/header.html"); ?>

<body class="body w3-auto" onload="carousel()">
    <header class="body w3-auto">
        <div class="w3-border w3-border-black w3-light-grey">
            <?php include("common/banner.php"); ?>
            <?php include("common/menus.html"); ?>
        </div>
    </header>

    <main class="w3-container">
        <div class="w3-container w3-border-left w3-border-right w3-border-black w3-light-grey"
            style="padding-right: 0; padding: 20px;">
            <article class="w3-half">
                <h3 style="color: #009688;">Welcome to Shoetastic!</h3>
                <p style="color: #333;">
                    Shoetastic, founded in 2024 in Halifax, Canada, is a premier destination for footwear enthusiasts
                    seeking a perfect blend of style, comfort, and quality. Our mission at Shoetastic is to redefine the
                    shoe shopping experience by curating a diverse collection of trendy and comfortable footwear that
                    caters to the unique fashion needs of our customers.

                <p>At Shoetastic, we believe that every step should be a statement, and our carefully selected range of
                    shoes reflects the latest trends and superior craftsmanship. From casual kicks that effortlessly
                    complement your everyday style to elegant heels that add a touch of sophistication to special
                    occasions, Shoetastic brings you a delightful array of choices.</p>

                Our commitment goes beyond providing fashionable footwear – we strive to create a welcoming space
                where customers can explore, discover, and express their individuality through their shoe choices.
                With a focus on quality and customer satisfaction, Shoetastic aims to be your go-to destination for
                fashion-forward footwear in Halifax and beyond.

                <p>Step into the world of Shoetastic, where every walk becomes a runway walk, and where your journey is
                    as important as your destination. Welcome to the Shoetastic experience – because your style deserves
                    the perfect pair!</p>
                </p>
            </article>



            <?php
            include("resources/images_and_labels.html");
            ?>
        </div>
    

    <?php include("common/footer.html"); ?>


</body>
</main>

</html>