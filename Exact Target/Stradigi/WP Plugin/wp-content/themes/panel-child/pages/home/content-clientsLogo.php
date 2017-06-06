<?php
$post_header = get_post(1255);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;

//GET LOGOS (posts with catagory clients)
$category_query_args = array(
    'category_name' => 'clients'
);

$category_query = new WP_Query($category_query_args);
$logosHTMLstr = '';
while ($category_query->have_posts()) : $category_query->the_post();
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    $logosHTMLstr .= '<span class="logoBox">';
    $logosHTMLstr .= '<img class="logo" src=' . $imgDestacada . ' alt="" /> ';
    $logosHTMLstr .= '</span>';

endwhile;
?>
<div class="clients-logos clearfix" >
    <div class="contentWidth clearfix">    
        <div class="mainTitle"><?php echo $content; ?></div>
        <?php echo $logosHTMLstr; ?>
    </div>
</div>	