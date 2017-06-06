<?php
$post_header = get_post(1351);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$text_1 = $post_header->text_1;
$text_2 = $post_header->text_2;
$text_3 = $post_header->text_3;
$text_4 = $post_header->text_4;
$header_image = get_header_image();
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id(1351), 'large');

?>

<div  class="mainPanel  strattitudePanel"  >
    <div class="contentWidth">    
        <div class="display-table ">
            <div class="display-table-cell img">
                <img src="<?php echo $featuredImage[0]; ?>" alt="" class="largeImage"/>
            </div> 
            <div class="display-table-cell">
                <div class="panelBox" >
                    <div class="text1 orangeText "><?php echo $text_1 ?></div> 
                    <div class="text2 "><?php echo $text_2 ?></div>
                     <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
                    <div class="text3"><?php echo $text_3 ?></div> 
                    <div class="text4 orangeText"><?php echo $text_4 ?></div>

                </div>
            </div>
             <div class="display-table-cell mobileOnly">
                <img src="<?php echo $featuredImage[0]; ?>" alt="" class="largeImage"/>
            </div>
        </div>
    </div> 
    
</div>

