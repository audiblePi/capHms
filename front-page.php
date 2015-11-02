<?php get_header(); ?>
<?php global $up_options; ?>

<section class="slider">
  <div class="banner">
  	<?php putRevSlider("Front Page Slider") ?>
  </div>
</section>

<section class="intro">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-12 wow fadeInUp"> 
        <?php if ($up_options->section1_image != ''): echo "<img src='".$up_options->section1_image."' alt='Image' class='left-image'>"; 
        else: echo "<img src='".get_template_directory_uri()."/assets/images/workers.png' alt='Image' class='left-image'>"; endif; ?>
      </div>
      <div class="col-md-6 col-xs-12 wow fadeInRight">
        <div class="title-box">
          <?php if ($up_options->section1_subtitle != ''): echo "<h5>".$up_options->section1_subtitle."</h5>"; endif; ?>
          <?php if ($up_options->section1_title != ''): echo "<h2>".$up_options->section1_title."</h2><span></span>"; endif; ?>
        </div>
        <p><?php echo $up_options->section1_content ?></p>
        <div class="file-box"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-file.png" alt="Image"> <a target="_blank" href="<?php echo $up_options->section1_pdf ?>">DOWNLOAD PDF CATALOG</a></div>
      </div>
    </div>
  </div>
</section>

<section class="quote-bar wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php if ($up_options->section2_subtitle != ''): echo "<h4>".$up_options->section2_subtitle."</h4>"; endif; ?>
        <?php if ($up_options->section2_title != ''): echo "<h3>".$up_options->section2_title."</h3>"; endif; ?>
        <a href="/contact" class="site-btn">GET A QUOTE <i class="ion-chevron-right"></i></a> </div>
    </div>
  </div>
</section>

<section class="home-services wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <div class="title-box">
          <?php if ($up_options->section1_subtitle != ''): echo "<h5>".$up_options->section3_subtitle."</h5>"; endif; ?>
          <?php if ($up_options->section1_title != ''): echo "<h2>".$up_options->section3_title."</h2><span></span>"; endif; ?>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="carousel">
          <?php
            //production
            $args = array( 'post_type' =>'page', 'post_parent' => '20', 'orderby' => 'menu_order', 'order'=> 'ASC', 'posts_per_page'=> '6');
   
            //test site
            //$args = array( 'post_type' =>'page', 'post_parent' => '38', 'orderby' => 'menu_order', 'order'=> 'ASC', 'posts_per_page'=> '6');
            $query = new WP_Query($args);
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
          ?>
            <div class="item">
              <figure><?php echo get_the_post_thumbnail( $the_post->ID, 'large' ); ?></figure>
              <span class="description"><?php if (get_field('sub_title')): the_field('sub_title'); endif; ?></span> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="border"></span> 
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="video-bg wow fadeInUp">
  <?php if ($up_options->section4_image != ''): echo "<img src='".$up_options->section4_image."' class='hidden-sm hidden-xs' data-stellar-ratio='0.5'>"; endif; ?>
  <div class="video-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php if ($up_options->section4_subtitle != ''): echo "<h5>".$up_options->section4_subtitle."</h5>"; endif; ?>
        <?php if ($up_options->section4_title != ''): echo "<h2>".$up_options->section4_title.""; endif; ?>
        <br><i class="ion-trophy icon"></i><br>
        <a href="#" class="site-btn">SEE ALL AWARDS <i class="ion-chevron-right"></i></a> </div>
    </div>
  </div>
</section>

