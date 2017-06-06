<?php
/*
  Template Name: detail-team-page
 */
get_header('base');
$currentPostID = get_queried_object_id();
$post_header = get_post(get_queried_object_id());

$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$blurb = $post_header->post_excerpt;
$thumbID = get_post_thumbnail_id($currentPostID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    $name = $post->post_title;
    $position = $post->post_excerpt;

?>

<div  class="mainPanel topPanel "   >
    <div class="overlay black"></div>
    <div class="contentWidth">
         <div class="display-table ">
            <div class="display-table-cell">
                <div class="panelBox" >
                 <img class="profile" src="<?php echo$imgDestacada; ?>" alt="" /> 
                 <div class="text2"><?php echo $name; ?></div>
     <div class="text4"><?php echo $position; ?></div>
   
              </div> 
            </div>
        </div>
    </div>
</div>
<div  class="mainPanel  "   >
    <div class="overlay black"></div>
    <div class="contentWidth">
        <?php echo $content; ?>
    </div>
</div>



<?php get_footer(); ?>