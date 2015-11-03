<?php get_header(); ?>
<?php global $up_options; $parallax_image=$up_options->section4_image;?>
<script>
  jQuery(function($){
    var parallax_image = "<?php echo $parallax_image; ?>";
    if (parallax_image != '')
      $('.video-bg').css('background-image', 'url(' + parallax_image + ')');
  });
</script>
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
            $args = array( 'post_type' =>'page', 'post_parent' => '20', 'orderby' => 'menu_order', 'order'=> 'ASC', 'posts_per_page'=> '6'); //production
            //$args = array( 'post_type' =>'page', 'post_parent' => '38', 'orderby' => 'menu_order', 'order'=> 'ASC', 'posts_per_page'=> '6');  //test site
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
        <div class="title-box">
          <?php if ($up_options->section4_subtitle != ''): echo "<h5>".$up_options->section4_subtitle."</h5>"; endif; ?>
          <?php if ($up_options->section4_title != ''): echo "<h2>".$up_options->section4_title."</h2><span></span>"; endif; ?>
        </div>
        <?php if ($up_options->section4_content != ''): echo "<p>".$up_options->section4_content."</p>"; endif; ?>
      </div>
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
          <?php 
            $args = array( 'post_type' => array('gallery'), 'orderby' => 'title', 'order' => 'ASC');
            $query = new WP_Query($args);
            if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
              echo '<li><a href="#" data-filter=".'.$post->post_name.'">'.get_the_title().'</a></li>';
            endwhile; endif; wp_reset_postdata();
          ?>
        </ul>
      </div>
    </div>
  </div>
  <ul class="gallery thumbs">
     <?php 
      $args2 = array( 'post_type' => array('gallery'));
      $query2 = new WP_Query($args2);
      if ( $query2->have_posts() ): 
        while ( $query2->have_posts() ):
          $query2->the_post(); 
          for ($x = 1; $x <= 10; $x++) {
            $slug = "gallery_image_".$x;
            if (get_field($slug)):
              echo '<li class="'.$post->post_name.'"><figure><a href="'.get_field($slug).'"" class="litebox"><img src="'.get_field($slug).'" alt="Image"></a></figure></li>';
            endif;
          }
        endwhile;
      endif;
      wp_reset_postdata();
    ?>
  </ul>
</section>
<?php get_footer(); ?>