<section class="home-gallery text-center wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="title-box">
          <?php if ($up_options->section5_subtitle != ''): echo "<h5>".$up_options->section5_subtitle."</h5>"; endif; ?>
          <?php if ($up_options->section5_title != ''): echo "<h2>".$up_options->section5_title."</h2><span></span>"; endif; ?>
        </div>
        <ul class="filter">
          <!-- <li><a href="#" data-filter=".baroody">Baroody Residence</a></li>
          <li><a href="#" data-filter=".lee">Lee Residence</a></li>
          <li><a href="#" data-filter=".maxwell">Maxwell Residence</a></li>
          <li><a href="#" data-filter=".twin-lakes">Twin Lakes Lot 74</a></li>
          <li><a href="#" data-filter=".riverside">Riverside Residence</a></li>
          <li><a href="#" data-filter=".burstadt">Burstadt Residence</a></li>
          <li><a href="#" data-filter=".cook">Cook Residence</a></li>
          <li><a href="#" data-filter=".perry">Perry Residence</a></li> -->
          <?php 
            $args2 = array( 'post_type' => array('gallery'));
            $query2 = new WP_Query($args2);
            if ( $query2->have_posts() ) : while ( $query2->have_posts() ) : $query2->the_post(); 
          ?>
            <li><a href="#" data-filter=".lee"><?php echo the_title(); ?></a></li>
          <?php endwhile; endif; ?>
        </ul>
      </div>
    </div>
  </div>
  <ul class="gallery thumbs">
    <li class="baroody"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-001.jpg" alt="Image"></a></figure> </li>
    <li class="baroody"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-002.jpg" alt="Image"></a></figure> </li>
    <li class="baroody"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-003.jpg" alt="Image"></a></figure> </li>
    <li class="baroody"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-004.jpg" alt="Image"></a></figure> </li>
    <li class="baroody"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-005.jpg" alt="Image"></a></figure> </li>
    <li class="baroody"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-006.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-006.jpg" alt="Image"></a></figure> </li>
    <li class="baroody"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-007.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-007.jpg" alt="Image"></a></figure> </li>
    <li class="baroody"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-008.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-008.jpg" alt="Image"></a></figure> </li>
    
    <li class="lee"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/L-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/L-001.jpg" alt="Image"></a></figure> </li>
    <li class="lee"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/L-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/L-002.jpg" alt="Image"></a></figure> </li>
    <li class="lee"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/L-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/L-003.jpg" alt="Image"></a></figure> </li>
   
    <li class="maxwell"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-001.jpg" alt="Image"></a></figure> </li>
    <li class="maxwell"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-002.jpg" alt="Image"></a></figure> </li>
    <li class="maxwell"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-003.jpg" alt="Image"></a></figure> </li>
    <li class="maxwell"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-004.jpg" alt="Image"></a></figure> </li>
    <li class="maxwell"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-005.jpg" alt="Image"></a></figure> </li>
    <li class="maxwell"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-006.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-006.jpg" alt="Image"></a></figure> </li>
    <li class="maxwell"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-007.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-007.jpg" alt="Image"></a></figure> </li>
    
    <li class="twin-lakes"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/T-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/T-001.jpg" alt="Image"></a></figure> </li>
    <li class="twin-lakes"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/T-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/T-002.jpg" alt="Image"></a></figure> </li>
    <li class="twin-lakes"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/T-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/T-003.jpg" alt="Image"></a></figure> </li>
   
    <li class="riverside"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-001.jpg" alt="Image"></a></figure> </li>
    <li class="riverside"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-002.jpg" alt="Image"></a></figure> </li>
    <li class="riverside"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-003.jpg" alt="Image"></a></figure> </li>
    <li class="riverside"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-004.jpg" alt="Image"></a></figure> </li>
    <li class="riverside"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-005.jpg" alt="Image"></a></figure> </li>
    <li class="riverside"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-006.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-006.jpg" alt="Image"></a></figure> </li>
    <li class="riverside"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-007.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-007.jpg" alt="Image"></a></figure> </li>
    <li class="riverside"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-007-Before.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-007-Before.jpg" alt="Image"></a></figure> </li>
    
    <li class="burstadt"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-01.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-01.jpg" alt="Image"></a></figure> </li>
    <li class="burstadt"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-03.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-03.jpg" alt="Image"></a></figure> </li>
    <li class="burstadt"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-04.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-04.jpg" alt="Image"></a></figure> </li>
    <li class="burstadt"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-05.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-05.jpg" alt="Image"></a></figure> </li>
    <li class="burstadt"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-06.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-06.jpg" alt="Image"></a></figure> </li>
    
    <li class="cook"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-001.jpg" alt="Image"></a></figure> </li>
    <li class="cook"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-002.jpg" alt="Image"></a></figure> </li>
    <li class="cook"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-003.jpg" alt="Image"></a></figure> </li>
    <li class="cook"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-004.jpg" alt="Image"></a></figure> </li>
    <li class="cook"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-005.jpg" alt="Image"></a></figure> </li>
    
    <li class="perry"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/P-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/P-001.jpg" alt="Image"></a></figure> </li>
    <li class="perry"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/P-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/P-002.jpg" alt="Image"></a></figure> </li>
    <li class="perry"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/P-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/P-003.jpg" alt="Image"></a></figure> </li>
    <li class="perry"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/P-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/P-004.jpg" alt="Image"></a></figure> </li>
    <li class="perry"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/P-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/P-005.jpg" alt="Image"></a></figure> </li>
    <li class="perry"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/P-006.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/P-006.jpg" alt="Image"></a></figure> </li>
    <li class="perry"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/P-007.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/P-007.jpg" alt="Image"></a></figure> </li>
    <li class="perry"> <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/P-008.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/P-008.jpg" alt="Image"></a></figure> </li>
  </ul>
</section>
<?php get_footer(); ?>