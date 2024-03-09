<!-- banner content -->
<div id="logo" class="w3-half">
  <img src="images/logo.png" alt="Shoetastic Logo" style="width: 100%; height:450px;">
</div>

<div class="w3-half w3-right-align" style="color: #f4f2f2; background-color: w3-light-grey;">
  <div class="w3-panel">
    <h4 style="color: black">Welcome!</h4>
    <h6 id="datetime" style="color: black;">
      <?php
      echo "It's ". date("l, F jS") . " .<br>";
      echo "Our time is " . date('g:ia') . " .";
      ?>
    </h6>
    <a href="pages/formLogin.php" class="w3-bar-item w3-button" style='background-color: #00ad9c; color: #fff;"'>Log in</a>
    <p class="quote w3-left-align" style="color: black;" >
      Shoetastic is a footwear brand where our shoes meets style in every step! Explore a diverse collection of trendy and
      comfortable shoes designed to cater to your unique fashion needs. From casual kicks to elegant heels,
      Shoetastic brings you the latest trends, quality craftsmanship, and a delightful shopping experience. Step
      into a world of fashion-forward footwear – because every walk should be a runway walk! </p>

      <p class="quote w3-left-align" style="color: black;">
    <?php
    // Including the get_quote.php file to display the quote
    include(__DIR__."/../scripts/get_quote_from_mongodb.php");
    ?>
</p>
   
  </div>
</div>

<script>
    var request = null; 
    function getCurrentTime()
    {
        request = new XMLHttpRequest();
        var url = "scripts/time.php";
        request.open("GET", url, true);
        request.onreadystatechange = updatePage;
        request.send(null);
    }
    function updatePage()
    {
        if (request.readyState == 4)
        {
            var dateDisplay = document.getElementById("datetime");
            dateDisplay.innerHTML = request.responseText;
        }
    }
    getCurrentTime();
    setInterval('getCurrentTime()', 60000)
</script>






