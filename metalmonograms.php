<!DOCTYPE html>
<html lang="en">
<head>
  <title>trend. - Metal Monograms</title>
  <?php include('includes/meta.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<section id="maincontent" class="clrfix">
  <?php include('includes/menu.php'); ?>
  <h1>Metal Monograms</h1>
  <p style="margin-right:20px;">
    Made in the USA, these metal monograms are one of our favorite products!  Designed for indoor or outdoor use, our monograms come in a powder-coated finish for ease of spray-painting to the color of your choice!  Our 3-letter custom monograms are available in four sizes, and our individual letters are 20&quot; tall; great for front doors, weddings, or over the bed!
  </p>

  <div class="itemgroup">
    <a href="towelwraps.php">
        <img src="images/monogram1.jpg" />
        <div class="item">Metal Monograms</div>
    </a>
  </div>
  <div class="itemgroup">
    <a href="towelwraps.php">
        <img src="images/monogram2.jpg" />
        <div class="item">Metal Letters</div>
    </a>
  </div>

  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
        <span class="label"><input type="hidden" name="on0" value="Style">Style:</span>
        <span class="field">
          <select name="os0">
              <option value="3-Letter Monogram: X-small">3-Letter Monogram - X-small (12&quot; x 12&quot;) - $55.99</option>
              <option value="3-Letter Monogram: Small">3-Letter Monogram - Small (16&quot; x 18&quot;) - $68.99</option>
              <option value="3-Letter Monogram: Medium">3-Letter Monogram - Medium (18&quot; x 20&quot;) - $78.99</option>
              <option value="3-Letter Monogram: Large">3-Letter Monogram - Large (20&quot; x 24&quot;) - $99.99</option>
              <option value="Single Letter">Individual 20&quot; Letter - $48.99</option>
          </select>
          <input type="hidden" name="option_select0" value="3-Letter Monogram: X-small" />
          <input type="hidden" name="option_amount0" value="55.99" />
          <input type="hidden" name="option_select1" value="3-Letter Monogram: Small" />
          <input type="hidden" name="option_amount1" value="68.99" />
          <input type="hidden" name="option_select2" value="3-Letter Monogram: Medium" />
          <input type="hidden" name="option_amount2" value="78.99" />
          <input type="hidden" name="option_select3" value="3-Letter Monogram: Large" />
          <input type="hidden" name="option_amount3" value="99.99" />
          <input type="hidden" name="option_select4" value="Single Letter" />
          <input type="hidden" name="option_amount4" value="48.99" />
          <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row">
        <span class="label"><input type="hidden" name="on2" value="Monogram or Initial" />Monogram or Initial:</span>
        <span class="field">
          <input type="text" name="os2" value="" />
          <span style="color:#ff0000;">Monograms will be in the order they are typed, and are 1) First initial, 2) LAST initial, and 3) Middle initial.</span>
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
            <input type="hidden" name="item_name" value="Metal Monogram/Letter" />
            <input type="hidden" name="shipping" value="11.75" />
            <input type="hidden" name="shipping2" value="11.75" />
            <input type="hidden" name="tax_rate" value="5.3" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/metalmonograms.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/metalmonograms.php" />
            <input type="hidden" name="return" value="http://trendva.com/metalmonograms.php" />
            <input type="submit" name="addtocart" value="Add to Cart" class="submit" />
        </span>
    </div>
  </form>
  <img src="images/mm-singlescript.jpg" class="nopin" alt="Script font">
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
</body>
</html>