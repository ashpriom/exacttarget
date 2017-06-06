<?php
/*
  Template Name: main-work-page
 */
get_header('base');
?>
<?php get_template_part('pages/work/content', 'topPanel'); ?>
<?php get_template_part('pages/work/content', 'solutionPanel'); ?>
<?php get_template_part('pages/work/content', 'logosPanel'); ?>
<!--contact  Section-->
<?php get_template_part('pages/home/content', 'contact'); ?>
<?php get_template_part('overWriteStyleContactForm'); ?>
<!--contact  Section--> 

<?php get_footer(); ?>