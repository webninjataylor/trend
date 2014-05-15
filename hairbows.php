<!DOCTYPE html>
<html lang="en">
<head>
<title>trend. - Hair Bows</title>


<meta property="og:url" content="http://trendva.com/hairbows.php" />
<meta property="og:title" content="trend. - Hair Bows" />
<meta property="og:description" content="Curly Korker or Hair Bow" />
<meta property="og:image" content="http://trendva.com/images/hairbow2.jpg" />


<?php include('includes/meta.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<section id="maincontent" class="clrfix">
  <?php include('includes/menu.php'); ?>
  <h1>Hair Bows <span>(Curly Korker or Hair Bow)</span></h1>
  <?php include('includes/sharethis.php'); ?>
  <div class="itemgroup">
  	<a href="hairbows.php">
    	<img src="images/hairbow2.jpg" />
    	<div class="item">Hair Bows</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Bow Type:</span>
        <span class="field">
        <select name="os0">
            <option value="Curley Korker">Curly Korker - $11.99</option>
            <option value="Baby Korker">Baby Korker - $11.99</option>
            <option value="Hair Bow">Hair Bow - $11.99</option>
        </select>
        <input type="hidden" name="option_select0" value="Curley Korker" />
        <input type="hidden" name="option_amount0" value="11.99" />
        <input type="hidden" name="option_select1" value="Hair Bow" />
        <input type="hidden" name="option_amount1" value="11.99" />
        <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on1" value="Bow Color" />Bow Color:</span>
        <span class="field">
            <select name="os1">
                <option value="maroon">Maroon</option>
                <option value="yellowgold">Yellow Gold</option>
                <option value="red">Red</option>
                <option value="orange">Orange</option>
                <option value="lightpink">Light Pink</option>
                <option value="aqua">Aqua</option>
                <option value="lightgrey">Light Grey</option>
                <option value="hotpink">Hot Pink</option>
                <option value="brown">Brown</option>
                <option value="charcoalgrey">Charcoal Grey</option>
                <option value="applegreen">Apple Green</option>
                <option value="carolinablue">Carolina Blue</option>
                <option value="brightpurple">Bright Purple</option>
                <option value="teal">Teal</option>
                <option value="navyblue">Navy Blue</option>
                <option value="plumpurple">Plum Purple</option>
                <option value="royalblue">Royal Blue</option>
                <option value="black">Black</option>
                <option value="lavender">Lavender</option>
                <option value="white">White</option>
                <option value="brightyellow">Bright Yellow</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on3" value="Center Accent Color or Additional Korker Color" />Center Accent Color or Additional Korker Color:</span>
        <span class="field">
            <select name="os3">
                <option value="maroon">Maroon</option>
                <option value="yellowgold">Yellow Gold</option>
                <option value="red">Red</option>
                <option value="orange">Orange</option>
                <option value="lightpink">Light Pink</option>
                <option value="aqua">Aqua</option>
                <option value="lightgrey">Light Grey</option>
                <option value="hotpink">Hot Pink</option>
                <option value="brown">Brown</option>
                <option value="charcoalgrey">Charcoal Grey</option>
                <option value="applegreen">Apple Green</option>
                <option value="carolinablue">Carolina Blue</option>
                <option value="brightpurple">Bright Purple</option>
                <option value="teal">Teal</option>
                <option value="navyblue">Navy Blue</option>
                <option value="plumpurple">Plum Purple</option>
                <option value="royalblue">Royal Blue</option>
                <option value="black">Black</option>
                <option value="lavender">Lavender</option>
                <option value="white">White</option>
                <option value="brightyellow">Bright Yellow</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on2" value="Comments" />Comments:</span>
        <span class="field"><input type="text" name="os2" value="Polka Dots, Stripes, etc.???" /></span>
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
            <input type="hidden" name="item_name" value="Hair Bow" />
            <input type="hidden" name="shipping" value="5.50" />
            <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="5.3" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/hairbows.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/hairbows.php" />
            <input type="hidden" name="return" value="http://trendva.com/hairbows.php" />
            <button type="submit" class="btn" id="addtocart">Add to Cart</button>
        </span>
    </div>
  </form>
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
</body>
</html>