<?php

$post_header = get_post(1270);
$title = $post_header->post_title;
$addressContent = $post_header->post_content;
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id(1270), 'large');
?>

<div class="mainPanel contactPanel"  >
    <div class="backgroundPanel"   style="background-image:url('<?= $featuredImage[0] ?>')"></div>
    <div class="contentWidth">


        <div class="display-table ">
             <div class="display-table-cell mobileOnly">
                <div class="panelBox" >
                  <?php echo $addressContent ?>
                </div>
            </div>
            <div class="display-table-cell">
                                    
                        <?php echo do_shortcode("[huge_it_forms id='5']"); ?>                          
                
            </div>        
            <div class="display-table-cell desk">
                <div class="panelBox" >
                  <?php echo $addressContent ?>
                </div>
            </div> 
        </div>   
    </div>    




</div>