<?php get_header(); ?>

<section class="slider">
  <div class="banner">
  	<?php putRevSlider("Front Page Slider") ?>
  </div>
</section>

<section class="intro">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-12 wow fadeInUp"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/workers.png" alt="Image" class="left-image"> </div>
      <div class="col-md-6 col-xs-12 wow fadeInRight">
        <div class="title-box">
          <h5>Develops quality projects to cater for workplace and office</h5>
          <h2>GET OFFER</h2>
          <span></span> </div>
          <p>Cappella Homes is a professional residential builder specializing in custom built homes. Whether your dream is to make the home you live in live up to its full potential with our remodeling services, or if you desire to design and build a new, custom home, we are here to help.</p>
          <p>We approach each project as an opportunity to give you the best possible home building experience. Whether you have house plans in hand, are interested in our design/build program or choose to select from our extensive portfolio of new home plans, we submit accurate proposals for each job without throwing around per-square-foot pricing.</p>
          <p>At Cappella Homes, we are always glad to guide our clients through every step of the building or room remodeling process. Our ultimate goal is to make your building experience a pleasant and memorable one that matches the quality of the custom homes we build for you. We strive to have customers say Cappella Homes is among the best Jacksonville home builders.</p>
        <div class="file-box"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-file.png" alt="Image"> <a href="#">DOWNLOAD PDF CATALOG</a> <!-- <a href="#">SEE COLOR SCHEME</a> --> </div>
      </div>
    </div>
  </div>
</section>

<section class="quote-bar wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h4>We contribute to the society with the ones we protect</h4>
        <h3>Develop and recreate as well as the ones we provide for our customers</h3>
        <a href="/contact" class="site-btn">GET A QUOTE <i class="ion-chevron-right"></i></a> </div>
    </div>
  </div>
</section>

<section class="home-services wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <div class="title-box">
          <h5>Don’t be an architecture of building, be the architecture of life.</h5>
          <h2>WHAT WE DO</h2>
          <span></span> </div>
      </div>
      <div class="col-xs-12">
        <div class="carousel">
          <div class="item">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/homes.png" alt="Image"> </figure>
            <span class="description">Develop and recreate as well as the ones we provide</span> <a href="#">HOMES & COMMUNITIES</a> <span class="border"></span> 
          </div>
          <div class="item">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/renovations.png" alt="Image"> </figure>
            <span class="description">Develop and recreate as well as the ones we provide</span> <a href="#">RENOVATION</a> <span class="border"></span> 
          </div>
          <div class="item">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/additions.png" alt="Image"> </figure>
            <span class="description">Develop and recreate as well as the ones we provide</span> <a href="#">ROOM ADDITIONS</a> <span class="border"></span> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="video-bg wow fadeInUp">
  <video src="<?php echo get_template_directory_uri(); ?>/assets/videos/video.mp4" class="hidden-sm hidden-xs" loop muted autoplay data-stellar-ratio="0.5"></video>
  <div class="video-overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h5>35% OF MORTGAGE INTEREST SUPPORT FROM CONSTRUCTION</h5>
        <h2>URBAN DESIGN AWARD</h2>
        <i class="ion-trophy icon"></i><br>
        <a href="#" class="site-btn">SEE ALL AWARDS <i class="ion-chevron-right"></i></a> </div>
    </div>
  </div>
</section>

