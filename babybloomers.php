<!DOCTYPE html>
<html lang="en">
<head>
<title>trend. - Baby Bloomers</title>


<meta property="og:url" content="http://trendva.com/babybloomers.php" />
<meta property="og:title" content="trend. - Baby Bloomers" />
<meta property="og:description" content="Includes embroidery or embroidery plus matching bows" />
<meta property="og:image" content="http://trendva.com/images/babybloomers.jpg" />


<?php include('includes/meta.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<section id="maincontent" class="clrfix">
  <?php include('includes/menu.php'); ?>
  <h1>Baby Bloomers <span>(Includes embroidery or embroidery plus matching bows)</span></h1>
  <?php include('includes/sharethis.php'); ?>
  <p>Size 1 typically fits a 6 month old	and size 6 typically fits a 2 year old.</p>
  <div class="itemgroup">
  	<a href="babybloomers.php">
    	<img src="images/babybloomers.jpg" />
    	<div class="item">Baby Bloomers</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Baby Bloomer Size:</span>
        <span class="field">
        <select name="os0">
            <option value="Size 1 with Bows">Size 1 with Bows - $22.99</option>
            <option value="Size 2 with Bows">Size 2 with Bows - $22.99</option>
            <option value="Size 3 with Bows">Size 3 with Bows - $22.99</option>
            <option value="Size 4 with Bows">Size 4 with Bows - $22.99</option>
            <option value="Size 5 with Bows">Size 5 with Bows - $22.99</option>
            <option value="Size 6 with Bows">Size 6 with Bows - $22.99</option>
            <option value="Size 1">Size 1 - $17.99</option>
            <option value="Size 2">Size 2 - $17.99</option>
            <option value="Size 3">Size 3 - $17.99</option>
            <option value="Size 4">Size 4 - $17.99</option>
            <option value="Size 5">Size 5 - $17.99</option>
            <option value="Size 6">Size 6 - $17.99</option>
        </select><!-- CAN ONLY HAVE UP TO 7!!! -->
        <input type="hidden" name="option_select0" value="Size 1 with Bows" />
        <input type="hidden" name="option_amount0" value="22.99" />
        <input type="hidden" name="option_select1" value="Size 2 with Bows" />
        <input type="hidden" name="option_amount1" value="22.99" />
        <input type="hidden" name="option_select2" value="Size 3 with Bows" />
        <input type="hidden" name="option_amount2" value="22.99" />
        <input type="hidden" name="option_select3" value="Size 4 with Bows" />
        <input type="hidden" name="option_amount3" value="22.99" />
        <input type="hidden" name="option_select4" value="Size 5 with Bows" />
        <input type="hidden" name="option_amount4" value="22.99" />
        <input type="hidden" name="option_select5" value="Size 6 with Bows" />
        <input type="hidden" name="option_amount5" value="22.99" />
        <input type="hidden" name="option_select6" value="Size 1" />
        <input type="hidden" name="option_amount6" value="17.99" />
        <input type="hidden" name="option_select7" value="Size 2" />
        <input type="hidden" name="option_amount7" value="17.99" />
        <input type="hidden" name="option_select8" value="Size 3" />
        <input type="hidden" name="option_amount8" value="17.99" />
        <input type="hidden" name="option_select9" value="Size 4" />
        <input type="hidden" name="option_amount9" value="17.99" />
        <input type="hidden" name="option_select10" value="Size 5" />
        <input type="hidden" name="option_amount10" value="17.99" />
        <input type="hidden" name="option_select11" value="Size 6" />
        <input type="hidden" name="option_amount11" value="17.99" />
        <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on1" value="Initial, Monogram, or Name" />Initial, Monogram, or Name:</span>
        <span class="field"><input type="text" name="os1" value="" />
        <span style="color:#ff0000;">Monograms will be in the order they are typed, and are 1) First initial, 2) LAST initial, and 3) Middle initial.</span></span>
    </div>
    <?php include('includes/fonts_threads.php'); ?>
    <div class="row">
    	<span class="label"><input type="hidden" name="on2" value="Thread Color" />Thread Color:</span>
        <span class="field">
        	<select name="os2" id="threadcolor">
                <option value="Baby Pink" selected="selected">Baby Pink</option>
                <option value="Pink">Pink</option>
                <option value="Bright Pink">Bright Pink</option>
                <option value="Orchid">Orchid</option>
                <option value="Christmas Red">Christmas Red</option>
                <option value="Dark Orange">Dark Orange</option>
                <option value="Yellow">Yellow</option>
                <option value="Spring Green">Spring Green</option>
                <option value="Olive">Olive</option>
                <option value="Pale Lime">Pale Lime</option>
                <option value="Lime">Lime</option>
                <option value="Green">Green</option>
                <option value="Dark Teal">Dark Teal</option>
                <option value="Baby Blue">Baby Blue</option>
                <option value="Turquoise">Turquoise</option>
                <option value="Navy">Navy</option>
                <option value="Lavender">Lavender</option>
                <option value="Purple">Purple</option>
                <option value="White">White</option>
                <option value="Pale Silver">Pale Silver</option>
                <option value="Gray">Gray</option>
                <option value="Black">Black</option>
                <option value="Gold">Gold</option>
                <option value="Khaki">Khaki</option>
                <option value="Brown">Brown</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label">Quantity:</span>
        <span class="field"><input type="text" name="quantity" value="1" /></span>
    </div>
    <?php include('includes/pp-phone.php'); ?>
    <?php include('includes/pp-shipping.php'); ?>
    <div class="row" id="paypalmeta">
    	<span class="label"></span>
        <span class="field">
        	<input type="hidden" name="business" value="payment@trendva.com" />
            <input type="hidden" name="cmd" value="_cart" />
            <input type="hidden" name="add" value="1" />
            <input type="hidden" name="item_name" value="Baby Bloomer" />
            <input type="hidden" name="shipping" value="5.50" />
            <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="5.3" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/babybloomers.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/babybloomers.php" />
            <input type="hidden" name="return" value="http://trendva.com/babybloomers.php" />
            <button type="submit" class="btn" id="addtocart">Add to Cart</button>
        </span>
    </div>
  </form>
  <?php include('includes/threadchart.php'); ?>
  <?php include('includes/fontchart_threads.php'); ?>
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
</body>
</html>