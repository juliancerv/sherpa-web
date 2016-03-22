<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" type="text/css" property='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" property='stylesheet' href="css/sherpa.css">
<link rel="stylesheet" type="text/css" property='stylesheet' href="css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
	function toggleMobileMenu()
	{
		var $mobileMenu = $('#mobile-main-menu');
		$mobileMenu.slideToggle('fast');
	}

	$(document).ready(function() {
		$('#mobile-menu-button').on('click', toggleMobileMenu);
	}); 
</script>