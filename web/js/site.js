$(document).ready(function() {
	$('#search-textbox').keypress(function(e) {
		if (e.keyCode == 13) {
			var url = $(this).attr('data-url');
			var text = $(this).val();
			if(text.length)
				document.location.href = url+'/'+text;
			return false;
		}
	});
});