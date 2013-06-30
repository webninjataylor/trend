<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>trend.</title>
<link rel="stylesheet" type="text/css" media="screen" href="assets/main.css" />
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31221579-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<?php include('includes/header.php'); ?>
<section id="maincontent" class="clrfix">
  <?php include('includes/menu.php'); ?>
  <h1>Trays <span>(Acrylic)</span></h1>
  <div class="itemgroup">
  	<a href="trays.php">
    	<img src="images/tray.jpg" />
    	<div class="item">Trays</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Tray Options:</span>
        <span class="field">
        <select name="os0">
            <option value="Monogram Only">Monogram Only - $25.99</option>
            <option value="With Bow">With Bow - $27.99</option>
            <option value="With Corker">With Corker - $32.99</option>
        </select>
        <input type="hidden" name="option_select0" value="Monogram Only" />
        <input type="hidden" name="option_amount0" value="25.99" />
        <input type="hidden" name="option_select1" value="With Bow" />
        <input type="hidden" name="option_amount1" value="27.99" />
        <input type="hidden" name="option_select2" value="With Corker" />
        <input type="hidden" name="option_amount3" value="32.99" />
        <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on1" value="Initial, Monogram, or Name" />Initial, Monogram, or Name:</span>
        <span class="field"><input type="text" name="os1" value="" />
        <span style="color:#ff0000;">Monograms will be in the order they are typed, and are 1) First initial, 2) LAST initial, and 3) Middle initial.</span></span>
    </div>
    <?php include('includes/fonts.php'); ?>
    <div class="row">
    	<span class="label"><input type="hidden" name="on2" value="Text Color" />Text Color:</span>
        <span class="field">
            <select name="os2">
                <option value="maroon">Maroon</option>
                <option value="yellowgold">Yellow Gold</option>
                <option value="red">Red</option>
                <option value="silver">Silver</option>
                <option value="orange">Orange</option>
                <option value="lightpink">Light Pink</option>
                <option value="aqua">Aqua</option>
                <option value="lightgrey">Light Grey</option>
                <option value="hotpink">Hot Pink</option>
                <option value="brown">Brown</option>
                <option value="gold">Gold</option>
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
    	<span class="label"><input type="hidden" name="on3" value="Polka Dots" />Polka Dots:</span>
        <span class="field">
            <select name="os3">
                <option value="None" selected="selected">None</option>
                <option value="maroon">Maroon</option>
                <option value="yellowgold">Yellow Gold</option>
                <option value="red">Red</option>
                <option value="silver">Silver</option>
                <option value="orange">Orange</option>
                <option value="lightpink">Light Pink</option>
                <option value="aqua">Aqua</option>
                <option value="lightgrey">Light Grey</option>
                <option value="hotpink">Hot Pink</option>
                <option value="brown">Brown</option>
                <option value="gold">Gold</option>
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
            <input type="hidden" name="item_name" value="Trays" />
            <input type="hidden" name="shipping" value="5.50" />
            <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="6" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/trays.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/trays.php" />
            <input type="hidden" name="return" value="http://trendva.com/trays.php" />
            <input type="submit" name="addtocart" value="Add to Cart" class="submit" />
        </span>
    </div>
  </form>
 <?php include('includes/vinylchart.php'); ?>
 <?php include('includes/fontchart.php'); ?>
 <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
</body>
</html>