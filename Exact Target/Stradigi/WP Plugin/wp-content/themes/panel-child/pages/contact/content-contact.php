<?php
$post_header = get_post(1270);
$title = $post_header->post_title;
$addressContent = $post_header->post_content;
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id(1270), 'large');
?>

<div class="mainPanel contactPagePanel"  >
 <div class="backgroundPanel"  style="background-image:url('<?= $featuredImage[0] ?>')"  ></div>
    

  <div class="contentWidth clearfix"> 
        <div class="display-table ">
            <div class="display-table-cell first ">
                <div class="backgroundPanel"  style="background-image:url('<?= $featuredImage[0] ?>')"  ></div>
                <div class="panelBox" >
                   
                    <div class="content" >
                         <h1 class="site-title">
                             <?php bloginfo('name'); ?>
                         </h1>
                        <?php echo $addressContent ?>
                    </div>
                </div>
            </div>
            <div class="display-table-cell second">

                <?php echo do_shortcode("[huge_it_forms id='5']"); ?>                          

            </div>        

        </div>   
       

    </div> 


</div>