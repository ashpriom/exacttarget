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
?> 
<div class="team" onclick="window.open('https://www.instagram.com/stradigi_dev/')">

	<div class="third-column">

		<div class="team-wrapper"> 
		<?php for ($i=0;$i<2;$i++){?>
			<div class="team-img">
			   <figure>
				  <img src="<?php echo $result->data[$i]->images->low_resolution->url?>">
				  <figcaption>
					  <div>
						<div class="ins-feed-icons">
							<div class="ins-feed-icon" > <img height='30' width='30' src="wp-content/themes/panel-child/images/ic_like@2x.png" alt="">
							<?php echo $result->data[$i]->likes->{'count'};?></div>
							<div class="ins-feed-icon" >
							 <img height='30' width='30'  src="wp-content/themes/panel-child/images/ic_comment@2x.png" alt="">
							 <?php echo $result->data[$i]->comments->{'count'};?></div>
						</div>
						<div class="instagram-text"><?php echo $result->data[$i]->caption->text;?></div>
					  </div>
				  </figcaption>
			   </figure>
			</div> 		
		<?php }?>
		</div>

		<div class="team-wrapper">	  
		<?php for ($i=2;$i<4;$i++){?>
			<div class="team-img">
			   <figure>
				  <img src="<?php echo $result->data[$i]->images->low_resolution->url?>">
				  <figcaption>
					  <div>
						<div class="ins-feed-icons">
							<div class="ins-feed-icon" > <img height='30' width='30' src="wp-content/themes/panel-child/images/ic_like@2x.png" alt="">
							<?php echo $result->data[$i]->likes->{'count'};?></div>
							<div class="ins-feed-icon" >
							 <img height='30' width='30'  src="wp-content/themes/panel-child/images/ic_comment@2x.png" alt="">
							 <?php echo $result->data[$i]->comments->{'count'};?></div>
						</div>
						<div class="instagram-text"><?php echo $result->data[$i]->caption->text;?></div>
					  </div>
				  </figcaption>
			   </figure>
			</div> 		
		<?php }?>
		</div>
 	
	</div>
	
	<div class="third-column">
	
		<div class="team-wrapper"> 
		<?php for ($i=4;$i<6;$i++){?>
			<div class="team-img">
			   <figure>
				  <img src="<?php echo $result->data[$i]->images->low_resolution->url?>">
				  <figcaption>
					  <div>
						<div class="ins-feed-icons">
							<div class="ins-feed-icon" > <img height='30' width='30' src="wp-content/themes/panel-child/images/ic_like@2x.png" alt="">
							<?php echo $result->data[$i]->likes->{'count'};?></div>
							<div class="ins-feed-icon" >
							 <img height='30' width='30'  src="wp-content/themes/panel-child/images/ic_comment@2x.png" alt="">
							 <?php echo $result->data[$i]->comments->{'count'};?></div>
						</div>
						<div class="instagram-text"><?php echo $result->data[$i]->caption->text;?></div>
					  </div>
				  </figcaption>
			   </figure>
			</div> 		
		<?php }?>
		</div>

		<div class="team-wrapper">	  
		<?php for ($i=6;$i<8;$i++){?>
			<div class="team-img">
			   <figure>
				  <img src="<?php echo $result->data[$i]->images->low_resolution->url?>">
				  <figcaption>
					  <div>
						<div class="ins-feed-icons">
							<div class="ins-feed-icon" > <img height='30' width='30' src="wp-content/themes/panel-child/images/ic_like@2x.png" alt="">
							<?php echo $result->data[$i]->likes->{'count'};?></div>
							<div class="ins-feed-icon" >
							 <img height='30' width='30'  src="wp-content/themes/panel-child/images/ic_comment@2x.png" alt="">
							 <?php echo $result->data[$i]->comments->{'count'};?></div>
						</div>
						<div class="instagram-text"><?php echo $result->data[$i]->caption->text;?></div>
					  </div>
				  </figcaption>
			   </figure>
			</div> 		
		<?php }?>
		</div>
	 
	</div>
</div>


