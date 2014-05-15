<!DOCTYPE html>
<html lang="en">
<head>
  <title>trend. - Towel Wraps</title>


  <meta property="og:url" content="http://trendva.com/towelwraps.php" />
  <meta property="og:title" content="trend. - Towel Wraps" />
  <meta property="og:description" content="Great as a beach cover up or spa wrap. Adjustable velcro closure. Children's also have shoulder straps to provide a secure fit. Made of 100% cotton, triple sheared, and luxurious terry velour fabric." />
  <meta property="og:image" content="http://trendva.com/images/towelwrap.jpg" />


  <?php include('includes/meta.php'); ?>
</head>
<body>
<?php include('includes/header.php'); ?>
<section id="maincontent" class="clrfix">
  <?php include('includes/menu.php'); ?>
  <h1>Towel Wraps <span>(Includes embroidery, matching ribbon, &amp; removable bow)</span></h1>
  <?php include('includes/sharethis.php'); ?>
  <p style="margin-right:20px;">Great as a beach cover up or spa wrap. Adjustable velcro closure. Children's also have shoulder straps to provide a secure fit. Made of 100% cotton, triple sheared, and luxurious terry velour fabric.</p>
  <div class="itemgroup">
  	<a href="towelwraps.php">
        <img src="images/towelwrap.jpg" />
        <div class="item">Towel Wraps</div>
    </a>
  </div>
  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" id="addtopaypal" class="formfields">
    <div class="row">
    	<span class="label"><input type="hidden" name="on0" value="Size">Wrap Size:</span>
        <span class="field">
          <select name="os0" id="wrapsize">
              <option value="Adult" class="adult">Adult - $49.99</option>
              <option value="Child Size 4/7" class="child">Child Size 4/7 - $49.99</option>
              <option value="Child Size 8/12" class="child">Child Size 8/12 - $49.99</option>
          </select>
          <input type="hidden" name="option_select0" value="Adult" />
          <input type="hidden" name="option_amount0" value="49.99" />
          <input type="hidden" name="option_select1" value="Child Size 4/7" />
          <input type="hidden" name="option_amount1" value="49.99" />
          <input type="hidden" name="option_select2" value="Child Size 8/12" />
          <input type="hidden" name="option_amount2" value="49.99" />
          <input type="hidden" name="option_index" value="0" />
       </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on1" value="Wrap Color" />Wrap Color:</span>
        <span class="field">
            <select name="os1" id="wrapcolor">
                <option value="Loading" selected="selected">Loading</option>
            </select>
        </span>
    </div>
    <div class="row">
    	<span class="label"><input type="hidden" name="on3" value="Initial, Monogram, or Name" />Initial(s), Monogram, or Name:</span>
        <span class="field"><input type="text" name="os3" value="" />
        <span style="color:#ff0000;">Monograms will be in the order they are typed, and are 1) First initial, 2) LAST initial, and 3) Middle initial.</span></span>
    </div>
    <?php include('includes/fonts_threads.php'); ?>
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
            <input type="hidden" name="tax_rate" value="5.3" />
            <input type="hidden" name="currency_code" value="USD" />
            <input type="hidden" name="shopping_url" value="http://trendva.com/towelwraps.php" />
            <input type="hidden" name="cancel_return" value="http://trendva.com/towelwraps.php" />
            <input type="hidden" name="return" value="http://trendva.com/towelwraps.php" />
            <button type="submit" class="btn" id="addtocart">Add to Cart</button>
        </span>
    </div>
  </form>
  <div class="colorchart">
      <h3>Wrap Colors</h3>
      <ul class="colorchart">
        <li class="w-pink">Pink</li>
        <li class="w-hotpink">Hot Pink</li>
        <li class="w-red">Red</li>
        <li class="w-orange">Orange</li>
        <li class="w-lime">Lime</li>
        <li class="w-aqua">Aqua</li>
        <li class="w-navy">Navy</li>
        <li class="w-purple">Purple</li>
        <li class="w-white">White</li>
        <li class="w-black">Black</li>
      </ul>
  </div>
  <?php include('includes/threadchart.php'); ?>
  <?php include('includes/fontchart_threads.php'); ?>
  <?php include('includes/notes.php'); ?>
</section>
<?php include('includes/footer.php'); ?>
<script>
	var adultcolors = [	'<option value="Pink" selected="selected">Pink</option>',
											'<option value="Hot Pink">Hot Pink</option>',
											'<option value="Red">Red</option>',
											'<option value="Orange">Orange</option>',
											'<option value="Lime">Lime</option>',
											'<option value="Aaqua">Aqua</option>',
											'<option value="Navy">Navy</option>',
											'<option value="Purple">Purple</option>',
											'<option value="White">White</option>',
											'<option value="Black">Black</option>'];
	
	var childcolors = [	'<option value="Light Pink" selected="selected">Light Pink</option>',
											'<option value="Hot Pink">Hot Pink</option>',
											'<option value="Red">Red</option>',
											'<option value="Orange">Orange</option>',
											'<option value="Yellow">Yellow</option>',
											'<option value="Lime">Lime</option>',
											'<option value="Aaqua">Aqua</option>',
											'<option value="Purple">Purple</option>',
											'<option value="White">White</option>'];
											
	$('#wrapcolor').html('');
	for(i=0;i<adultcolors.length;i++){
		$('#wrapcolor').html($('#wrapcolor').html()+adultcolors[i]);
	};
	$("#wrapsize").change(function(){
  	var wrapsize = $(this).find("option:selected").attr("class");
		$('#wrapcolor').html('');
		if(wrapsize=='adult'){
			for(i=0;i<adultcolors.length;i++){
				$('#wrapcolor').html($('#wrapcolor').html()+adultcolors[i]);
			};
		} else {
			for(i=0;i<childcolors.length;i++){
				$('#wrapcolor').html($('#wrapcolor').html()+childcolors[i]);
			};
		}
	});
</script>
</body>
</html>