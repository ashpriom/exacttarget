<?php
$post_header = get_post(1354);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$text_1 = $post_header->text_1;
$text_2 = $post_header->text_2;
$text_3 = $post_header->text_3;
$text_4 = $post_header->text_4;
$header_image = get_header_image();
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id(1354), 'large');

$category_query_args = array(
    'category_name' => 'job-post',
    'posts_per_page' => 4
);

$category_query = new WP_Query($category_query_args);
$jobHTMLstr = '';
$applyNow = 'Apply Now';

while ($category_query->have_posts()) {
      $category_query->the_post();     
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    $title = $post->post_title;
    $text = $post->teaser;
      $permalink = $post->guid;
    
    $jobHTMLstr .= '<a href="' . $permalink . '" class="jobsBox">';
    $jobHTMLstr .= '<span class="innerBox">';
     $jobHTMLstr .= '<span class="imgBox">';
    $jobHTMLstr .= '<img class="logo" src=' . $imgDestacada . ' alt="" /> ';
    $jobHTMLstr .= '</span>';
     $jobHTMLstr .= '<span class="textBox">';
     $jobHTMLstr .= '<span class="title">'.$title.'</span>';
     $jobHTMLstr .= '<span class="text">'.$text.'</span>';     
      $jobHTMLstr .= '</span>';
            $jobHTMLstr .= '<span class="applyNow">'.$applyNow.'</span>';
    $jobHTMLstr .= '</span>';
    $jobHTMLstr .= '</a>';

}


?>

<div id="join-us"  class="mainPanel joinUsPanel "   >
    <div class="contentWidth">   
         <div class="titlePanel">           
            <div class="title"><?php echo $text_1 ?></div>
            <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
           
        </div>
          
        <div class="jobsSection clearfix">
             <?php echo $jobHTMLstr ;?>
            
        </div>
      
    </div> 
</div>
