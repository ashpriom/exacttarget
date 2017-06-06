<div id="tabs" class="jobs-tabs">
<?php 
$category_query_args = array(
    'category_name' => 'engineering'
);
$category_query = new WP_Query( $category_query_args );
while ($category_query->have_posts()) : $category_query->the_post();
?>
<div class="job-info">
 <div>
	<div class="excerpt"><?=get_the_category($post->ID)[0]->name;?></div>
	<div class="title"><?=get_the_title($post->ID);?></div>
	<div class="content"><?=get_the_content($post->ID);?></div>
	
	<div class="social-extra">
		
		<div class="apply-btn-wrapper">
			<form class="frmHelper" method="GET" action="<?=get_permalink();?>">
			    <input type="hidden" name="page_id" value="<?=$post->ID?>">			
				<input type="submit" value="Apply Now!">
			</form>
		</div>
		
	</div>	
	<a href="<?=get_permalink();?>">READ MORE</a>
 </div>	
</div>
<?php
 endwhile;
?>


<?php 
$category_query_args = array(
    'category_name' => 'design'
);
$category_query = new WP_Query( $category_query_args );
while ($category_query->have_posts()) : $category_query->the_post();
?>
<div class="job-info">
 <div>
	<div class="excerpt"><?=get_the_category($post->ID)[0]->name;?></div>
	<div class="title"><?=get_the_title($post->ID);?></div>
	<div class="content"><?=get_the_content($post->ID);?></div>
	
	<div class="social-extra">
	
		<div class="apply-btn-wrapper">
			<form class="frmHelper" method="GET" action="<?=get_permalink();?>">
			    <input type="hidden" name="page_id" value="<?=$post->ID?>">
				<input type="submit" value="Apply Now!">
			</form>
		</div>
		
    </div>
	
	<a href="<?=get_permalink();?>">READ MORE</a>
 </div>	
</div>
<?php
 endwhile;
?>
<?php 
$category_query_args = array(
    'category_name' => 'project management'
);
$category_query = new WP_Query( $category_query_args );
while ($category_query->have_posts()) : $category_query->the_post();
?>
<div class="job-info">
 <div>
	<div class="excerpt"><?=get_the_category($post->ID)[0]->name;?></div>
	<div class="title"><?=get_the_title($post->ID);?></div>
	<div class="content"><?=get_the_content($post->ID);?></div>
	
	<div class="social-extra">

		<div class="apply-btn-wrapper">
			<form class="frmHelper" method="GET" action="<?=get_permalink();?>">
			    <input type="hidden" name="page_id" value="<?=$post->ID?>">			
				<input type="submit" value="Apply Now!">
			</form>
		</div>

    </div>
	
	<a href="<?=get_permalink();?>">READ MORE</a>
 </div>	
</div>
<?php
 endwhile;
?>
</div>   

