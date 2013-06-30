<!DOCTYPE html>
<html lang="en">
<head>
  <title>trend. - Hokie Bird Hooded Towel</title>
  <?php include('includes/meta.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<section id="maincontent" class="clrfix">
  <h1>Hokie Bird Hooded Towel</h1>
  <?php include('includes/menu.php'); ?>
  <p style="margin-right:20px;">Great for baby shower gifts, children, and as a novelty gift for adults or students leaving for college!  This product is made with a full sized towel and we are happy to monogram it if you'd like!  The hokie hooded towel was even designed by a Virginia Tech Alumni family!!</p>

  <p>Towel size (not including hood) is 59&quot; x 29&quot;</p>

  <img src="images/hokie-towel-folded.jpg" width="150px" />
  <img src="images/hokie-towel-on-model.jpg" width="150px" />
  <img src="images/hokie-towel-back.jpg" width="150px" />
  <img src="images/hokie-towel-tail-closeup.jpg" width="150px" />
  <img src="images/hokie-towel-head-closeup.jpg" width="150px" />

  <div class="itemgroup">
  	<a href="towelwraps.php">
        <img src="images/hokie-towel.jpg" />
        <div class="item">Hokie Bird Hooded Towel</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Wrap Size:</span>
        <span class="field">
          <select name="os0" id="wrapsize">
              <option value="One Size" class="adult">One Size - $45.99</option>
          </select>
          <input type="hidden" name="option_select0" value="One Size" />
          <input type="hidden" name="option_amount0" value="45.99" />
          <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row monogram">
      <span class="label"><input type="hidden" name="on3" value="Initial, Monogram, or Name" />Initial(s), Monogram, or Name:</span>
      <span class="field"><input type="text" name="os3" value="" />
        <span style="color:#ff0000;">Monograms will be in the order they are typed, and are 1) First initial, 2) LAST initial, and 3) Middle initial.</span></span>
    </div>
    <div class="row monogram">
      <span class="label"><input type="hidden" name="on4" value="Font" />Font:</span>
        <span class="field">
            <select name="os4">
                <option value="Curlz" selected="selected">Curlz</option>
                <option value="Innerlocking">Innerlocking</option>
                <option value="University">University</option>
            </select>
        </span>
    </div>
    <div class="row monogram">
    	<span class="label"><input type="hidden" name="on2" value="Thread Color" />Thread Color:</span>
      <span class="field">
				<select name="os2">
          <option value="Maroon" selected="selected">Maroon</option>
          <option value="White">White</option>
      </select>
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
            <input type="hidden" name="item_name" value="Towel Wrap" />
            <input type="hidden" name="shipping" value="5.50" />
            <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="6" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/towelwraps.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/towelwraps.php" />
            <input type="hidden" name="return" value="http://trendva.com/towelwraps.php" />
            <input type="submit" name="addtocart" value="Add to Cart" class="submit" />
        </span>
    </div>
  </form>
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
</body>
</html>