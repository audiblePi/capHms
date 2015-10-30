<?php get_header(); 

?>
<section class="page-title">
  <div class="inner">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-9 col-xs-12">
            <h4 style="text-transform:uppercase"><?php the_title(); ?></h4>
            </div>
            <div class="col-md-3 hidden-xs">
            	<ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active"><?php the_title(); ?></li>
                </ol>
            </div>
        </div>
    </div>
  </div>
</section>
<section class="about-us">
  	<div class="container">
    	<div class="row">
      		<div class="col-md-8 wow fadeInRight">
	       		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<section class="entry-content">
							<?php the_content(); ?>
						</section>
					</div>
				<?php endwhile; endif; ?>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<?php
					$sidebarOption = get_field('sidebar_option');
					switch ($sidebarOption){
						case "sidebar1":
						dynamic_sidebar( "Sidebar 1" );
						break;
						case "sidebar2":
						dynamic_sidebar( "Sidebar 2" );
						break;
						case "sidebar3":
						dynamic_sidebar( "Sidebar 3" );
						break;
						case "sidebar4":
						dynamic_sidebar( "Sidebar 4" );
						break;
						default:
						dynamic_sidebar( "Sidebar 1" );
						break;
					}
					?>
				</div>
			</div>
		</div>
  	</div>
</section>
<?php get_footer(); ?>