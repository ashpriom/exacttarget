<?php
/*
  Template Name: ourwork-project-detail
 */
get_header('base');

$post_header = get_post(get_queried_object_id());
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($post_header->ID), 'large');
$intro_text =$post_header->intro_text;
$product_image =wp_get_attachment_image_src($post_header->product_image, 'large');
$bottom_image = wp_get_attachment_image_src($post_header->bottom_image, 'large');




//$savePostId = $post->ID;
//$category_query = new WP_Query('cat=' . implode(',', wp_get_post_categories($post->ID)));
$category_query_args = array(
    'category_name' => 'case-study',
    'orderby' => 'date',   
    'post__not_in' => array($post_header->ID)
);
$category_query = new WP_Query($category_query_args);
$similarHTMLstr = '';
while ($category_query->have_posts()) {
     $category_query->the_post();
    $cat_img = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    $cat_title = $post->post_title;
    $cat_excerpt = $post->post_excerpt;
    $cat_permalink = $post->guid;
    $logo_image = $post->logo_image;
    $imgDestacada = wp_get_attachment_image_src($logo_image, 'large');
  
        $similarHTMLstr .= '<a href="' . $cat_permalink . '" class="caseStudyLogoBox">';
        $similarHTMLstr .= '<span class="img"  style="background-image:url(' . $imgDestacada[0] . ');">';
        $similarHTMLstr .= '</span>';
        $similarHTMLstr .= '<span class="tag">' . $cat_excerpt . '</span>';
        $similarHTMLstr .= '</a>';
   

   
}



?>

<div  class="mainPanel topPanel clearfix"  style="background-image:url('<?= $featuredImage[0] ?>')" >
    <div class="contentWidth">    
        <div class="display-table ">
            <div class="display-table-cell">
               
                <div class="case-study">case study</div>
                <div id='id-title-header' class='title-header case-study-title animated fadeInUp delay1 duration1 eds-on-scroll'><?php echo $post_header->post_title ?></div>
                <div id='id-location-header' class='location-header animated zoomIn delay1 duration1 eds-on-scroll'><?php echo $post_header->post_excerpt ?></div>
                <div class="resume"><?php echo $intro_text ;?></div>


                <div class="product-img-wrapper" style="">
                    <img src="<?php echo $product_image[0]; ?>" alt="">
                </div>
            </div> 
        </div>

    </div> 
</div>

<div class="contentWidth clearfix">  	
    <div class="project-content"><?= wpautop($post_header->post_content, true); ?></div>
</div>

<div class="project-bottom-img clearfix" style="background-image: url(<?php echo $bottom_image[0]; ?>)"></div>

<div class="contentWidth clearfix"> 
    <div class="more-work">more work</div>  
</div>


<div class="projectsBox clearfix"> 
      <div class="contentWidth"> 
    <?php
    echo $similarHTMLstr;
    ?>
      </div>
</div>
<?php get_footer(); ?>
