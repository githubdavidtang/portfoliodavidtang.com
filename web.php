<?php $category = 'Web'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
<title>David Tang | <?php echo $category; ?></title>
<meta name="title" content="David Tang | Web" />
<meta name="description" content="Web Design" />
<meta name="keywords" content="web, graphics, design" />
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
	image: 'photos/web/01.jpg',
	title: '<h2>Amada</h2> Complete website design'
}, {
	image: 'photos/web/02.jpg',
	title: '<h2>Asia Brewery Co Ltd</h2> Complete website design'
}, {
	image: 'photos/web/03.jpg',
	title: '<h2>Tronica</h2> Complete Wordpress Theme'
}]
</script>
<?php include('includes/footer-scripts.php'); ?>
</body>
</html>