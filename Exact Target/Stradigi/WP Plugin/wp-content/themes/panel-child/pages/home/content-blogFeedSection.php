<?php
$post_header = get_post(1276);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;

$buttonNavLink = 'stradigilife';
$buttonText = 'See More Stories';

$category_query_args = array(
    'category_name' => 'blog',
    'orderby' => 'date',
    'posts_per_page' => 3
);

$category_query = new WP_Query($category_query_args);
$posts = $category_query->posts;
$imagesBlog = array();
$i = 0;
$blogHTMLstr = '';
while ($category_query->have_posts()) : $category_query->the_post();
    $blog_id = $post->ID;
    $blog_title = $post->post_title;
    $blog_excerpt = $post->post_excerpt;
    $date = get_the_date('', $post->ID);
    $link = $post->guid;
    $imageBlog = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    $readMore = 'Read more';

    if ($i == 0) {
        $blogHTMLstr .= '<div class="blog-table-cell featured" style="background-image:url(' . $imageBlog . ')"  >';
       
        $blogHTMLstr .= '<div class="backgroundFilter"></div>';
          $blogHTMLstr .= '<div class="inner">';
        $blogHTMLstr .= '<div class="date">';
        $blogHTMLstr .= $date;
        $blogHTMLstr .= '</div>';

        $blogHTMLstr .= '<div class="title">';
        $blogHTMLstr .= '<a href="' . $link . '">' .$blog_title. '</a>';
        $blogHTMLstr .= '</div>';


        $blogHTMLstr .= '<div class="text">';
        $blogHTMLstr .= $blog_excerpt;
        $blogHTMLstr .= '</div>';

        $blogHTMLstr .= '<div class="more">';
        $blogHTMLstr .= '<a href="' . $link . '">' . $readMore . '</a>';
        $blogHTMLstr .= '</div>';
        
          $blogHTMLstr .= '</div>';
        $blogHTMLstr .= '</div>';
    } else {
        $blogHTMLstr .= '<div class="blog-table-cell teaser"  >';
          $blogHTMLstr .= '<div class="inner">';
        $blogHTMLstr .= '<a href="' . $link . '"><span class="blogImg" style="background-image:url(' . $imageBlog . ')" ></span></a>';
      
         $blogHTMLstr .= '<div class="content">';
        $blogHTMLstr .= '<div class="date">';
        $blogHTMLstr .= $date;
        $blogHTMLstr .= '</div>';

        $blogHTMLstr .= '<div class="title">';
        $blogHTMLstr .= '<a href="' . $link . '">' .$blog_title. '</a>';
        $blogHTMLstr .= '</div>';


        $blogHTMLstr .= '<div class="text">';
        $blogHTMLstr .= $blog_excerpt;
        $blogHTMLstr .= '</div>';

        $blogHTMLstr .= '<div class="more">';
        $blogHTMLstr .= '<a href="' . $link . '">' . $readMore . '</a>';
        $blogHTMLstr .= '</div>';
        $blogHTMLstr .= '</div>';
          $blogHTMLstr .= '</div>';
        $blogHTMLstr .= '</div>';
    }

    $i++;
endwhile;

function short_word($length, $string, $separator = null) {

    if (strlen($string) > $length)
        $string = (preg_match('/^(.*)\W.*$/', substr($string, 0, $length + 1), $matches) ? $matches[1] : substr($string, 0, $length)) . $separator;
    return $string;
}
?>
<div class="blogPanel clearfix" >
    <div class="contentWidth clearfix">    
        <div class="mainTitle"><?php echo $content; ?></div>
        <div class="display-table">
            <?php echo $blogHTMLstr; ?>
        </div>  
       <div class="buttonContainer"><a href="<?php echo $buttonNavLink; ?>"><button class="navButton arrow"><?php echo $buttonText; ?></button></a></div>
        
    </div>
</div>	