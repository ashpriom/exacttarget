<?php
/*
  Template Name: main-contact-page
 */
get_header('base');
?>
<?php get_template_part('pages/contact/content', 'topPanel'); ?>


<!--contact  Section-->
<?php get_template_part('pages/contact/content', 'contact'); ?>
<?php get_template_part('overWriteStyleContactForm'); ?>
<!--contact  Section--> 

<?php get_footer(); ?>