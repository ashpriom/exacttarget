<?php
$post_header = get_post(1348);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$text_1 = $post_header->text_1;
$text_2 = $post_header->text_2;
$text_3 = $post_header->text_3;
$text_4 = $post_header->text_4;
$header_image = get_header_image();
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id(1348), 'large');
$buttonNavLink = 'careers#join-us';
$buttonText = 'Join Our Team';
?>
<div  class="mainPanel ourCulturePanel "  style="background-image:url('<?= $featuredImage[0] ?>')" >
    <div class="angleTop"><div class="angle"></div></div>
    <div class="contentWidth">    
        <div class="display-table ">
            <div class="display-table-cell">
                <div class="panelBox" >
                    <div class="text1 orangeText "><?php echo $text_1 ?></div> 
                    <div class="text2 "><?php echo $text_2 ?></div> 
                    <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
                    <div class="text3"><?php echo $text_3 ?></div> 
                    <div class="text4 orangeText"><?php echo $text_4 ?></div>
                      <div class="buttonContainer"><a href="<?php echo $buttonNavLink; ?>"><button class="navButton arrow"><?php echo $buttonText; ?></button></a></div>
                </div>
            </div> 
        </div>
       
    </div> 
     <div class="angleBottom"></div> 
</div>