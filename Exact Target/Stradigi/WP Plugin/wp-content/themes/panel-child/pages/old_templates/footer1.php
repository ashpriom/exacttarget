<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Panel
 */

$facebook = get_theme_mod( 'jetpack-facebook' );
$twitter = get_theme_mod( 'jetpack-twitter' );
$tumblr = get_theme_mod( 'jetpack-tumblr' );
?>

	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="footer-container">
				<div class="site-title-footer"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
				rel="home"><?php bloginfo( 'name' ); ?></a></div>
				<div class="site-copyright-footer"> &copy; 2016 stradigi.ca. All rights reserved. </div>
				
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<script>

$(window).scroll(function(e){ 
  var $el = $('.site-header-wrapper'); 
  var isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 200 && !isPositionFixed){ 
    $('.fixedElement').css({'position': 'fixed', 'top': '0px'}); 
  }
  if ($(this).scrollTop() < 200 && isPositionFixed)
  {
    $('.fixedElement').css({'position': 'static', 'top': '0px'}); 
  } 
});

</script>

<script>
$(document).ready(function(){
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
	navigation : false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
})
});
</script>
<script>
function showLayer(n){
	
    n.style.display = 'block';
	 n.style.transition = "all 10s";
	
}
	
function hiddenLayer(n){
	
    n.style.display = 'none';
	
	
}	
</script>




</html>