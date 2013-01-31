<footer>Copyright &copy; 2012 trend. All rights reserved. &#149; Website design and development by <a href="https://www.elance.com/s/webninjataylor/">WebNinjaTaylor</a></footer>
<script language="javascript" src="assets/jquery-1.7.1.min.js"></script> 
<script language="javascript" src="assets/main.js"></script> 
<script language="javascript">
	$('.itemgroup a').hover(function(){
			$(this).find('.item').css('background-color','#40ae49');
		},function(){
			$(this).find('.item').css('background-color','#d6007d');
	});
	$('#addtopaypal').change(function(){
		var itemname = $('#item_name').val();
		itemname = itemname + ": Color = " + $('#color').val();
		$('#item_name').val(itemname);
	});
	/******** SHIPPING FEE ********/
       $("#shippingchoice input[name='shipping']").change(function(){
              if($(this).val() == "IN-STORE PICK-UP"){
                     $("#paypalmeta").find("input[name='shipping']").val("0.00");
                     $("#paypalmeta").find("input[name='shipping2']").val("0.00");
              } else {
                     $("#paypalmeta").find("input[name='shipping']").val("5.50");
                     $("#paypalmeta").find("input[name='shipping2']").val("1.25");
              }
        });
	/******** DELIVERY TYPE ********/
	$('form').submit(function(){
		if($('input:radio[name=shipping][checked=checked]').val() != 'IN-STORE PICK-UP'){
			$('#deliverytype').val('SHIP IT TO ME');
		} else {
			$('#deliverytype').val('IN-STORE PICK-UP');
		}
	});
</script>
<!-- Hosted on BH -->