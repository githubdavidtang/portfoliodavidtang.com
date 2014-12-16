<?php $category = 'Travel'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" 
   "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
<title>David Tang | <?php echo $category; ?></title>
<meta name="title" content="David Tang | <?php echo $category; ?>" />
<meta name="description" content="Travel Photography" />
<meta name="keywords" content="travel, holiday, trip, vacation, backpacking, exotic, photography" />
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
												{image : 'photos/travel/01.jpg', title : '<h2>Wat Suthat Exterior</h2> Bangkok, Thailand'},  
												{image : 'photos/travel/02.jpg', title : '<h2>Wat Suthat Interior</h2> Bangkok, Thailand'},
												{image : 'photos/travel/03.jpg', title : '<h2>Mena Crisologo Street</h2> Vigan, Philippines'},
												{image : 'photos/travel/04.jpg', title : '<h2>Sultan Ahmed Mosque</h2> Istanbul, Turkey'},
												{image : 'photos/travel/05.jpg', title : '<h2>Rice Terraces</h2> Batad, Philippines'},
												{image : 'photos/travel/06.jpg', title : '<h2>Ricefield Sunset</h2> Baan Kok Sah-at, Thailand'},
												{image : 'photos/travel/07.jpg', title : '<h2>Yaowarat</h2> Bangkok, Thailand'},
												{image : 'photos/travel/08.jpg', title : '<h2>Bagan Sunrise</h2> Bagan, Myanmar'},
												{image : 'photos/travel/09.jpg', title : '<h2>Monastery</h2> Mount Popa, Myanmar'},
												{image : 'photos/travel/10.jpg', title : '<h2>Speedboat</h2> Koh Pi Pi, Thailand'},
												{image : 'photos/travel/11.jpg', title : '<h2>Bagan Temples</h2> Bagan, Myanmar'},
												{image : 'photos/travel/12.jpg', title : '<h2>Bangkok Skyline</h2> Bangkok, Thailand'},
												{image : 'photos/travel/13.jpg', title : '<h2>Fog Surround Hills</h2> Muurla, Finland'}
										]
												
		}); 
    });
		    
</script>
<?php include('includes/footer-scripts.php'); ?>
</body>
</html>