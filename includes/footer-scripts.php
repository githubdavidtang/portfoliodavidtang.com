<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
<script type="text/javascript">
$(function () {
	$('#toggle').click(function () {
		$(this).toggleClass('active');
		$('#menu').slideToggle('slow');
		return false;
	});
});
</script>