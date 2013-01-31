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
  <h1>Fold-Over Note Cards <span>(Matching envelopes included)</span></h1>
  <div class="itemgroup">
  	<a href="stationery.php">
    	<img src="images/stationery2.jpg" />
    	<div class="item">Stationery</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Quantity">Quantity:</span>
        <span class="field">
        <select name="os0">
            <option value="Set of 10">Set of 10 - $17.99</option>
            <option value="Set of 20">Set of 20 - $33.99</option>
            <option value="Set of 30">Set of 30 - $48.99</option>
            <option value="Set of 40">Set of 40 - $62.99</option>
            <option value="Set of 50">Set of 50 - $75.99</option>
        </select>
        Please e-mail or call us directly for quantities over 50.
        <input type="hidden" name="option_select0" value="Set of 10" />
        <input type="hidden" name="option_amount0" value="17.99" />
        <input type="hidden" name="option_select1" value="Set of 20" />
        <input type="hidden" name="option_amount1" value="33.99" />
        <input type="hidden" name="option_select2" value="Set of 30" />
        <input type="hidden" name="option_amount2" value="48.99" />
        <input type="hidden" name="option_select3" value="Set of 40" />
        <input type="hidden" name="option_amount3" value="62.99" />
        <input type="hidden" name="option_select4" value="Set of 50" />
        <input type="hidden" name="option_amount4" value="75.99" />
        <input type="hidden" name="option_index" value="0" /><!-- value of option set -->
       </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on1" value="Size" />Size:</span>
        <span class="field">
            <select name="os1">
                <option value="Small (4.875&quot; x 3.5&quot;)" selected="selected">Small (4.875&quot; x 3.5&quot;)</option>
                <option value="Medium (5.5&quot; x 4.25&quot;)">Medium (5.5&quot; x 4.25&quot;)</option>
                <option value="Large (6.25&quot; x 4.5&quot;)">Large (6.25&quot; x 4.5&quot;)</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on2" value="Card Color" />Card Color:</span>
        <span class="field">
            <select name="os2">
                <option value="White" selected="selected">White</option>
                <option value="Ivory">Ivory (only recommended for the 'solids' collection)</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on3" value="Card Pattern" />Card Pattern:</span>
        <span class="field">
            <select name="os3" id="pattern">
                <option value="Solids" class="solids" selected="selected">Solids</option>
                <option value="Dots" class="dots">Dots</option>
                <option value="Houndstooth" class="houndstooth">Houndstooth</option>
                <option value="Gentlemen's" class="gentlemens">Gentlemen's</option>
                <option value="Names and Initials" class="namesandinitials">Names and Initials</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on4" value="Pattern Color" />Pattern Color or Style:</span>
        <span class="field">
            <select name="os4" id="patterncolor">
                <option value="Loading" selected="selected">Loading</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on5" value="Initial, Monogram, or Name" />Initial, Monogram, or Name:</span>
        <span class="field"><input type="text" name="os5" value="" />
        <span style="color:#ff0000;">Monograms will be in the order they are typed, and are 1) First initial, 2) LAST initial, and 3) Middle initial.</span></span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on6" value="Font" />Font:</span>
        <span class="field">
            <select name="os6" id="fonts">
                <option value="Loading" selected="selected">Loading</option>
            </select>
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
            <input type="hidden" name="quantity" value="1" />
            <input type="hidden" name="item_name" value="Stationery" />
            <input type="hidden" name="shipping2" value="1.25" />
            <input type="hidden" name="tax_rate" value="5" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/stationery.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/stationery.php" />
            <input type="hidden" name="return" value="http://trendva.com/stationery.php" />
            <input type="submit" name="addtocart" value="Add to Cart" class="submit" />
        </span>
    </div>
  </form>
  <img src="images/solids.jpg" style="margin-bottom:80px;" />
  <img src="images/dots.jpg" style="margin-bottom:80px;" />
  <img src="images/houndstooth.jpg" style="margin-bottom:80px;" />
  <img src="images/gentlemens.jpg" style="margin-bottom:80px;" />
  <img src="images/names-and-initials2.jpg" style="margin-bottom:20px;" />
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
<script>
	var solids = [	'<option value="Hot Pink" selected="selected">Hot Pink</option>',
                	'<option value="Lime Green">Lime Green</option>',
									'<option value="Orange">Orange</option>',
									'<option value="Teal">Teal</option>',
									'<option value="Purple">Purple</option>',
									'<option value="Red">Red</option>',
									'<option value="Aqua">Aqua</option>',
									'<option value="Brown">Brown</option>',
									'<option value="Black">Black</option>',
									'<option value="Maroon">Maroon</option>',
									'<option value="Yellow">Yellow</option>',
									'<option value="Forest">Forest</option>',
									'<option value="Turquoise">Turquoise</option>',
									'<option value="Blue">Blue</option>',
									'<option value="Coral">Coral</option>',
									'<option value="Lavender">Lavender</option>',
									'<option value="Sage">Sage</option>',
									'<option value="Charcoal">Charcoal</option>']
						
	
	var dots = [		'<option value="Green on Pink" selected="selected">Green on Pink</option>',
									'<option value="Pink on Lime">Pink on Lime</option>',
									'<option value="Pink on Lime Green">Pink on Lime Green</option>',
									'<option value="Pink and Green on White">Pink and Green on White</option>',
									'<option value="Lime Green on Turquoise">Lime Green on Turquoise</option>',
									'<option value="Coral on Pink">Coral on Pink</option>',
									'<option value="White on Black">White on Black</option>',
									'<option value="White on Pink">White on Pink</option>',
									'<option value="Pink on Brown Small">Pink on Brown Small</option>',
									'<option value="Lime on Brown Small">Lime on Brown Small</option>',
									'<option value="Pink and Brown on White">Pink and Brown on White</option>',
									'<option value="Multi Color">Multi Color</option>'];

	var houndstooth = [	'<option value="Black on White" selected="selected">Black on White</option>',
											'<option value="Black on Pink">Black on Pink</option>']

	var gentlemens = [	'<option value="Gent-1" selected="selected">Gent-1</option>',
											'<option value="Gent-2">Gent-2</option>',
											'<option value="Gent-3">Gent-3</option>',
											'<option value="Gent-4">Gent-4</option>'];
											
	var namesandinitials = [	'<option value="NICURLYQ" selected="selected">NICURLYQ</option>',
											'<option value="NISERIF">NISERIF</option>',
											'<option value="NIDOTS">NIDOTS</option>',
											'<option value="NISCRIPT">NISCRIPT</option>',
											'<option value="CURLYQ">CURLYQ</option>',
											'<option value="SCRIPT">SCRIPT</option>',
											'<option value="RAINBOW">RAINBOW</option>',
											'<option value="SERIF">SERIF</option>'];
											
	var fonts = [	'<option value="Custom Monogram" selected="selected">Custom Monogram</option>',
                '<option value="Serif">Serif</option>',
                '<option value="Curlz">Curlz</option>'];
											
									
											
											
	$('#patterncolor').html('');
	$('#fonts').html('');
	for(i=0;i<solids.length;i++){
		$('#patterncolor').html($('#patterncolor').html()+solids[i]);
		$('#fonts').html($('#fonts').html()+fonts[i]);
	};
	$("#pattern").change(function(){
  	var id = $(this).find('option:selected').attr('class');
		$('#patterncolor').html('');
		$('#fonts').html('');
		if(id=='solids'){
			for(i=0;i<solids.length;i++){
				$('#patterncolor').html($('#patterncolor').html()+solids[i]);
				$('#fonts').html($('#fonts').html()+fonts[i]);
			};
		} else if(id=='dots'){
			for(i=0;i<dots.length;i++){
				$('#patterncolor').html($('#patterncolor').html()+dots[i]);
				$('#fonts').html($('#fonts').html()+fonts[i]);
			};
		} else if(id=='houndstooth'){
			for(i=0;i<houndstooth.length;i++){
				$('#patterncolor').html($('#patterncolor').html()+houndstooth[i]);
				$('#fonts').html($('#fonts').html()+fonts[i]);
			};
		} else if(id=='gentlemens') {
			for(i=0;i<gentlemens.length;i++){
				$('#patterncolor').html($('#patterncolor').html()+gentlemens[i]);
				$('#fonts').html('<option value="Gentlemen" selected="selected">Gentlemen</option>');
			};
		} else {
			for(i=0;i<namesandinitials.length;i++){
				$('#patterncolor').html($('#patterncolor').html()+namesandinitials[i]);
				$('#fonts').html('<option value="Names and Initials" selected="selected">Names and Initials</option>');
			};
		}
	});
</script>
</body>
</html>