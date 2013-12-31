<footer>Copyright &copy; 2012 trend. All rights reserved. &#149; <a href="privacypolicy.php">Privacy Policy</a> &#149; Website design and development by <a href="https://www.elance.com/s/webninjataylor/">WebNinjaTaylor</a></footer>
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




<!-- PINTEREST -->
<script language="javascript">
	/******** CHANGE icon ********/
	/******** CHANGE height and width in CSS for .pinimg ********/
	var bs_pinButtonURL = "http://www.trendva.com/images/pinit.png";
	/******** CHANGE website ********/
	var bs_yourUrl = "http://www.trendva.com";
	var bs_pinButtonPos = "center";
	var bs_pinPrefix = "";
	var bs_pinSuffix = "";
	jQuery(document).ready(function ($) {
	    $('body').append('<img style="visibility:hidden;" class="pinimgload" src="' + bs_pinButtonURL + '" >');
	    $('#bs_pinOnHover').hide();
	    var l;
	    var m;
	    var n;
	    $('.pinimgload').load(function () {
	        m = $('.pinimgload').outerWidth(true);
	        n = $('.pinimgload').outerHeight(true);
	        $('.pinimgload').remove()
	    });
	    hoverCheck();

	    function hoverCheck() {
	        $('img').not('.nopin').mouseenter(function () {
	            $('.pinit-wrapper').css("visibility", "hidden");
	            clearTimeout(l);
	            var a = $(this);
	            var b = parseInt(a.css("margin-top"));
	            var c = parseInt(a.css("margin-left"));
	            var d;
	            var e;
	            switch (bs_pinButtonPos) {
	                case 'center':
	                    d = a.position().top + a.outerHeight(true) / 2 - n / 2;
	                    e = a.position().left + a.outerWidth(true) / 2 - m / 2;
	                    break;
	                case 'topright':
	                    d = a.position().top + b + 5;
	                    e = a.position().left + c + a.outerWidth() - m - 5;
	                    break;
	                case 'topleft':
	                    d = a.position().top + b + 5;
	                    e = a.position().left + c + 5;
	                    break;
	                case 'bottomright':
	                    d = a.position().top + b + a.outerHeight() - n - 5;
	                    e = a.position().left + c + a.outerWidth() - m - 5;
	                    break;
	                case 'bottomleft':
	                    d = a.position().top + b + a.outerHeight() - n - 5;
	                    e = a.position().left + c + 5;
	                    break
	            }
	            var f = a.prop('src');
	            /******** CHANGE dom element from which to pull the description ********/
	            var g = a.closest('.post,.hentry,.entry,.itemgroup').find('.post-title,.entry-title,.entry-header,.item');
	           	/******** CHANGE description ********/
	            var h = "trend. fresh home goods for modern families - "+g.text().replace(/^\s+|\s+$/g,'');
	            if (typeof bs_pinPrefix === 'undefined') {
	                bs_pinPrefix = ''
	            }
	            if (typeof bs_pinSuffix === 'undefined') {
	                bs_pinSuffix = ''
	            }
	            /******** CHANGE dynamic url to page in website (optional) ********/
	            pinitURL = bs_yourUrl;//+ '{permalink}'
	            var i = '<div class="pinit-wrapper" style="display:none;position: absolute;z-index: 9999; cursor: pointer;" ><a href="http://pinterest.com/pin/create/button/?url=' + pinitURL + '&media=' + f + '&description=' + bs_pinPrefix + h + bs_pinSuffix + '" style="display:block;outline:none;" target="_blank"><img class="pinimg" style="-moz-box-shadow:none;-webkit-box-shadow:none;-o-box-shadow:none;box-shadow:none;background:transparent;margin: 0;padding: 0;border:0;" src="' + bs_pinButtonURL + '" title="Pin on Pinterest" ></a></div>';
	            var j = a.parent().is('a') ? a.parent() : a;
	            if (!j.next().hasClass('pinit-wrapper')) {
	                j.after(i);
	                if (typeof l === 'undefined') {
	                    j.next('.pinit-wrapper').attr("onmouseover", "this.style.opacity=1;this.style.visibility='visible'")
	                } else {
	                    j.next('.pinit-wrapper').attr("onmouseover", "this.style.opacity=1;this.style.visibility='visible';clearTimeout(bsButtonHover)")
	                }
	            }
	            var k = j.next(".pinit-wrapper");
	            k.css({
	                "top": d,
	                "left": e
	            });
	            k.css("visibility", "visible");
	            k.stop().fadeTo(300, 1.0, function () {
	                $(this).show()
	            })
	        });
	        $('.blog-entry-content img,.entry-content img').on('mouseleave', function () {
	            if ($.browser.msie) {
	                var a = $(this).next('.pinit-wrapper');
	                var b = $(this).parent('a').next('.pinit-wrapper');
	                l = setTimeout(function () {
	                    a.stop().css("visibility", "hidden");
	                    b.stop().css("visibility", "hidden")
	                }, 3000)
	            } else {
	                $('.pinit-wrapper').stop().fadeTo(0, 0.0)
	            }
	        })
	    }
	});
</script>
<!-- Hosted on BH -->