<?php
$post_panel = get_post(1590);
$title = $post_panel->post_title;
$content = $post_panel->post_content;
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($post_panel->ID), 'large');
$buttonNavLink = 'team-and-career';
$buttonText = 'Team & Careers';
?>


<div  class="mainPanel joinTeam "  style="background-image:url('<?= $featuredImage[0] ?>')" >
    <div class="angleTop"><div class="angle"></div></div>
    <div class="contentWidth">    
        <div class="display-table ">
            <div class="display-table-cell">
                <div class="panelBox" >
                    
                    <div class="text2 "><?php echo $title ?></div> 
                    <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
                    <div class="text3"><?php echo $content ?></div> 
                    <div class="buttonContainer"><a href="<?php echo $buttonNavLink; ?>"><button class="navButton arrow"><?php echo $buttonText; ?></button></a></div>
                </div>
            </div> 
        </div>
       
    </div> 
     <div class="angleBottom"><div class="angle"></div></div> 
</div>
