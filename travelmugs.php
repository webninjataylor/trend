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
  <h1>Travel Mugs <span>(Includes fabric &amp; embroidery)</span></h1>
  <div class="itemgroup">
  	<a href="travelmugs.php">
    	<img src="images/travelmug.jpg" />
    	<div class="item">Travel Mugs</div>
    </a>
  </div>
  <div class="itemgroup">
  	<a href="travelmugs.php">
    	<img src="images/travelmug2.jpg" />
    	<div class="item">Travel Mugs</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Travel Mug Options:</span>
        <span class="field">
        <select name="os0">
            <option value="Stainless with Handle">Stainless with Handle	- $27.99</option>
            <option value="Stainless Trim (no handle)">Stainless Trim (no handle)	- $27.99</option>
            <option value="Black Trim (no handle)">Black Trim (no handle)	- $22.99</option>
        </select>
        <input type="hidden" name="option_select0" value="Stainless with Handle" />
        <input type="hidden" name="option_amount0" value="27.99" />
        <input type="hidden" name="option_select1" value="Stainless Trim (no handle)" />
        <input type="hidden" name="option_amount1" value="27.99" />
        <input type="hidden" name="option_select2" value="Black Trim (no handle)" />
        <input type="hidden" name="option_amount2" value="22.99" />
        <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on1" value="Color Request" />Color Request:</span>
        <span class="field"><input type="text" name="os1" value="Enter your color requests, and we will be in touch if we have specific questions." /></span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on2" value="Initial, Monogram, or Name" />Initial, Monogram, or Name:</span>
        <span class="field"><input type="text" name="os2" value="" />
        <span style="color:#ff0000;">Monograms will be in the order they are typed, and are 1) First initial, 2) LAST initial, and 3) Middle initial.</span></span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on3" value="Font" />Font:</span>
        <span class="field">
            <select name="os3">
                <option value="Curlz" selected="selected">Curlz</option>
                <option value="Innerlocking">Innerlocking</option>
                <option value="University">University</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on4" value="Thread Color" />Thread Color:</span>
        <span class="field">
        	<select name="os4" id="threadcolor">
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
            <input type="hidden" name="item_name" value="Travel Mugs" />
            <input type="hidden" name="shipping" value="5.50" />
            <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="6" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/travelmugs.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/travelmugs.php" />
            <input type="hidden" name="return" value="http://trendva.com/travelmugs.php" />
            <input type="submit" name="addtocart" value="Add to Cart" class="submit" />
        </span>
    </div>
  </form>
  <?php include('includes/threadchart.php'); ?>
  <div class="fonts" style="clear:both;">
    <h3 style="margin-bottom: 5px;">Fonts</h3>
    <ul style="margin:0; padding:0; margin-bottom:20px; height:127px;">
      <li style="background:url('images/font-curlz.jpg') no-repeat top left; width:94px; height:127px; float:left; list-style:none; color:#ffffff; padding:3px; margin:0;">Curlz</li>
      <li style="background:url('images/font-innerlocking.jpg') no-repeat top left; width:94px; height:127px; float:left; list-style:none; color:#ffffff; padding:3px; margin:0;">Innerlocking</li>
      <li style="background:url('images/font-university.jpg') no-repeat top left; width:94px; height:127px; float:left; list-style:none; color:#ffffff; padding:3px; margin:0;">University</li>
    </ul>
  </div>
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
</body>
</html>