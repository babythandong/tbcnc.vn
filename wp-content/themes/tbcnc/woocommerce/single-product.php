<?php get_header()?>
<div id="airlock" class="row clearfix">
	<!-- Category List -->
	<?php get_sidebar(); ?>
	<div class="span10">
		<ul class="breadcrumb"></ul>
		<?php while(have_posts()):the_post(); ?>
			<div class="row product">
				<div class="span3 images">
					<a href="#images-modal" data-toggle="modal">
						<img id="default-image" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>" width="188" height="188">
					</a>
					<p>
						<img src="<?php echo get_template_directory_uri() ?>/images/cc.png">
						<small>Ảnh sản phẩm thuộc về <a target="new">MDPhuong</a></small>
					</p>
				</div>
				<div class="description span4">
					<style>
						table.table-striped p {
							margin-bottom:0;
						}
					</style>
					<table class="table table-striped table-bordered" width="100%" style="font-size:12px">
						<tbody>
							<tr>
								<td colspan="4"><p style="text-align:center"><span><strong>Thông tin chi tiết sản phẩm</strong></span></p></td>
							</tr>
							
							<tr>
								<td colspan="1" width="144"><p><span><strong>Tên sản phẩm:</strong></span></p></td>
								<td colspan="1" width="144"><p><span><strong style="color:#f03528;"><?php the_title(); ?></strong></span></p></td>    
							</tr>
							
							<tr>
								<td colspan="1" width="144"><p><span><strong>Giá:</strong></span></p></td>
								<td colspan="1" width="144"><p><span><strong><?php echo number_format(get_post_meta( get_the_ID(), '_regular_price', true )) ?></strong></span></p></td>    
							</tr>
							
							<tr>
								<td colspan="1" width="144"><p><span><strong>Tình trạng:</strong></span></p></td>
								<?php 
									$stock = get_post_meta( get_the_ID(), "_stock_status", true );
									if($stock=='instock'):
								?>
								<td colspan="1" width="144"><p><span><strong>Còn hàng</strong></span></p></td>    
								<?php else: ?>
								<td colspan="1" width="144"><p><span><strong>Hết hàng</strong></span></p></td>    
								<?php endif; ?>
							</tr>
							
							<tr>
								<td colspan="1" width="144"><p><span><strong>Xuất xứ:</strong></span></p></td>
								<td colspan="1" width="144"><p><span><strong><?php echo get_field('xuat_xu'); ?></strong></span></p></td>    
							</tr>
							
							<tr>
								<td colspan="1" width="144"><p><span><strong>Hãng sản xuất:</strong></span></p></td>
								<td colspan="1" width="144"><p><span><strong><?php echo get_field('hang_san_pham'); ?> </strong></span></p></td>    
							</tr>
							
							<tr>
								<td colspan="1" width="144"><p><span><strong>Mã sản phẩm:</strong></span></p></td>
								<?php 
									$masp = get_post_meta( get_the_ID(), "_sku", true );
									if($masp !=''):
								?>
								<td colspan="1" width="144"><p><span><strong style="color:#f03528;"><?php echo $masp ?></strong></span></p></td>    
								<?php else: ?>
								<td colspan="1" width="144"><p><span><strong style="color:#f03528;">Đang cập nhật</strong></span></p></td>    
								<?php endif; ?>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="span2">
					<div class="pricing">
						<h3 class="text-center"><span class="price calculated"><?php echo number_format(get_post_meta( get_the_ID(), "_regular_price", true )) ?></span></h3>
						<p class="add-buttons">
							<?php 
								global $product; 
								echo apply_filters( 'woocommerce_loop_add_to_cart_link',sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="add-cart button %s product_type_%s buynow">Thêm vào giỏ hàng</a>',esc_url( $product->add_to_cart_url() ),esc_attr( $product->id ),esc_attr( $product->get_sku() ),$product->is_purchasable() ? 'add_to_cart_button' : '',
								esc_attr( $product->product_type ),esc_html( $product->add_to_cart_text() )
								),$product ); 
							?>
						</p>
					</div>
				
				</div>
				
				<div class="description span4" style="width:97%; padding-left:2%;">
					<?php the_content(); ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer() ?>