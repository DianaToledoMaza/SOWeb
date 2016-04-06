$(init);

function init() {
	var size = $('#size').get(0).value;
	//var font = $('#font').get(0).value;
	var $editableText = $('.text').eq(0);
	update();
	
	$('#add').on('click', function(e) {		
		$('body').append($editableText.clone(true));
		setFocusHandler();
	});
	
	$('.text').on('focus', function(e) {
		$editableText = $(this);
	});
	
	$('#size').on('input', function(e) {
		size = e.target.value;		
		update();
	});
	
	/*$('#font').change(function(e) {
		font = e.target.value;		
		update();
	});*/
	
	function update() {
		$editableText.css({
		  //'font-family': font,
		  'font-size': size+'px',
		  'line-height': size*1.1+'px'
		})
	}
}



$("#raleway-font").click(function(){
  $('#text').css("font-family","Raleway");
});

$("#montserrat-font").click(function(){
  $('#text').css("font-family","Montserrat");
});

$("#titillium-font").click(function(){
  $('#text').css("font-family","Titillium Web");
});

$("#pacifico-font").click(function(){
  $('#text').css("font-family","Pacifico");
});

$("#josefin-slab-font").click(function(){
  $('#text').css("font-family","Josefin Slab");
});

$("#orbitron-font").click(function(){
  $('#text').css("font-family","Orbitron");
});

$("#comfortaa-font").click(function(){
  $('#text').css("font-family","Comfortaa");
});

$("#courgette-font").click(function(){
  $('#text').css("font-family","Courgette");
});

$("#ubuntu-font").click(function(){
  $('#text').css("font-family","Ubuntu");
});

$("#chewy-font").click(function(){
  $('#text').css("font-family","Chewy");
});

$("#kaushan-script-font").click(function(){
  $('#text').css("font-family","Kaushan Script");
});

$("#lobster-two-font").click(function(){
  $('#text').css("font-family","Lobster Two");
});

$("#economia-font").click(function(){
  $('#text').css("font-family","Economica");
});

$("#satisfy-font").click(function(){
  $('#text').css("font-family","Satisfy");
});








