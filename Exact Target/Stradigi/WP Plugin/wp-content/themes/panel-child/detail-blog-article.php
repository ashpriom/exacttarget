<?php
/*
  Template Name: blog-article
 */
get_header('base');
$currentPostID = get_queried_object_id();
$post_header = get_post(get_queried_object_id());

$titleMobile = explode(" ", $post_header->post_title);
$title = $post_header->post_title;
$content = $post_header->post_content;
$blurb = $post_header->post_excerpt;
$category = $post_header->category;
$author = $post_header->author;
$avatarID = $post_header->avatar;
$position = $post_header->position;
$tags = $post_header->tags;
$date = get_the_date('', $post_header->ID);


$avatar = wp_get_attachment_image_src($avatarID, 'large');

$header_image = get_header_image();
$featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($post_header->ID), 'large');
$tagStr='';
if(strlen($tags) > 0){
$tagStr = '<div class="tags"><span class="title">Tags</span> <span class="tagNames">'. $tags .'</span></div>';
}
?>

<div  class="mainPanel topPanel "  style="background-image:url('<?= $featuredImage[0] ?>')" >
    <div class="overlay black"></div>
    <div class="contentWidth">
        <div class="display-table ">
            <div class="display-table-cell">
                <div class="blogBannerText" >
                    <div class="category"><?php echo $category; ?></div>
                    <div class="title"><?php echo $title; ?></div>
                    <div class="blurb"><?php echo $blurb; ?></div>
                    <div class="profile">
                        <div class="imgWrapper" style="background-image:url('<?= $avatar[0] ?>')" >

                        </div>
                        <div class="authorName">by <?php echo $author; ?></div>
                        <div class="date">on <?php echo $date; ?></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div  class="mainPanel articleBody "  >
    <div class="contentWidth">



        <div class="article-content"><?= wpautop($post_header->post_content, true); ?></div>

       <?php
       print $tagStr;
       ?>



        <div class="article-like-wrapper">
            <div class="title">YOU MIGHT ALSO LIKE...</div>
            <div class="clearfix">
                <?php
                $category_query_args = array(
                    'category_name' => 'blog'
                );
                $savePostId = $post->ID;
                $category_query = new WP_Query($category_query_args);
                $i = 0;
                while (($i < 3) && ($category_query->have_posts())) {
                    $category_query->the_post();
                    if ($post->ID != $savePostId) {
                        ?>
                        <div class="articlebox">
                            <div class="contentBox">
                                <a href='<?= get_permalink() ?>'><span class="img" style="background-image:url(<?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>);"></span></a>
                                <div class="content">
                                    <div class="sub"><?= get_post_custom_values('category')[0] ?></div>
                                    <div class="title"><a href='<?= get_permalink() ?>'><?= $post->post_title ?></a></div>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>


<div  class="mainPanel articleBody "  >
    <div class="contentWidth">

        <?php
        comments_template('/comments.php', false);
        ?>
    </div>
</div>


<?php get_footer(); ?>