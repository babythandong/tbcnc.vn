<?php /* 
    Template Name: Sản phẩm
*/
?>
<?php get_header()?>
<div id="airlock" class="row clearfix">
	<!-- Category List -->
	<?php get_sidebar(); ?>
	<!-- Page Content -->

	<!-- Page Content -->
	<div class="span10">
		<ul class="breadcrumb" style="height: 30px; padding-left: 0;">
			<li class="active">
				<script type="text/javascript">
					$(document).ready(function () {
						$('#select_1').attr("selected", "selected");
					});
				</script>
				<?php
					$search = array($_SERVER['QUERY_STRING'], '?');
					$replace = array('', '');
					$currentUrl = str_replace($search,$replace, $_SERVER['REQUEST_URI']);
				?>
					<div class="form-group">
						<select onchange="window.location = $(this).val();" class="form-control input-sm" name="sort_by" style="width:200px;">
						<option selected="selected" value="position:asc">Sắp xếp</option>
						<option value="<?= $currentUrl; ?>?orderby=_regular_price&order=asc">Giá từ thấp - cao</option>
						<option value="<?= $currentUrl; ?>?orderby=_regular_price&order=desc">Giá từ cao - thấp</option>
						<option value="<?= $currentUrl; ?>?orderby=title&order=asc">Tên từ A - Z</option>
						<option value="<?= $currentUrl; ?>?orderby=title&order=desc">Tên Z - A</option>
					</select>
					</div>
			</li>
		</ul>
		<h4>
			Danh sách sản phẩm mới
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
		<ul class="products">
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				// Đoạn 2
				$order2 = array();
				if (isset($_GET['orderby']) && isset($_GET['order']) && $_GET['orderby'] == "title") {
					$order2 = array(
						'orderby' => 'title',
						'order' => $_GET['order']
					);
				}

				// Đoạn 3
				if (isset($_GET['orderby']) && isset($_GET['order']) && $_GET['orderby'] == "_regular_price") {
					$order2 = array(
						'meta_key' => '_regular_price',
						'orderby' => 'meta_value',
						'order' => $_GET['order']
					);
				}

				// Đoạn 4
				$order1 = array(
					'post_type' => 'product',
					'showposts'=>16,
					'paged' => $paged,
				);

				// Đoạn 5
				$order = array_merge($order1, $order2);
				$sp = new WP_Query($order);
				while($sp->have_posts()):$sp->the_post();
				$img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(),'full'));
				?>
				<li class="product tile  swiftype-item">
					<!-- Thumbnail -->
					<a class="product-link swiftype-track" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
					<img class="thumb" style="width:100%; height:130px;" src="<?php echo $img; ?>" title="<?php the_title() ?>" alt="<?php the_title() ?>" />
				</a>
					<div class="main" style="min-height:60px;">
						<a class="product-link swiftype-track" href="<?php the_permalink() ?>">
							<span class="name"><?php the_title(); ?></span>
						</a>
						<br>
						<span class="sku">
							MSP: <?php echo get_post_meta( get_the_ID(), "_sku", true ) ?>               
						</span>
						<div class="prices">
						<?php 
							$stock = get_post_meta( get_the_ID(), "_stock_status", true );
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
					<span style="font-weight:700;">Giá</span> : <span style="color:red;font-weight:bold"> <?php echo number_format(get_post_meta( get_the_ID(), "_regular_price", true )) ?></span>
					<div class="clearfix"></div>
				</li>
				<?php endwhile; ?>
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