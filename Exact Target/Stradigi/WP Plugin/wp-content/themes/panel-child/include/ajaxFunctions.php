<?php
function setUpAjax(){
wp_enqueue_script('ajax-pagination', get_stylesheet_directory_uri() . '/js/ajax-pagination.js', array('jquery'), 1.1, true);

    wp_localize_script('ajax-pagination', 'ajaxpagination', array(
        'ajaxurl' => admin_url('admin-ajax.php')
    ));
}
add_action('wp_enqueue_scripts', 'setUpAjax');

add_action('wp_ajax_nopriv_ajax_pagination', 'ajax_postrouter_pagination');
add_action('wp_ajax_ajax_pagination', 'ajax_postrouter_pagination');



function ajax_postrouter_pagination(){
    $route = $_POST['route'];
    $reply=null;
    switch($route){
        case 'blogByCategory':
            $reply = getBlogs($_POST);
            break;
    }
    echo $reply;
    die(); 
}

function getBlogs($postArr){
   $category_query_args = array(
        'post_type' => 'page',
        'category_name' => 'blog',
        'paged' => $postArr['paged'],
        'orderby' => 'date',
     
    );
   if($postArr['filter'] != 'blog'){
         $category_query_args['tag'] = $postArr['filter'];
   }
    $category_query = new WP_Query($category_query_args);

  $blogHTMLstr = '';
while ($category_query->have_posts()) {
$category_query->the_post();
$post = get_post();

    $blog_id = $post->ID;
    
    $blog_title = $post->post_title;
    $blog_excerpt = $post->post_excerpt;
    $date = get_the_date('', $post->ID);
    $link =  get_permalink( $post->ID );
    $imageBlog = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    $readMore = 'Read more';

   
        $blogHTMLstr .= '<div class="blogCell teaser"  >';
          $blogHTMLstr .= '<div class="inner">';
          $blogHTMLstr .= '<div class="title">';
        $blogHTMLstr .= '<a href="' . $link . '" class="skipTransition">' .$blog_title.'</a>';
        $blogHTMLstr .= '</div>';
        $blogHTMLstr .= '<div class="date">';
        $blogHTMLstr .= $date;
        $blogHTMLstr .= '</div>';
        $blogHTMLstr .= '<a href="' . $link . '" class="skipTransition"><span class="blogImg" style="background-image:url(' . $imageBlog . ')" ></span></a>';
      
         $blogHTMLstr .= '<div class="content">';
        

        


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