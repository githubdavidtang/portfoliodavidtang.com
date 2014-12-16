<script type="text/javascript">
$('#toggle').click(function() {
	$('#toggle').toggleClass("active");
	$('#menu').slideToggle('slow', function() {
		// Animation complete.
	});
});
</script>