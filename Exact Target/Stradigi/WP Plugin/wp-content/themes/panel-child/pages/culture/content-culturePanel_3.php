<?php

$post_panel = get_post(1563);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_panel->post_title;
$content = $post_panel->post_content;

$culturePanel_title = $post_panel->culturePanelTitle;
$culturePanel_text = $post_panel->culturePanelText;
$culturePanel_icon = wp_get_attachment_image_src($post_panel->culturePanelIcon, 'large');
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($post_panel->ID), 'large');
?>


<div  class="mainPanel  left "   >
    <div class="contentWidth"> 
       <?php include('innerPanel.php')?>    
    </div> 
</div>
<div class="clearfix"></div>
