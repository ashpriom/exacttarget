<?php
/*
  Template Name: 404-notfound
 */
get_header('base');
 $post_header = get_page_by_path('404-page-not-found', OBJECT, 'page');


$title = $post_header->post_title;
$content = $post_header->post_content;
$imgID = $post_header->img;



$img404 = wp_get_attachment_image_src($imgID, 'large');
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($post_header->ID), 'large');

//$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id(1313), 'large');
$buttonNavLink = get_site_url();
$buttonText = 'Back to site';
?>

<div  class="mainPanel topPanel "  style="background-image:url('<?= $featuredImage[0] ?>')" >
    <div class="contentWidth">    
        <div class="display-table ">
            <div class="display-table-cell">
                <img class="img404" src="<?= $img404[0] ?>" alt=""/>
               
                    <div class="title "><?php echo $title ?></div> 
                    <div class="content "><?php echo $content ?></div> 
                    <div class="buttonContainer">
                        <a href="<?php echo $buttonNavLink; ?>" class="skipTransition">
                            <button class="navButton arrowBack"><?php echo $buttonText; ?></button></a>
                    </div>

              
            </div> 
        </div>

    </div> 
</div>

<?php get_footer(); ?>