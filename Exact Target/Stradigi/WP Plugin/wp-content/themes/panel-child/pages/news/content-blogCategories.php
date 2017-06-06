<?php
$menuTitle = 'Categories';
 
$all_the_tags = get_terms( 'post_tag', array(
    'hide_empty' => true,
    'order' =>'ASC',
    'orderby'=>'description'
) );

$categoriesMenuHTMLstr = '<span class="blogMenuItem all selected" data-slug="blog" data-name="blog">All</span>';

foreach ($all_the_tags as $this_tag) {
    $id = $this_tag->term_id;
    $prettyName = $this_tag->name;
    $slug = $this_tag->slug;
    $term_group = $this_tag->term_group;
    $taxonomy = $this_tag->taxonomy;
    $description = $this_tag->description;
    $count = $this_tag->count;
    if (strpos($slug, "menu") != false) {
        $categoriesMenuHTMLstr .= '<span class="blogMenuItem ' . $slug . ' ajaxTest" data-slug="' . $slug . '" data-name="' . $prettyName . '">' . $prettyName . '</span>';
    }
}

?>

<div  class="mainPanel newsFeedPanel clearfix"  style="background-image:url('<?= $featuredImage[0] ?>')" >
    <div class="contentWidth"> 
        <div class="categoryMenuBox">
            <span class="title"><?php echo $menuTitle; ?></span>
            <?php echo $categoriesMenuHTMLstr; ?>            
        </div>
        <div class="categoryMenuBoxMobile">
            <span class="title"><?php echo $menuTitle; ?></span>
            <div class="catMenuController"><div class="selectedCat"></div></div>
            <div class="popMenu"><?php echo $categoriesMenuHTMLstr; ?> </div>
                       
        </div>
        <div class="blogAjaxContainer clearfix">
           
        </div>
    </div> 
</div>
