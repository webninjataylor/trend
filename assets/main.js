// Global variable object namespace
//var wnt = {};



// Functions
/*function menuhighlight(pagename){
	$('#tab-'+pagename).addClass('active');
}*/


// Load Check
/*$('document').ready(function(){
	menuhighlight(wnt.pagename);
	$('.minitote').css('display','none');
	$('.largetote').show();
});*/


/******** HIGHLIGHT CURRENT MENU ITEM ********/
/******** Modified 1/8/2013 to use data-path attribute for accurate matching regardless of subdomain pointings. ********/
var currentPage = document.location.pathname;
for(i=0; i < $('menu').children('li').length; i++){
    var currentMenuItem = $('menu').children('li').eq(i);
    // Is it a top-level menu item?...
    if(currentMenuItem.children('a').attr('data-path') == currentPage){
        currentMenuItem.addClass('active');
    // ...or a second-level menu item?
    } else {
        for(j=0; j < currentMenuItem.find('li').length; j++){
            if(currentMenuItem.find('li').eq(j).find('a').attr('data-path') == currentPage){
                currentMenuItem.addClass('active');
                currentMenuItem.find('li').eq(j).addClass('active');
            }
        }
    }
}


/******** SHOW/HIDE MONOGRAM FIELDS ********/
$('#wrapsize').change(function(){
    if($(this).find('option:selected').hasClass('withmonogram')){
        $('.monogram').show();
    } else {
        $('.monogram').hide();
    }
});