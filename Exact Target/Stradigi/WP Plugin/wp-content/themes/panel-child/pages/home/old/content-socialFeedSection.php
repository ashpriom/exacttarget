<?php 
require dirname(__FILE__). '/../../include/instagram.php';
use MetzWeb\Instagram\Instagram;

$instagram = new Instagram(array(
    'apiKey' => '8fe251f151e345f4be2d476546e91e43',
    'apiSecret' => '307b6998373e405ea4ba5a7f7667a3a4',
    'apiCallback' => '#' // must point to success.php
));

$loginUrl = $instagram->getLoginUrl();
$data = '3931352344.3a81a9f.e20555862cbd4f3688aae71794e42ac9';
$username = $data->user->username;
$instagram->setAccessToken($data);
$result = $instagram->getUserMedia();

$category_query_args = array(
    'category_name' => 'blog',
	
	'orderby'=>'date'
);
$category_query = new WP_Query( $category_query_args );
$posts = $category_query->posts;
 ?>
<section  class="socialFeed">
<div  class="socialFeed-1">
   <div style="" class="socialFeed-1-t" >
	<div class="t-block" style="">
	 <div class="t-block-image" >
	   <a href='https://twitter.com/StradigiDev' target='_blank'>
			<img src="wp-content/themes/panel-child/images/ic_twitter@2x.png" width="55" height="47" alt="twitter">
		</a>
	 </div>
	 <div class="socialFeed-1-t-title" >
	 <?php echo 'Stradigi';?>
	 <div class="stradigi-dev">
		<div>@StradigiDev</div>
	 </div>
	 <?php echo do_shortcode('[ap-twitter-feed template="template-2"]');?>
	 </div>
	
   
     </div>
   </div>
   <div  class="socialFeed-1-f">
     <div class="f-block" >
	 <div class="f-block-image">
		<a href='https://www.facebook.com/StradigiDev/' target='_blank'>
			<img src="wp-content/themes/panel-child/images/ic_facebook@2x.png" width="55" height="47" alt="facebook">
		</a>	
	 </div>
	 <div  class="socialFeed-1-f-title">
	 <?php echo 'Stradigi';?>
	 <div class="stradigi-dev">
		<div>@StradigiDev</div>
	 </div>
	 </div>
	  <br>
      <?php echo do_shortcode( '[recent_facebook_posts number=1 likes=1 comments=1 excerpt_length=100 show_page_link=0 show_link_previews=0]' );?>
     </div>

   </div>
</div>

<div style="" class="socialFeed-2" onclick="window.open('https://www.instagram.com/stradigi_dev/')">
<div class="ins-layer" >
<?php for ($i=0;$i<6;$i++){?>
<div  class="instagram-pic" style="background-image:url('<?php echo $result->data[$i]->images->low_resolution->url?>');">
	<div id="layer-<?php echo $i?>"  class='i-layer-1  correct  <!--animated fadeIn duration3 eds-on-hover-->'>
		<div class="ins-feed-icons" >
			<div class="ins-feed-icon" > <img src="wp-content/themes/panel-child/images/icn-heart.png" alt="">
			<?php echo $result->data[$i]->likes->{'count'};?></div>
			<div class="ins-feed-icon" >
			 <img src="wp-content/themes/panel-child/images/icn-message.png" alt="">
			 <?php echo $result->data[$i]->comments->{'count'};?></div>
		</div>
		<div class="instagram-text"><?php echo $result->data[$i]->caption->text;?></div>
	</div>
</div>
<?php }?>
</div>
</div>

</section>