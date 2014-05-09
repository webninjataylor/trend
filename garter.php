<!DOCTYPE html>
<html lang="en">
<head>
  <title>trend. - Garters</title>
  <?php include('includes/meta.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<section id="maincontent" class="clrfix">
  <?php include('includes/menu.php'); ?>
  <h1>Bridal Blue Wedding Collection GlitzyGoGarter&#153;</h1>
  <p style="margin-right:20px;">Beautiful, beaded wedding garter securely and conveniently holds all of your wedding-day necessities! <a href="https://www.youtube.com/watch?v=DgwQig0qNTQ" target="_blank" style="font-weight:bold;">Watch Video</a></p>

  <div class="itemgroup">
    <a href="towelwraps.php">
        <img src="images/garter1.jpg" />
        <div class="item">Bridal Blue<br /> Wedding Collection GlitzyGoGarter&#153;</div>
    </a>
  </div>
  <img src="images/garter2.jpg" width="150px" style="float:left;" />

  
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Size:</span>
        <span class="field">
          <select name="os0">
              <option value="Medium">Medium (fits sizes 8-12) - $54.99</option>
              <option value="Small">Small (fits sizes 0-6) - $54.99</option>
              <option value="Large">Large (fits sizes 14-18) - $54.99</option>
          </select>
          <input type="hidden" name="option_select0" value="Medium" />
          <input type="hidden" name="option_amount0" value="54.99" />
          <input type="hidden" name="option_select1" value="Small" />
          <input type="hidden" name="option_amount1" value="54.99" />
          <input type="hidden" name="option_select2" value="Large" />
          <input type="hidden" name="option_amount2" value="54.99" />
          <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row">
      <span class="label">Quantity:</span>
      <span class="field">
        <input type="text" name="quantity" value="1" />
      </span>
    </div>
    <?php include('includes/pp-phone.php'); ?>
    <?php include('includes/pp-shipping.php'); ?>
    <div class="row" id="paypalmeta">
    	<span class="label"></span>
        <span class="field">
        		<input type="hidden" name="business" value="payment@trendva.com" />
            <input type="hidden" name="cmd" value="_cart" />
            <input type="hidden" name="add" value="1" />
            <input type="hidden" name="item_name" value="Garter" />
            <input type="hidden" name="shipping" value="5.50" />
            <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="5.3" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/garter.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/garter.php" />
            <input type="hidden" name="return" value="http://trendva.com/garter.php" />
            <input type="submit" name="addtocart" value="Add to Cart" class="submit" />
        </span>
    </div>
  </form>
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
</body>
</html>