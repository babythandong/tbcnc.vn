<?php
/* 
    Template Name: Tìm kiếm sản phẩm
*/
?>
<?php get_header()?>
<div id="airlock" class="row clearfix">
	<!-- Category List -->
	<?php get_sidebar(); ?>
	<!-- Page Content -->

	<!-- Page Content -->
	<div class="span10">
		<h4>
			Danh sách sản phẩm từ khóa "<?php echo $_GET['term'] ?>"
			<div class="pull-right" style="font-size:12px; font-weight:normal;">
				<div class="pagination">
					<!--pagination -->
					<?php 
						if(function_exists('wp_paginate')):
    						wp_paginate();
						endif;
					?>
				</div>
			</div>
		</h4>
		<div class="clearfix"></div>
		<hr style="margin: 0">
        <?php
            $KeySearch = $_GET['term'];
            global $wpdb;
            $result = $wpdb->get_results("SELECT * FROM wp_posts WHERE post_title LIKE '%" . $KeySearch . "%' AND post_status='publish' AND post_type='product'");
            
        ?>
		<ul class="products">
            <?php
                if(count($result) >0):
                foreach ($result as $item):
                    $id = $item->ID;
                    $img = wp_get_attachment_url(get_post_thumbnail_id($item->ID));
                    $title = $item->post_title;
            ?>
            <li class="product tile  swiftype-item">
                <!-- Thumbnail -->
                <a class="product-link swiftype-track" href="<?php the_permalink() ?>" title="<?php echo $title; ?>">
                <img class="thumb" style="width:100%; height:130px;" src="<?php echo $img; ?>" title="<?php echo $title; ?>" alt="<?php echo $title; ?>" />
            </a>
                <div class="main" style="min-height:60px;">
                    <a class="product-link swiftype-track" href="<?php the_permalink() ?>">
                        <span class="name"><?php echo $title; ?></span>
                    </a>
                    <br>
                    <span class="sku">
                        MSP: <?php echo get_post_meta( $id, "_sku", true ) ?>               
                    </span>
                    <div class="prices">
                    <?php 
                        $stock = get_post_meta( $id, "_stock_status", true );
                        if($stock=='instock'):
                    ?>
                    <span class="price price-sale calculated">Tình trạng: </span> Còn hàng
                    <?php else: ?>
                    <span class="price price-sale calculated">Tình trạng: </span> Hết hàng
                    <?php endif; ?>
                </div>
                    <!-- Description -->
                    <p class="description"></p>
                </div>
                <!-- Price -->
                <span style="font-weight:700;">Giá</span> : <span style="color:red;font-weight:bold"> <?php echo number_format(get_post_meta( $id, "_regular_price", true )) ?></span>
                <div class="clearfix"></div>
            </li>
            <?php endforeach;else: ?>
            Không tìm thấy sản phẩm nào
            <?php endif; ?>
		</ul>
		<div class="pull-right">
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
	<script type="text/javascript">
		$(document).ready(function () {
			$("li#menu_category_86").addClass('is_open');
			$("li#menu_category_86 ul").show();
			$("a#menu_category_86").addClass('current');
		});
	</script>
</div>
<?php get_footer(); ?>