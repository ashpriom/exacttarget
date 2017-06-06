<?php
$post_panel = get_post(1567);
$title = $post_panel->post_title;
$content = $post_panel->post_content;
$buttonNavLink = 'stradigilife';
$buttonText = $title;
function getStradigiLifeBlogs() {
    $category_query_args = array(
        'post_type' => 'page',
        'category_name' => 'blog',
        'orderby' => 'date',
        'posts_per_page' => 3
    );

    $category_query_args['tag'] = 'inside-stradigi-blog-menu';

    $category_query = new WP_Query($category_query_args);

    $blogHTMLstr = '';
    while ($category_query->have_posts()) {
        $category_query->the_post();
        $post = get_post();

        $blog_id = $post->ID;

        $blog_title = $post->post_title;
        $blog_excerpt = $post->post_excerpt;
        $date = get_the_date('', $post->ID);
        $link = get_permalink($post->ID);
        $imageBlog = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        $readMore = 'Read more';


        $blogHTMLstr .= '<div class="blogCell teaser"  >';
        $blogHTMLstr .= '<div class="inner">';
      
        $blogHTMLstr .= '<a href="' . $link . '" class="skipTransition"><span class="blogImg" style="background-image:url(' . $imageBlog . ')" ></span></a>';

        $blogHTMLstr .= '<div class="content">';
  $blogHTMLstr .= '<div class="title">';
        $blogHTMLstr .= '<a href="' . $link . '" class="skipTransition">' . $blog_title . '</a>';
        $blogHTMLstr .= '</div>';
        $blogHTMLstr .= '<div class="date">';
        $blogHTMLstr .= $date;
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
    return $blogHTMLstr;
}

$blogStr = getStradigiLifeBlogs();
?>

<div  class="mainPanel newsFeedPanel clearfix"  style="background-image:url('<?= $featuredImage[0] ?>')" >
    <div class="contentWidth"> 
        <div class="titlePanel">
            <div class="title"><?php echo $title ?></div>
            <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
            <div class="text"><?php echo $content ?></div>

        </div>
        <div class="blogsContainer clearfix">
            <?php echo $blogStr; ?>
        </div>
         <div class="buttonContainer"><a href="<?php echo $buttonNavLink; ?>"><button class="navButton arrow"><?php echo $buttonText; ?></button></a></div>
    </div> 
</div>
