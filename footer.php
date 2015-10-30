<section class="footer-bar wow fadeIn">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-xs-12">
        <h4>Making Your Dream Home A Reality.</h4>
      </div>
      <div class="col-md-4 col-xs-12">
        <h4>Follow us on social media</h4>
        <ul class="social-media">
          <li><a href="#"><i class="ion-social-facebook"></i></a></li>
          <li><a href="#"><i class="ion-social-twitter"></i></a></li>
          <li><a href="#"><i class="ion-social-google plus"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

<footer class="wow fadeIn">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
      	<?php dynamic_sidebar('Footer Widget Left'); ?>
      </div>
      <div class="col-md-4">
      	<?php dynamic_sidebar('Footer Widget Center'); ?>
      </div>
      <div class="col-md-4">
      	<?php dynamic_sidebar('Footer Widget Right'); ?>
      </div>
      <div class="col-xs-12">
        <div class="sub-footer"> <span class="copyright">Copyright &copy; <?php echo date('Y'); ?> Cappella Homes</span> <span class="themezinho"><a href="http://www.pippindesign.com">Website Design & Development</a> by Pippin Design</span> </div>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript">
(function($) {
  $(window).load(function(){
    $(".loading .table .inner").addClass("fade");
    $('.loading').delay(2000).addClass("slide-up"); 
  });
})(jQuery)
</script> 
<?php wp_footer(); ?>
</body>
</html>