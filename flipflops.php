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
  <h1>Flip-flops <span>(Includes ribbon &amp; korker or bow)</span></h1>
  <div class="itemgroup">
  	<a href="flipflops.php">
    	<img src="images/flipflops.jpg" />
    	<div class="item">Flip-flops</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Flip-flops Type:</span>
        <span class="field">
        <select name="os0">
            <option value="Flip-flops with Korker">Flip-flops with Korker - $23.99</option>
            <option value="Flip-flops with Bow">Flip-flops with Bow - $23.99</option>
        </select>
        <input type="hidden" name="option_select0" value="Flip-flops with Korker" />
        <input type="hidden" name="option_amount0" value="22.99" />
        <input type="hidden" name="option_select1" value="Flip-flops with Bow" />
        <input type="hidden" name="option_amount1" value="22.99" />
        <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on2" value="Flip-flops Size" />Flip-flops Size:</span>
        <span class="field">
            <select name="os2" id="flipflopsize">
                <option value="Womens Size 5" class="womens" selected="selected">Womens Size 5</option>
                <option value="Womens Size 6" class="womens">Womens Size 6</option>
                <option value="Womens Size 7" class="womens">Womens Size 7</option>
                <option value="Womens Size 8" class="womens">Womens Size 8</option>
                <option value="Womens Size 9" class="womens">Womens Size 9</option>
                <option value="Womens Size 10" class="womens">Womens Size 10</option>
                <option value="Girls Size 1/2" class="girls">Girls Size 1/2</option>
                <option value="Girls Size 3/4" class="girls">Girls Size 3/4</option>
                <option value="Girls Size 5/6" class="girls">Girls Size 5/6</option>
                <option value="Girls Size 8/9" class="girls">Girls Size 8/9</option>
                <option value="Girls Size 10/11" class="girls">Girls Size 10/11</option>
                <option value="Girls Size 12/13" class="girls">Girls Size 12/13</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on1" value="Flip-flops Color" />Flip-flops Color:</span>
        <span class="field">
            <select name="os1" id="flipflopcolor">
                <option value="Loading" selected="selected">Loading</option>
            </select>
            Shoe colors available while supplies last
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on3" value="Bow Color" />Bow Color:</span>
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
    	<span class="label"><input type="hidden" name="on4" value="Center Accent Color or Additional Korker Color" />Center Accent Color or Additional Korker Color:</span>
        <span class="field">
            <select name="os4">
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
            <input type="hidden" name="item_name" value="Flip-flops" />
            <input type="hidden" name="shipping" value="5.50" />
            <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="5.3" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/flipflops.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/flipflops.php" />
            <input type="hidden" name="return" value="http://trendva.com/flipflops.php" />
            <input type="submit" name="addtocart" value="Add to Cart" class="submit" />
        </span>
    </div>
  </form>
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
<script>
	var womens = [	'<option value="White" selected="selected">White</option>',
									'<option value="Black">Black</option>',
									'<option value="Navy">Navy</option>',
									'<option value="Hot Pink">Hot Pink</option>'];
	
	var girls = [		'<option value="White" selected="selected">White</option>',
									'<option value="Black">Black</option>',
									'<option value="Hot Pink">Hot Pink</option>'];
											
	$('#flipflopcolor').html('');
	for(i=0;i<womens.length;i++){
		$('#flipflopcolor').html($('#flipflopcolor').html()+womens[i]);
	};
	$("#flipflopsize").change(function(){
  	var id = $(this).find('option:selected').attr('class');
		$('#flipflopcolor').html('');
		if(id=='womens'){
			for(i=0;i<womens.length;i++){
				$('#flipflopcolor').html($('#flipflopcolor').html()+womens[i]);
			};
		} else {
			for(i=0;i<girls.length;i++){
				$('#flipflopcolor').html($('#flipflopcolor').html()+girls[i]);
			};
		}
	});
</script>
</body>
</html>