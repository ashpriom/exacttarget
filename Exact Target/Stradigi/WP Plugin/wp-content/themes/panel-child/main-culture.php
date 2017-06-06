<?php
/*
  Template Name: main-culture-page
 */
get_header('base');
?>
<?php get_template_part('pages/culture/content', 'topPanel'); ?>
<?php get_template_part('pages/culture/content', 'strattitudePanel'); ?>
<div class="culturePanelContainer">
    <?php get_template_part('pages/culture/content', 'culturePanel_1'); ?>
    <?php get_template_part('pages/culture/content', 'culturePanel_2'); ?>
    <?php get_template_part('pages/culture/content', 'culturePanel_3'); ?>
    <?php get_template_part('pages/culture/content', 'culturePanel_4'); ?>
</div>
<?php get_template_part('pages/culture/content', 'joinUsPanel'); ?>
<?php get_template_part('pages/culture/content', 'stradigiLife'); ?>
<?php // get_template_part('pages/culture/content', 'joinTeam'); ?>
<?php get_footer(); ?>