<!-- <section class="home-features wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-xs-6 col-md-offset-1 col-xs-offset-0"> <i class="icon"> <img src="images/icon-1.jpg" alt="Image"> </i>
        <h4>Cemento</h4>
        <p>Generate fast and high quality, add value to life.</p>
      </div>
      <div class="col-md-2  col-xs-6"> <i class="icon"> <img src="images/icon-2.jpg" alt="Image"> </i>
        <h4>Painting</h4>
        <p>Protect the natural environment, respect life.</p>
      </div>
      <div class="col-md-2 col-xs-6"> <i class="icon"> <img src="images/icon-3.jpg" alt="Image"> </i>
        <h4>Cutting</h4>
        <p>The dream of a life away from the chaos </p>
      </div>
      <div class="col-md-2 col-xs-6"> <i class="icon"> <img src="images/icon-4.jpg" alt="Image"> </i>
        <h4>Digging</h4>
        <p>But at the heart of the city becomes true</p>
      </div>
      <div class="col-md-2 col-xs-6"> <i class="icon"> <img src="images/icon-5.jpg" alt="Image"> </i>
        <h4>Removing</h4>
        <p>Garden pleasure in air with special design</p>
      </div>
    </div>
  </div>
</section> -->

<section class="home-gallery text-center wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="title-box">
          <h5>Construction premium lifespace & workspaces</h5>
          <h2>OUR PROJECTS</h2>
          <span></span> </div>
        <ul class="filter">
         <!--  <li><a href="#" data-filter="*" >ALL</a></li> -->
          <li><a href="#" data-filter=".baroody">Baroody Residence</a></li>
          <li><a href="#" data-filter=".lee">Lee Residence</a></li>
          <li><a href="#" data-filter=".maxwell">Maxwell Residence</a></li>
          <li><a href="#" data-filter=".twin-lakes">Twin Lakes Lot 74</a></li>
          <li><a href="#" data-filter=".riverside">Riverside Residence</a></li>
          <li><a href="#" data-filter=".burstadt">Burstadt Residence</a></li>
          <li><a href="#" data-filter=".cook">Cook Residence</a></li>
          <li><a href="#" data-filter=".perry">Perry Residence</a></li>
        </ul>
      </div>
    </div>
  </div>
  <ul class="gallery thumbs">
    <li class="baroody">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-001.jpg" alt="Image"></a></figure>
    </li>
    <li class="baroody">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-002.jpg" alt="Image"></a></figure>
    </li>
    <li class="baroody">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-003.jpg" alt="Image"></a></figure>
    </li>
    <li class="baroody">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-004.jpg" alt="Image"></a></figure>
    </li>
    <li class="baroody">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-005.jpg" alt="Image"></a></figure>
    </li>
    <li class="baroody">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-006.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-006.jpg" alt="Image"></a></figure>
    </li>
    <li class="baroody">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-007.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-007.jpg" alt="Image"></a></figure>
    </li>
    <li class="baroody">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/B-008.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/B-008.jpg" alt="Image"></a></figure>
    </li>

    <li class="lee">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/L-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/L-001.jpg" alt="Image"></a></figure>
    </li>
    <li class="lee">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/L-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/L-002.jpg" alt="Image"></a></figure>
    </li>
    <li class="lee">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/L-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/L-003.jpg" alt="Image"></a></figure>
    </li>

    <li class="maxwell">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-001.jpg" alt="Image"></a></figure>
    </li>
    <li class="maxwell">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-002.jpg" alt="Image"></a></figure>
    </li>
    <li class="maxwell">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-003.jpg" alt="Image"></a></figure>
    </li>
    <li class="maxwell">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-004.jpg" alt="Image"></a></figure>
    </li>
    <li class="maxwell">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-005.jpg" alt="Image"></a></figure>
    </li>
    <li class="maxwell">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-006.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-006.jpg" alt="Image"></a></figure>
    </li>
    <li class="maxwell">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/M-007.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/M-007.jpg" alt="Image"></a></figure>
    </li>

    <li class="twin-lakes">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/T-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/T-001.jpg" alt="Image"></a></figure>
    </li>
    <li class="twin-lakes">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/T-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/T-002.jpg" alt="Image"></a></figure>
    </li>
    <li class="twin-lakes">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/T-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/T-003.jpg" alt="Image"></a></figure>
    </li>

    <li class="riverside">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-001.jpg" alt="Image"></a></figure>
    </li>
    <li class="riverside">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-002.jpg" alt="Image"></a></figure>
    </li>
    <li class="riverside">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-003.jpg" alt="Image"></a></figure>
    </li>
    <li class="riverside">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-004.jpg" alt="Image"></a></figure>
    </li>
    <li class="riverside">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-005.jpg" alt="Image"></a></figure>
    </li>
    <li class="riverside">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-006.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-006.jpg" alt="Image"></a></figure>
    </li>
    <li class="riverside">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-007.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-007.jpg" alt="Image"></a></figure>
    </li>
    <li class="riverside">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/H-007-Before.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/H-007-Before.jpg" alt="Image"></a></figure>
    </li>

    <li class="burstadt">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-01.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-01.jpg" alt="Image"></a></figure>
    </li>
    <li class="burstadt">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-03.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-03.jpg" alt="Image"></a></figure>
    </li>
    <li class="burstadt">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-04.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-04.jpg" alt="Image"></a></figure>
    </li>
    <li class="burstadt">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-05.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-05.jpg" alt="Image"></a></figure>
    </li>
    <li class="burstadt">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/bu-06.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bu-06.jpg" alt="Image"></a></figure>
    </li>
    
     <li class="cook">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-001.jpg" alt="Image"></a></figure>
    </li>
    <li class="cook">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-002.jpg" alt="Image"></a></figure>
    </li>
    <li class="cook">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-003.jpg" alt="Image"></a></figure>
    </li>
    <li class="cook">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-004.jpg" alt="Image"></a></figure>
    </li>
    <li class="cook">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/c-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/c-005.jpg" alt="Image"></a></figure>
    </li>

    <li class="perry">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/p-001.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-001.jpg" alt="Image"></a></figure>
    </li>
    <li class="perry">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/p-002.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-002.jpg" alt="Image"></a></figure>
    </li>
    <li class="perry">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/p-003.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-003.jpg" alt="Image"></a></figure>
    </li>
    <li class="perry">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/p-004.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-004.jpg" alt="Image"></a></figure>
    </li>
    <li class="perry">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/p-005.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-005.jpg" alt="Image"></a></figure>
    </li>
    <li class="perry">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/p-006.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-006.jpg" alt="Image"></a></figure>
    </li>
    <li class="perry">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/p-007.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-007.jpg" alt="Image"></a></figure>
    </li>
    <li class="perry">
      <figure><a href="<?php echo get_template_directory_uri(); ?>/assets/images/p-008.jpg" class="litebox"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/p-008.jpg" alt="Image"></a></figure>
    </li>
    
  </ul>
