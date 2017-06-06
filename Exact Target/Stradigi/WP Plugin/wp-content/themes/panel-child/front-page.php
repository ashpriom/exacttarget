<?php
/**
 * @package Panel
 */
get_header('base');
?>



    <!--homePanel Section-->
<?php get_template_part('pages/home/content', 'topPanel'); ?>

   

    <!--Client text version Section-->
<?php get_template_part('pages/home/content', 'clientsLogo'); ?>
    <!--Client text version Section-->
    
     <!--howWeDoIt  Section-->
<?php get_template_part('pages/home/content', 'howWeDoIt'); ?>
    <!--howWeDoIt  Section-->

       <!--bestInShow  Section-->
<?php get_template_part('pages/home/content', 'bestInShow'); ?>
    <!--bestInShow  Section-->  
   
    
       <!--contact  Section-->
<?php get_template_part('pages/home/content', 'contact'); ?>
       <?php get_template_part('overWriteStyleContactForm'); ?>
    <!--contact  Section--> 
    
      <!--Blog Section-->
<?php get_template_part('pages/home/content', 'blogFeedSection'); ?>
    <!--Blog Section-->	
    
    <!--Production Market version Section-->
<?php //get_template_part( 'content', 'productionMarketSection' );  ?>
    <!--Production Market Section-->


    <!--Our Identity Section-->
<?php// get_template_part('pages/home/content', 'blogFeed'); ?>
    <!--Our Identity Section-->	



    <!--Our Identity Section-->
<?php //get_template_part('pages/home/content', 'blogFeedSection'); ?>
    <!--Our Identity Section-->	

    <!--Client text version Section-->
<?php //get_template_part( 'content', 'socialFeed' );  ?>
    <!--Client text version Section-->

    <!--Client text version Section-->
<?php //get_template_part( 'content', 'socialFeedSection' );  ?>
    <!--Client text version Section-->


    <!--Our more info Section-->
<?php// get_template_part('pages/home/content', 'moreInfo'); ?>
    <!--Our more info Section-->
    
     <!--Our Identity Section-->
<?php// get_template_part('pages/home/content', 'ourIdentity'); ?>
    <!--Our Identity Section-->
    <!--Our Success info Section-->
<?php // get_template_part('pages/home/content', 'ourSuccess'); ?>
    <!--Our Success info Section-->

    <!--Carreer Section-->
<?php// get_template_part('pages/home/content', 'carreer'); ?>
    <!--Carreer Section-->		
    <!--Portfolio Section-->
<?php// get_template_part('pages/home/content', 'portfolio'); ?>
    <!--Portfolio Section-->
    <!--Client text version Section-->
<?php// get_template_part('pages/home/content', 'trustedBest'); ?>
    <!--Client text version Section-->


<?php if (!is_page_template('nosidebar-page.php')) //get_sidebar();   ?>
<?php get_footer(); ?>