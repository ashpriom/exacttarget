<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
<ul class="et-social-icons">

	<li class="et-social-icon et-social-facebook">
		<a href="https://www.facebook.com/grandlacnoir/" class="icon">
			<span>Facebook</span>
		</a>
	</li>
	<li class="et-social-icon et-social-twitter">
		<a href="https://www.instagram.com/campinggrandlacnoir/" class="icon">
			<span>Instagram</span>
		</a>
	</li>
<li class="et-social-icon et-social-google-map">
		<a href="https://goo.gl/maps/1TNcXwiVVzk" class="icon">
			<span>Google Map</span>
		</a>
	</li>

</ul>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script type="text/javascript">
    
    $(document).ready(function(){

    // set the image-map width and height to match the img size
    $('#image-map').css({'width':$('#image-map img').width(),'height':$('#image-map img').height()})
    
    //tooltip direction
    var tooltipDirection;
                 
    for (i=0; i<$(".pin").length; i++){

        // set tooltip direction type - up or down             
        if ($(".pin").eq(i).hasClass('pin-down')){tooltipDirection = 'tooltip-down';} 
        else{tooltipDirection = 'tooltip-up';}
    
        // append the tooltip
        $("#image-map").append("<div style='left:"+$(".pin").eq(i).data('xpos')+"px;top:"+$(".pin").eq(i).data('ypos')+"px' class='" + tooltipDirection +"'>\
            <div class='tooltip'>" + $(".pin").eq(i).html() + "</div>\</div>");
    }    
    
    // show/hide the tooltip
    $('.tooltip-up, .tooltip-down').hover(function(){
        $(this).children('.tooltip').fadeIn(100);
    }).mouseleave(function(){
        $(this).children('.tooltip').fadeOut(50);
    })

});
  </script>
</html>