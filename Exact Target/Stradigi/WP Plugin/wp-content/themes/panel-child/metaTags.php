 <?php
 $seoTitle = $post->seo_title;
 $seoDescription = $post->seo_description;
 $seoImg = wp_get_attachment_image_src($post->seo_img, 'large');
 $seoURL = get_permalink();
 $seoAuthor ='https://www.facebook.com/Stradigi-584098724992177/timeline/';
 ?>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<title><?php echo $seoTitle ?></title>
 <meta name="description" content="<?php echo  $seoDescription ?>">
<meta name="keywords" content="" />		
<meta name="author" content="Stradigi"/>


<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?php echo $seoTitle; ?>">
<meta itemprop="description" content="<?php echo $seoDescription; ?>">
<meta itemprop="image" content="<?php echo $seoImg[0] ; ?>">

<!-- Open Graph Data
================================================== -->
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo $seoTitle; ?>" />
<meta property="og:site_name" content="Stradigi"/>
<meta property="og:url" content="<?php echo  $seoURL; ?>" />
<meta property="og:description" content="<?php echo  $seoDescription; ?>" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="fr_FR" />
<meta property="article:author" content="<?php echo $seoAuthor; ?>" />
<meta property="og:image" content="<?php echo $seoImg[0] ?>" /> 

<!-- Twitter Cards Data
================================================== -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@stradigiagency" />
<meta name="twitter:creator" content="@stradigiagency">
<meta name="twitter:title" content="<?php echo $seoTitle ?>" />
<meta name="twitter:description" content="<?php echo  $seoDescription ?>" />
<meta name="twitter:image" content="<?php echo  $seoImg[0]  ?>" />



