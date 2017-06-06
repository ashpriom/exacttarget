<?php
$post_header = get_post(1368);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$text_1 = $post_header->text_1;
$text_2 = $post_header->text_2;
$text_3 = $post_header->text_3;
$text_4 = $post_header->text_4;
$header_image = get_header_image();
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id(1368), 'large');
$hotHTMLstr = getHotBlogs();

function getHotBlogs() {
    $category_query_args = array(
        'post_type' => 'page',
        'category_name' => 'blog',
         'orderby' => 'date',
        'paged' => 1,
        'tag' => 'hot'
    );
    
    $category_query = new WP_Query($category_query_args);

    $blogHTMLstr = '';
    while ($category_query->have_posts()) {
        $category_query->the_post();
        $post = get_post();

        $blog_id = $post->ID;

        $blog_title = $post->post_title;
        $blog_excerpt = $post->post_excerpt;
        $date = get_the_date('', $post->ID);
        $link = get_permalink( $post->ID );
        $imageBlog = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        $readMore = 'Read more';


        $blogHTMLstr .= '<div class="blogCell hotTeaser"  >';
        $blogHTMLstr .= '<div class="inner">';

        $blogHTMLstr .= '<a href="' . $link . '" class="skipTransition"><span class="blogImg" style="background-image:url(' . $imageBlog . ')" ></span></a>';

        $blogHTMLstr .= '<div class="content">';

        $blogHTMLstr .= '<div class="title">';
        $blogHTMLstr .= '<a href="' . $link . '" class="skipTransition">' .$blog_title . '</a>';
        $blogHTMLstr .= '</div>';
      $blogHTMLstr .= '<div class="date">';
        $blogHTMLstr .= $date;
        $blogHTMLstr .= '</div>';



        $blogHTMLstr .= '<div class="text">';
        $blogHTMLstr .= $blog_excerpt;
        $blogHTMLstr .= '</div>';
          

        $blogHTMLstr .= '<div class="more">';
        $blogHTMLstr .= '<a href="' . $link . '" class="skipTransition">' . $readMore . '</a>';
        $blogHTMLstr .= '</div>';
        $blogHTMLstr .= '</div>';
        $blogHTMLstr .= '</div>';
        $blogHTMLstr .= '</div>';
    }
    return $blogHTMLstr;
}

if(strlen($hotHTMLstr) > 0){
?>

<div  class="mainPanel hotPanel  clearfix"   >
    <div class="contentWidth">
         <div class="categoryMenuBox">
            <span class="title"><?php echo $text_1; ?></span>                      
        </div>
        
        <div class="hotBox clearfix">
            <?php echo $hotHTMLstr ?>            
            
        </div>

    </div> 
</div>
<?php 
}
?>
