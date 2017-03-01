<div class="span2 category-nav">
			<style>
				.category-nav ul li {
					background: url(<?php echo get_template_directory_uri() ?>/images/led-box-aqua.gif) 0% 8px no-repeat;
				}

				.category-nav ul li li {
					background: url(<?php echo get_template_directory_uri() ?>/images/led-box-aqua.gif) 0% 6px no-repeat;
				}

				.category-nav ul li a {
					text-indent: 7px;
				}

				.category-nav ul li li a {
					text-indent: 10px;
					font-size: 12px;
					color: #dc271c;
				}

				.category-nav ul li li li a {
					text-indent: 11px;
					font-size: 11px;
				}
			</style>
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
				<div class="home" style="margin-top:20px;">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
			<?php } ?>
			
			
			<div class="home" style="margin-top:20px;">
				<div class="module module-narrow" style="border-right:0;">
					<h2><a>Hỗ trợ 24/24</a></h2>
					<div class="hidden-xs">
						<div class="col-md-12 col-sm-12 col-xs-12">

							<div class="product-module" style="width:161px;">
								<a href="skype:ngochai3011">
									<img class="pull-left" src="<?php echo get_template_directory_uri() ?>/images/contact.jpeg" alt="Hotline" title="Chat hoặc gọi điện thoại theo số:PCB 01224236795"
									    style="width:40px;">
									<span class="products_name" style="margin-left:50px;">Mai Phương</span>
									<span class="price calculated" style="margin-left:50px;">098.3603646</span>
									<p style="text-align:center;">mdphuong@yahoo.com.au</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="home" style="margin-top:20px;">
				<div class="module module-narrow" style="border-right:0;">
					<h2><a>Liên kết link</a></h2>
					<div class="hidden-xs">
						<div class="col-md-12 col-sm-12 col-xs-12">

							<div class="product-module" style="width:161px; padding:0 8px">
								<a href="" target="_blank">
									<p><img src="<?php echo get_template_directory_uri() ?>/images/led-box-aqua.gif"> www.google.com.vn</p>
								</a>
							</div>
							<div class="product-module" style="width:161px; padding:0 8px">
								<a href="" target="_blank">
									<p><img src="<?php echo get_template_directory_uri() ?>/images/led-box-aqua.gif"> www.iforce.vn</p>
								</a>
							</div>

						</div>
					</div>
				</div>
			</div>
			
			<p></p>
			<p></p>
			<p></p>
			<div class="cleafix"></div>
			

		</div>