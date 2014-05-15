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
  <h1>Gloves <span>(Spirit Fingerz&#153; - one size fits all)</span></h1>
  <div class="itemgroup">
  	<a href="gloves.php">
    	<img src="images/gloves2.jpg" />
    	<div class="item">Gloves</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Gloves:</span>
        <span class="field">
        <select name="os0">
            <!--<option value="Maroon with Gold">Maroon with Gold - $15.99</option>
            <option value="Hunter Green with Gold">Hunter Green with Gold - $15.99</option>-->
            <option value="Purple with Gold">Purple with Gold - $15.99</option>
            <option value="Maroon with Orange and VT Logo">Maroon with Orange and VT Logo - $19.99</option>
        </select>
        <input type="hidden" name="option_select0" value="Maroon with Gold" />
        <input type="hidden" name="option_amount0" value="15.99" />
        <input type="hidden" name="option_select1" value="Hunter Green with Gold" />
        <input type="hidden" name="option_amount1" value="15.99" />
        <input type="hidden" name="option_select2" value="Purple with Gold" />
        <input type="hidden" name="option_amount2" value="15.99" />
        <input type="hidden" name="option_select3" value="Maroon with Orange and VT Logo" />
        <input type="hidden" name="option_amount3" value="19.99" />
        <input type="hidden" name="option_index" value="0" />
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
            <input type="hidden" name="item_name" value="Gloves" />
            <input type="hidden" name="shipping" value="5.50" />
            <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="5.3" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/gloves.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/gloves.php" />
            <input type="hidden" name="return" value="http://trendva.com/gloves.php" />
            <button type="submit" class="btn" id="addtocart">Add to Cart</button>
        </span>
    </div>
  </form>
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
</body>
</html>