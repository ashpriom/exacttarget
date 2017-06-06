<div class="team-member">
<?php 
$category_query_args = array(
    'category_name' => 'teamMember',
	'order' => 'ASC',
	'posts_per_page' => '-1'
);
$category_query = new WP_Query( $category_query_args );
get_the_excerpt($post->ID);
$i = 0;
while ($category_query->have_posts()){
	$i++;
	$category_query->the_post();
    $thumbID = get_post_thumbnail_id( $post->ID );
?>
		<div class="team-member-wrapper team-member-wrapper-<?php echo $i?>" style="background-image:url('<?=wp_get_attachment_url( $thumbID )?>');">
		    <?=get_the_content($post->ID)?>
		    <div class="team-member-wrapper1">
			    <div class="team-member-wrapper2">
					<div class="team-member-name"><?=get_post_custom_values( 'name' )[0]?></div>
					<div class="team-member-position"><?=get_the_excerpt($post->ID)?></div>					
				</div>	
			</div>
		</div>
<?php
}
?>
</div>

<div class="about-image">
</div>

