<?php get_header()?>
<?php 
    $objects = get_queried_object();
    $catid = $objects->term_id;
    $catname = $objects->name;
?>
<div id="airlock" class="row clearfix">
    <!-- Category List -->
    <?php get_sidebar(); ?>
    <div class="span10">
        <h3><?php echo $catname; ?></h3>
        <div class="clearfix"></div>
        <div class="news past-news">
            <?php 
                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $args = array(
                    'orderby'=>'id',
                    'order'=>'DESC',
                    'paged'=>$paged,
                    'post_type'=>'post',
                    'showposts'=>8,
                    'cat'=>$catid
                );
                $news = new WP_Query($args);
                if($news->have_posts()):
                while($news->have_posts()):$news->the_post();
                $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID,'full'));
            ?>
            <div class="past-news-item clearfix">
                <p class="image">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img src="<?php echo $img; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>">
                    </a>
                </p>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="byline"><?php the_time( 'd/m/Y  g:i' ) ?></p>
                <p><?php echo cutintro(get_field('intro'),50); ?></p>
                <p class="pull-right"><em><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Đọc tiếp »</a></em></p>
            </div>
           <?php endwhile;else: ?>
           Đang cập nhật
           <?php endif; ?>
           <div class="pagination">
				<!--pagination-->
				<?php 
                    if(function_exists('wp_paginate')):
                        wp_paginate();  
                    endif;
                ?>
			</div>
        </div>
    </div>
</div>
<?php get_footer(); ?>