<?php
$post_header = get_post(66);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$text_1 = $post_header->text_1;
$text_2 = $post_header->text_2;
$text_3 = $post_header->text_3;
$text_4 = $post_header->text_4;
$header_image = get_header_image();
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id(66), 'large');
?>

<div  class="mainPanel topPanel "  style="background-image:url('<?= $featuredImage[0] ?>')" >
    <div class="contentWidth">    
        <div class="display-table ">
            <div class="display-table-cell">
                <div class="panelBox" >
                    <div class="text1 orangeText "><?php echo $text_1 ?></div> 
                    <div class="text2 "><?php echo $text_2 ?></div> 
                    <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
                    <div class="text3"><?php echo $text_3 ?></div> 
                    <div class="text4 orangeText"><?php echo $text_4 ?></div>

                </div>
            </div> 
        </div>
        <div class='arrow-hero ' >
            <span class="ignoreTranstion heroclick" data-id="site-navigation-2" >
                <img src="wp-content/themes/panel-child/images/icn-arrow-orange@2x.png" height="22" alt="">
                </span>

        </div>
    </div> 
</div>
<div class="site-header-wrapper">		
    <nav id="site-navigation-2" class="navigation-main-2" role="navigation">
        <div class="screen-reader-text skip-link">
            <a href="#content" title="<?php esc_attr_e('Skip to content', 'panel'); ?>"></a>
        </div>		
    </nav>
</div>