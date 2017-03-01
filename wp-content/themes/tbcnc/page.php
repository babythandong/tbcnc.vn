<?php get_header()?>
<div id="airlock" class="row clearfix">
	<!-- Category List -->
	<?php get_sidebar(); ?>
	<div class="span10">
		<p></p><br>
		<div class="clearfix"></div>
		<hr style="margin: 0">
		<!-- FORM GIO HANG -->
		<?php while(have_posts()):the_post(); ?>
			<?php the_content() ?>
		<?php endwhile; ?>
		<!-- FORM GIO HANG -->
	</div>
</div>
<?php get_footer() ?>