<?php $category = 'Real Estate'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
<title>David Tang | <?php echo $category; ?></title>
<meta name="title" content="David Tang | <?php echo $category; ?>" />
<meta name="description" content="Real Estate Photography" />
<meta name="keywords" content="real, estate, property, condo, villa, home, house, photography" />
<?php include('includes/header.php'); ?>
</head>

<body>
<div id="main">

<?php
include('includes/menu.php');
include('includes/footer-gallery.php');
include('includes/copyright.php');
?>

</div>

<script type="text/javascript">
var slidesContent = [{
	image: 'photos/realestate/01.jpg',
	title: '<h2>Backlundagatan</h2> Malmoe, Sweden'
}, {
	image: 'photos/realestate/02.jpg',
	title: '<h2>Modern Home Condo</h2> Bangkok, Thailand'
}, {
	image: 'photos/realestate/03.jpg',
	title: '<h2>The Hideaway</h2> Kuiburi, Thailand'
}, {
	image: 'photos/realestate/04.jpg',
	title: '<h2>Danskavagen</h2> Malmoe, Thailand'
}, {
	image: 'photos/realestate/05.jpg',
	title: '<h2>Baan Chao Phraya</h2> Bangkok, Thailand'
}, {
	image: 'photos/realestate/06.jpg',
	title: '<h2>FourWings Residence</h2> Bangkok, Thailand'
}, {
	image: 'photos/realestate/07.jpg',
	title: '<h2>FourWings Residence</h2> Bangkok, Thailand'
}]
</script>
<?php include('includes/footer-scripts.php'); ?>
</body>
</html>