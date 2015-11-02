<?php

/*Get all pages and allow user to select from a dynamically generated Select List inside of Theme Options*/
function get_all_pages(){
	$pages = get_posts( array( 'post_status' => 'publish', 'post_type' => 'service' ) );
	$all_pages = array();
	// var_dump($pages);
	$index = 0;
	while ($index < count($pages)) {
		// var_dump($pages[$index]->guid);
		// $guidFormatted = str_replace('&', '&#038;', $pages[$index]->guid);
		$all_pages[$pages[$index]->post_title] = array(
	       'name' => $pages[$index]->post_title,
	       'title' => $pages[$index]->post_title
	    );
		$index++;
	}
	// var_dump($all_pages);
	return $all_pages;
}

/*Return Site Logo from Admin theme options to front end*/
function custom_logo(){
	global $up_options;
	return $up_options->site_logo;
}

/*Helper to retrieve images in a slider (typically front page)*/
function load_slider_images(){
	global $up_options;
	ob_start(); ?>

	<img src="<?php echo $up_options->home_page_slider_image1 ?>" alt="" />
	<img src="<?php echo $up_options->home_page_slider_image2 ?>" alt="" />
	<img src="<?php echo $up_options->home_page_slider_image3 ?>" alt="" />

	<?php ob_end_flush();
}

function get_social_icons()
{
	global $up_options;
	ob_start(); ?>

	<?php global $up_options; if ($up_options->facebook != ''): ?>
    	<li><a lass="facebook" target="_blank" href="<?php echo $up_options->facebook ?>"><i class="ion-social-facebook"></i></a></li>
    <?php endif; ?>
    <?php if ($up_options->twitter != ''): ?>
    	<li><a class="twitter" target="_blank" href="<?php echo $up_options->twitter ?>"><i class="ion-social-twitter"></i></a></li>
    <?php endif; ?>
    <?php if ($up_options->linkedin != ''): ?>
    	<li><a class="linkedin" target="_blank" href="<?php echo $up_options->linkedin ?>"><i class="ion-social-linkedin"></i></a></li>
    <?php endif; ?>
    <?php if ($up_options->googleplus != ''): ?>
    	<li><a class="googleplus" target="_blank" href="<?php echo $up_options->googleplus ?>"><i class="ion-social-google plus"></i></a></li>
    <?php endif; ?>
<?php ob_end_flush();
}