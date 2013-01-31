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
  <h1>Market Totes with Collapsible Aluminum Frame <span>(Includes ribbon &amp; embroidery)</span></h1>
  <div class="itemgroup">
  	<a href="totes.php">
    	<img src="images/markettotes3.jpg" />
    	<div class="item">Market Totes</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Tote Size:</span>
        <span class="field">
        <select name="os0" id="totesize">
            <option value="Large" id="largetote">Large (18"L x 11.5"W x 9"H) - $45.99</option>
            <option value="Mini" id="minitote">Mini (12"L x 9"W x 7"H) - $35.99</option>
        </select>
        <input type="hidden" name="option_select0" value="Large" />
        <input type="hidden" name="option_amount0" value="45.99" />
        <input type="hidden" name="option_select1" value="Mini" />
        <input type="hidden" name="option_amount1" value="35.99" />
        <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on1" value="Tote Color" />Tote Color:</span>
        <span class="field">
            <select name="os1" id="totecolors">
                <option value="Loading" selected="selected">Loading</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on3" value="Initial, Monogram, or Name" />Initial, Monogram, or Name:</span>
        <span class="field"><input type="text" name="os3" value="" />
        <span style="color:#ff0000;">Monograms will be in the order they are typed, and are 1) First initial, 2) LAST initial, and 3) Middle initial.</span></span>
    </div>
    <?php include('includes/fonts.php'); ?>
    <div class="row">
    	<span class="label"><input type="hidden" name="on2" value="Thread Color" />Thread Color:</span>
      <span class="field">
				<select name="os2">
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
          <input type="hidden" name="item_name" value="Market Tote" />
          <input type="hidden" name="shipping" value="5.50" />
          <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="5" />
            <input type="hidden" name="currency_code" value="USD" />
          <input type="hidden" name="shopping_url" value="http://trendva.com/totes.php" />
          <input type="hidden" name="cancel_return" value="http://trendva.com/totes.php" />
          <input type="hidden" name="return" value="http://trendva.com/totes.php" />
          <input type="submit" name="addtocart" value="Add to Cart" class="submit" />
        </span>
    </div>
  </form>
  <?php include('includes/totechart.php'); ?>
  <?php include('includes/threadchart.php'); ?>
  <?php include('includes/fontchart.php'); ?>
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
<script>
	var largetotes = [	'<option value="Hot Pink" selected="selected">Hot Pink</option>',
											'<option value="Red">Red</option>',
											'<option value="Orange">Orange</option>',
											'<option value="Lime">Lime</option>',
											'<option value="Lime Floral">Lime Floral</option>',
											'<option value="Green w/ Dots">Green w/ Dots</option>',
											'<option value="Aqua">Aqua</option>',
											'<option value="Navy">Navy</option>',
											'<option value="Royal Blue">Royal Blue</option>',
											'<option value="Purple">Purple</option>',
											'<option value="Tutti Frutti">Tutti Frutti</option>',
											'<option value="Peace">Peace</option>',
											'<option value="Camo">Camo</option>',
											'<option value="Brown">Brown</option>',
											'<option value="Grey Floral">Grey Floral</option>',
											'<option value="Black">Black</option>',
											'<option value="Black w/ Dots">Black w/ Dots</option>',
											'<option value="Houndstooth">Houndstooth</option>',
											'<option value="Stripe">Stripe</option>',
											'<option value="Swirl">Swirl</option>',
											'<option value="Zebra">Zebra</option>'];
	
	var minitotes = [		'<option value="Pink w/Brown Trim" selected="selected">Pink w/Brown Trim</option>',
											'<option value="Hot Pink">Hot Pink</option>',
											'<option value="Red">Red</option>',
											'<option value="Lime">Lime</option>',
											'<option value="Navy">Navy</option>',
											'<option value="Purple">Purple</option>',
											'<option value="Peace">Peace</option>',
											'<option value="Camo">Camo</option>',
											'<option value="Brown">Brown</option>',
											'<option value="Grey Floral">Grey Floral</option>',
											'<option value="Black">Black</option>',
											'<option value="Stripe">Stripe</option>',
											'<option value="Swirl">Swirl</option>',
											'<option value="Zebra">Zebra</option>'];
											
	$('#totecolors').html('');
	for(i=0;i<largetotes.length;i++){
		$('#totecolors').html($('#totecolors').html()+largetotes[i]);
	};
	$("#totesize").change(function(){
  	var id = $(this).find("option:selected").attr("id");
		$('#totecolors').html('');
		if(id=='largetote'){
			for(i=0;i<largetotes.length;i++){
				$('#totecolors').html($('#totecolors').html()+largetotes[i]);
			};
		} else {
			for(i=0;i<minitotes.length;i++){
				$('#totecolors').html($('#totecolors').html()+minitotes[i]);
			};
		}
	});
</script>
</body>
</html>