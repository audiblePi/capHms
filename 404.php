<?php get_header(); ?>
<section class="page-title">
  <div class="inner">
  	<div class="container">
    	<div class="row">
        	<div class="col-md-9 col-xs-12">
            	<h4>Page Not Found</h4>
            </div>
            <div class="col-md-3 hidden-xs">
            	<ol class="breadcrumb">
                  <li><a href="<?php echo site_url(); ?>">Home</a></li>
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
	       		<header class="header">
					<h1 class="entry-title"><?php _e( 'Not Found', 'conure' ); ?></h1>
				</header>
				<section class="entry-content">
					<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'conure' ); ?></p>
					<?php get_search_form(); ?>
				</section>
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>