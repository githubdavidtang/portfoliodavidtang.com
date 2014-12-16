<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.supersized.3.1.3.min.js"></script>
<script type="text/javascript">
$(function () {
	$('#toggle').click(function () {
		$(this).toggleClass('active');
		$('#menu').slideToggle('slow');
	});
});
</script>