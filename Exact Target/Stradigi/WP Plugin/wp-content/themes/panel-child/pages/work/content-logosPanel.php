<?php
$post_header = get_post(1604);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$text_1 = $post_header->text_1;
$text_2 = $post_header->text_2;
$text_3 = $post_header->text_3;
$text_4 = $post_header->text_4;



$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($post_header->ID), 'large');

?>

<div  class="mainPanel caseStudies " >
    <div class="contentWidth">
         <div class="titlePanel">           
            <div class="title"><?php echo $title ?></div>
            <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
            <div class="text"><?php echo $content ?></div>   
        </div>
        
        <div class="display-table ">
            <div class="display-table-cell">
                <img class="logos desk" src="<?php echo  get_stylesheet_directory_uri(); ?>/images/logos-desktop.png" alt=""/>
                <img class="logos mobile" src="<?php echo  get_stylesheet_directory_uri(); ?>/images/logos-mobile.jpg" alt=""/>

            </div> 
        </div>

    </div> 
</div>