<?php

$post_panel = get_post(1552);
$title = $post_panel->post_title;
$content = $post_panel->post_content;

$culturePanel_title = $post_panel->culturePanelTitle;
$culturePanel_text = $post_panel->culturePanelText;
$culturePanel_icon = wp_get_attachment_image_src($post_panel->culturePanelIcon, 'large');
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($post_panel->ID), 'large');
?>
<div class="titlePanel">
    <div class="title"><?php echo $title ?></div>
    <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
     <div class="text"><?php echo $content ?></div>
   
</div>

<div  class="mainPanel  left"   >
    <div class="contentWidth">
     <?php include('innerPanel.php')?>
    </div> 
</div>
<div class="clearfix"></div>