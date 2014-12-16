<?php $category = 'Print'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
<title>David Tang | <?php echo $category; ?></title>
<meta name="title" content="David Tang | Print" />
<meta name="description" content="Print Design" />
<meta name="keywords" content="print, graphics, design" />
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
	
	jQuery(function($){
		$.supersized({
		
			//Functionality
			slideshow               :   1,		//Slideshow on/off
			autoplay				:	0,		//Slideshow starts playing automatically
			start_slide             :   1,		//Start slide (0 is random)
			random					: 	0,		//Randomize slide order (Ignores start slide)
			slide_interval          :   5000,	//Length between transitions
			transition              :   1, 		//0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed		:	500,	//Speed of transition
			new_window				:	1,		//Image links open in new window/tab
			pause_hover             :   0,		//Pause slideshow on hover
			keyboard_nav            :   1,		//Keyboard navigation on/off
			performance				:	1,		//0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
			image_protect			:	1,		//Disables image dragging and right click with Javascript
			image_path				:	'img/', //Default image path

			//Size and Position
			min_width		        :   0,		//Min width allowed (in pixels)
			min_height		        :   0,		//Min height allowed (in pixels)
			vertical_center         :   1,		//Vertically center background
			horizontal_center       :   1,		//Horizontally center background
			fit_portrait         	:   1,		//Portrait images will not exceed browser height
			fit_landscape			:   0,		//Landscape images will not exceed browser width
					
			//Components
			navigation              :   1,		//Slideshow controls on/off
			thumbnail_navigation    :   1,		//Thumbnail navigation
			slide_counter           :   1,		//Display slide numbers
			slide_captions          :   1,		//Slide caption (Pull from "title" in slides array)
			slides 					:  	[		//Slideshow Images
												{image : 'photos/print/01.jpg', title : '<h2>Amada</h2> Designs for exhibition booth and promotional materials'},
												{image : 'photos/print/02.jpg', title : '<h2>Lamination Thailand</h2> Presentation folder design and product photography'},
												{image : 'photos/print/03.jpg', title : '<h2>Asian Design House</h2> Full catalog design and product photography'},
												{image : 'photos/print/04.jpg', title : '<h2>The HideAway</h2> Design of promotional materials and photography'},
												{image : 'photos/print/05.jpg', title : '<h2>Queensland Hotel Assoc.</h2> Event invitation and dining menu design'},
												{image : 'photos/print/06.jpg', title : '<h2>Royboy</h2> Brochure and order form design for postcards'},
												{image : 'photos/print/07.jpg', title : '<h2>Bell Wealth Management</h2> Stationery design for wealth management company'}
										]
												
		}); 
    });
		    
</script>
<?php include('includes/footer-scripts.php'); ?>
</body>
</html>