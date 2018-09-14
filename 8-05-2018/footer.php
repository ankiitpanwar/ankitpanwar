<div class="travel-destination-section">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="text-left _tra">
          <p>Explore your <strong>TRAVEL DESTINATION</strong> like never before.</p>
          <button class="btn btn-default btn-lg btn-dark wow  bounce  animated"> Get Started </button>
        </div>
      </div>

      <div class="col-md-5">
        <div class="travel-destination-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/travel-destination-img.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div> 
<footer>
  <div class="footer-detination">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4>DESTINATIONS</h4>
          <ul> 

		  <?php 		  
		  $args = array(
			'orderby'    => 'ID', 
			'order'      => 'Asc',
			'hide_empty' => false
		);
		  		  
		  $tax_terms = get_terms('destination', $args);?>
	<?php foreach($tax_terms as $term_single) { ?>	
	<li><a href="<?php echo home_url();?>/destinations/<?php echo $term_single->slug; ?>"><?php echo $term_single->name; ?></a></li>         
	<?php } ?> 

          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-experience">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4>CATEGORIES</h4>
          <ul>                                                                                
             <?php 		  
		  $args = array(
			'orderby'    => 'ID', 
			'order'      => 'ASC',
			'hide_empty' => false
		);
		  		  
		  $tax_terms = get_terms('category', $args);
		  ?>
	<?php foreach($tax_terms as $term_single) { ?>	
	<li><a href="<?php echo home_url();?>/category/<?php echo $term_single->slug; ?>"><?php echo $term_single->name; ?></a></li>         
	<?php } ?>             
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h4> CONTACT US</h4>
          <p>Shop No - 3, Plot No - 436, Sector - 4 Vaishali, Ghaziabad (DELHI NCR) - 201010 (INDIA)</p>

          <ul>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/phone-icon.png" alt=""> +91-9650029937, +91-120-4572740</li>
            <li> <img src="<?php echo get_template_directory_uri(); ?>/img/email-icon.png" alt=""> info@ibntours.com</li>
            <li>
              <div class="social-icon">
                <ul>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" alt=""></li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt=""></li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/img/in.png" alt=""></li>
                  <li><img src="<?php echo get_template_directory_uri(); ?>/img/skype.png" alt=""></li>
                </ul>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
 
 
 <div class="inner-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Copyright © 2014 - IBN Tours (P) Ltd.</p>
        </div>
        <div class="col-md-6">                            
          <ul class="pull-right">
            <li><a href="<?php echo home_url();?>/about">About Us</a></li>
            <li><a href="<?php echo home_url();?>/contact-us">Contact </a></li>
            <li><a href="#"> Disclaimer </a></li>
            <li><a href="#">Privacy Policy </a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class='scrolltop'>
            <div class='scroll icon'> <img src="<?php echo get_template_directory_uri(); ?>/img/scroll-up.png" alt=""></div>
  </div>
</footer>

    <script type="text/javascript">
        $(document).ready(function(){
            $('.navbar-nav>li>a').click(function(){
              $('.navbar-nav>li').removeClass("active");
              $(this).addClass("active");
          });
        });
    </script>

    <script>
      $(function(){
       new WOW().init();
      $('.bxslider').bxSlider({mode: 'fade',controls: false});
      });
    </script>
    <script type="text/javascript">
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50 ) {
            $('.scrolltop:hidden').stop(true, true).fadeIn();
        } else {
            $('.scrolltop').stop(true, true).fadeOut();
        }
    });
    
    
    $('.scroll').click(function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 500);
    });
  
     $(".home-slide-action").click (function(){
        $(".home-slide-action").each ( function(){
            $(this).removeClass('more-active');
        });
        $(this).addClass('more-active');
    });
  
</script> 




<script type="text/javascript">
  $('.custom-btn').click(function(){
    if (($(this).text()) === ' Read More ') {
        $(this).text(' Less');
    } else {
        $(this).text(' Read More ');
    }
  });
  
  $(".blog-content ul.page-numbers").addClass("pagination");
  $(".blog-content ul.page-numbers  .page-numbers.current").addClass("active");
</script>
  </body>
</html>