
(function($){
$(document).ready(function(){
	$('#content .page .likes img.unlike').bind('click', function(){
		var params = {
			'call'	: 'unlike',
			'image'	: document.getElementById('image').src
		};
		$.post('ImagesVoter.php',params).done(function(response){

		});
	});
	$('#content .page .likes img.like').bind('click', function(){
		var params = {
			'call'	: 'like',
			'image'	: document.getElementById('image').src
		};
		$.post('ImagesVoter.php',params).done(function(response){
		});
	});
});
})(jQuery);