</section>

<!-- <section class="news wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="news-box">
          <figure><img src="images/news1.jpg" alt="Image"> <span class="icon"><i class="ion-flash"></i></span> </figure>
          <h3>Construction "HOUSE" is almost finished… There is huge demand and rush on city</h3>
          <small>14TH OF DECEMBER</small> <span class="border"></span>
          <p>The first contracts have been signed in HOUSE, which will host many exclusive brands from Brazil and all over the World. Envato Corp, which has purchased 2 towers from the project...</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="news-box">
          <figure><img src="images/news2.jpg" alt="Image"> <span class="icon"><i class="ion-images"></i></span> </figure>
          <h3>Construction company says “Real Estate will grow 10% during 2015”</h3>
          <small>27TH OF JANUARY</small> <span class="border"></span>
          <p>The first contracts have been signed in HOUSE, which will host many exclusive brands from Brazil and all over the World. Envato Corp, which has purchased 2 towers from the project...</p>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- <section class="logos wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-center">
        <div class="title-box">
          <h5>Happy to introduce our amazing project partners</h5>
          <h2>PARTNERSHIP</h2>
          <span></span> </div>
        <ul>
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo1.jpg" alt="Image"></figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo2.jpg" alt="Image"></figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo3.jpg" alt="Image"></figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo4.jpg" alt="Image"></figure>
          </li>
          <li>
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo5.jpg" alt="Image"></figure>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section> -->
<?php get_footer(); ?>