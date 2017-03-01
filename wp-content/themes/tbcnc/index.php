<?php get_header()?>
<div id="airlock" class="row clearfix">
	<!-- Category List -->
	<?php get_sidebar(); ?>
	<!-- Page Content -->
	<div class="span10">
		<p></p>
		<div class="clearfix"></div>
		<h4 style="margin-top:5px;">Danh sách sản phẩm nổi bật</h4>
		<div class="clearfix"></div>
		<hr style="margin: 0">
		<ul class="products">
			<!--Show 10 san pham noi bat-->
			<?php 
			$args1 = array(
				'orderby'=>'id',
				'order'=>'DESC',
				'post_type'=>'product',
				'showposts'=>8,
				'meta_query'=>array(array('key'=>'tinh_trang_san_pham','value'=>'noibat','compare'=>'LIKE'))
			);
			$spnoibat = new WP_Query($args1);
			if($spnoibat->have_posts()):
			while($spnoibat->have_posts()):$spnoibat->the_post();
			$img = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(),'full'));
		?>
			<li class="product tile  swiftype-item">
				<!-- Thumbnail -->
				<a class="product-link swiftype-track" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
         <img class="thumb" style="width:100%; height:130px;" src="<?php echo $img; ?>" title="<?php the_title() ?>" alt="<?php the_title() ?>" />
         </a>
				<div class="clearfix"></div>
				<p></p>
				<div class="main" style="min-height:60px;">
					<a class="product-link swiftype-track" href="<?php the_permalink() ?>">
						<span class="name"><?php the_title() ?></span>
					</a>
					<br>
					<span class="sku">
            MSP: <?php echo get_post_meta( get_the_ID(), "_sku", true ) ?>			
			</span>
					<div class="prices">
						<?php 
							global $product; 
							$numleft  = $product->get_stock_quantity(); 
							if($numleft==0) {
						?>
						<span class="price price-sale calculated">Tình trạng: </span> Hết hàng
						<?php }else{ ?>
						<span class="price price-sale calculated">Tình trạng: </span> <?php echo $numleft; ?>
						<?php } ?>
					</div>
					<!-- Description -->
					<p class="description"></p>
				</div>
				<!-- Price -->
				<span style="font-weight:700;">Giá</span> : <span style="color:red;font-weight:bold"> <?php echo number_format(get_post_meta( get_the_ID(), "_regular_price", true )) ?></span>
				<div class="clearfix"></div>
			</li>
			<?php endwhile;else: ?> Đang cập nhật
			<?php endif; ?>
		</ul>
		<h4 style="margin-top:5px;">Danh sách sản phẩm bán chạy</h4>
		<div class="clearfix"></div>
		<hr style="margin: 0">
		<ul class="products">
			<?php 
			$args = array(
				'orderby'=>'id',
				'order'=>'DESC',
				'post_type'=>'product',
				'showposts'=>8,
				'meta_query'=>array(array('key'=>'tinh_trang_san_pham','value'=>'banchay','compare'=>'LIKE'))
			);
			$spbanchay = new WP_Query($args);
			if($spbanchay->have_posts()):
			while($spbanchay->have_posts()):$spbanchay->the_post();
			$img1 = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(),'full'));
		?>
			<!--Show 10 sản phẩm bán chạy-->
			<li class="product tile  swiftype-item">
				<!-- Thumbnail -->
				<a class="product-link swiftype-track" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
         <img class="thumb" style="width:100%; height:130px;" src="<?php echo $img1; ?>" title="<?php the_title() ?>" alt="<?php the_title() ?>" />
         </a>
				<div class="clearfix"></div>
				<p></p>
				<div class="main" style="min-height:60px;">
					<a class="product-link swiftype-track" href="<?php the_permalink() ?>">
						<span class="name"><?php the_title() ?></span>
					</a>
					<br>
					<span class="sku">
            MSP: <?php echo get_post_meta( get_the_ID(), "_sku", true ) ?>			
			</span>
					<div class="prices">
						<?php 
							global $product; 
							$numleft  = $product->get_stock_quantity(); 
							if($numleft==0) {
						?>
						<span class="price price-sale calculated">Tình trạng: </span> Hết hàng
						<?php }else{ ?>
						<span class="price price-sale calculated">Tình trạng: </span> <?php echo $numleft; ?>
						<?php } ?>
					</div>
					<!-- Description -->
					<p class="description"></p>
				</div>
				<!-- Price -->
				<span style="font-weight:700;">Giá</span> : <span style="color:red;font-weight:bold"> <?php echo number_format(get_post_meta( get_the_ID(), "_regular_price", true )) ?></span>
				<div class="clearfix"></div>
			</li>
			<?php endwhile;else: ?> Đang cập nhật
			<?php endif; ?>
		</ul>
		<h4 style="margin-top:5px;">Danh sách sản phẩm mới</h4>
		<div class="clearfix"></div>
		<hr style="margin: 0">
		<ul class="products">
			<?php 
			$args2 = array(
				'orderby'=>'id',
				'order'=>'DESC',
				'post_type'=>'product',
				'showposts'=>12,
			);
			$spmoi = new WP_Query($args2);
			if($spmoi->have_posts()):
			while($spmoi->have_posts()):$spmoi->the_post();
			$img2 = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID(),'full'));
		?>
			<!-- Show 12 sản phẩm random -->

			<li class="product tile  swiftype-item">
				<!-- Thumbnail -->
				<a class="product-link swiftype-track" href="<?php the_permalink() ?>" title="<?php the_title() ?>">
         <img class="thumb" style="width:100%; height:130px;" src="<?php echo $img2; ?>" title="<?php the_title() ?>" alt="<?php the_title() ?>" />
         </a>
				<div class="clearfix"></div>
				<p></p>
				<div class="main" style="min-height:60px;">
					<a class="product-link swiftype-track" href="<?php the_permalink() ?>">
						<span class="name"><?php the_title() ?></span>
					</a>
					<br>
					<span class="sku">
            MSP: <?php echo get_post_meta( get_the_ID(), "_sku", true ) ?>			
			</span>
					<div class="prices">
						<?php 
							global $product; 
							$numleft  = $product->get_stock_quantity(); 
							if($numleft==0) {
						?>
						<span class="price price-sale calculated">Tình trạng: </span> Hết hàng
						<?php }else{ ?>
						<span class="price price-sale calculated">Tình trạng: </span> <?php echo $numleft; ?>
						<?php } ?>
					</div>
					<!-- Description -->
					<p class="description"></p>
				</div>
				<!-- Price -->
				<span style="font-weight:700;">Giá</span> : <span style="color:red;font-weight:bold"> <?php echo number_format(get_post_meta( get_the_ID(), "_regular_price", true )) ?></span>
				<div class="clearfix"></div>
			</li>

			<?php endwhile;else: ?> Đang cập nhật
			<?php endif; ?>
		</ul>
		</div>
	</div>
	<?php get_footer(); ?>