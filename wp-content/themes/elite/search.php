<?php get_header(); ?>

	<div class="page-content padding-small" id="search-container">
		<div class="container">
			<h3 class="search-title"><?php _e('Results for:', MD_THEME_NAME);?> <span><?php echo get_search_query(); ?></span></h3>
			<?php get_template_part('/templates/page/search');?>
		</div>
	</div>
	
<?php get_footer(); ?>