<?php
$post_header = get_post(1337);
$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$text_1 = $post_header->text_1;
$text_2 = $post_header->text_2;
$text_3 = $post_header->text_3;
$text_4 = $post_header->text_4;
$header_image = get_header_image();
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id(1337), 'large');

$buttonNavLink = 'careers';
$buttonText = 'Working At Stradigi';

$category_query_args = array(
    'category_name' => 'leaders',
    'orderby' => 'meta_value_num',
    'meta_key' => 'orderNumber',
    'order' => 'ASC'
);

$category_query = new WP_Query($category_query_args);
$teamHTMLstr = '';
while ($category_query->have_posts()) : $category_query->the_post();
    $thumbID = get_post_thumbnail_id($post->ID);
    $imgDestacada = wp_get_attachment_url($thumbID);
    $name = $post->post_title;
    $position = $post->post_excerpt;
    $teamHTMLstr .= '<span class="leadersBox">';
    $teamHTMLstr .= '<img class="profile" src="' . $imgDestacada . '" alt="" /> ';
    $teamHTMLstr .= '<span class="name">' . $name . '</span>';
    $teamHTMLstr .= '<span class="teamPosition">' . $position . '</span>';
    $teamHTMLstr .= '</span>';

endwhile;
?>

<div  class="mainPanel leadersPanel "   >
    <div class="contentWidth"> 
        <div class="titlePanel">

            <div class="title"><?php echo $text_1 ?></div>
            <div class="orangeBorderContainer"><div class="orangeSmallBorder"></div></div>
            <div class="text"><?php echo $text_2 ?></div>   
        </div>

        <div class="leadersSection clearfix">
            <?php echo $teamHTMLstr; ?>

        </div>
        <div class="buttonContainer">

            <a href="<?php echo $buttonNavLink; ?>">
                <button class="navButton arrow"><?php echo $buttonText; ?></button>
            </a>
        </div>
    </div> 
</div>
