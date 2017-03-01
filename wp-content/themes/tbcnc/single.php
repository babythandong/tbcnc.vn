<?php get_header() ?>
<?php 
	$categories = get_the_category( $post->ID );
	$catid = $categories[0]->term_id;
?>
<div id="airlock" class="row clearfix">
	<div id="center-full">
		<ul class="breadcrumb"></ul>
		<div class="row-fluid">
			<div class="span8">
				<?php while(have_posts()):the_post();$img = wp_get_attachment_url(get_post_thumbnail_id($post->ID,'full')); ?>
				<div class="news">
					<div class="avatar">
						<img src="<?php echo $img; ?>" height="60" width="60">
					</div>
					<h2><?php the_title(); ?></h2>
					<p class="byline"><?php the_time( 'd/m/Y  g:i' ) ?></p>
					<hr>
					<?php the_content(); ?>
					<hr>
				</div>
				<?php endwhile; ?>
			</div>
			<div class="span4">
				<div class="news past-news past-news-sidebar">
					<h2>Tin liên quan</h2>
					<?php 
						$args = array(
							'orderby'=>'id',
							'order'=>'DESC',
							'post_type'=>'post',
							'showposts'=>10,
							'cat'=>$catid,
							'post__not_in'=>array($post->ID)
						);
						$lienquan = new WP_Query( $args );
						if($lienquan->have_posts()):
						while($lienquan->have_posts()):$lienquan->the_post();
						$img1 = wp_get_attachment_url(get_post_thumbnail_id($post->ID,'full'));
					?>
					<div class="blog-excerpt">
						<div class="avatar">
							<img src="<?php echo $img1; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
						</div>
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<p class="byline"><?php the_time( 'd/m/Y  g:i' ) ?></p>
					</div>
					<?php endwhile;else: ?>
					Đang cập nhật...
					<?php endif; ?>
				</div>	
			</div>
		</div>
	</div>
</div>
<?php get_footer() ?>