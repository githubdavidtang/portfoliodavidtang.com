<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.supersized.3.1.3.min.js"></script>
<script type="text/javascript">
$('#toggle').click(function() {
	$('#toggle').toggleClass("active");
	$('#menu').slideToggle('slow', function() {
		// Animation complete.
	});
});
</script>