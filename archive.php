<?php get_header(); ?>

	<div id="content">
	
	<?php if (have_posts()) : ?>
	
 	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

 	<?php /* If this is a category archive */ if (is_category()) { ?><h2 class="title"><?php single_cat_title(); ?></h2>

	<?php /* If this is a tagged archive */ } elseif (is_tag()) { ?>	<h2 class="title">Articles tagged with: <?php single_tag_title(); ?></h2>

 	<?php /* If this is a daily archive */ } elseif (is_day()) { ?>	<h2 class="title">Articles Archive for <?php the_time('j F Y'); ?></h2>

 	<?php /* If this is a monthly archive */ } elseif (is_month()) { ?><h2 class="title">Articles Archive for <?php the_time('F Y'); ?></h2>
 	
	<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
	<h2 class="title">Articles Archive for Year <?php the_time('Y'); ?></h2>

 	<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
	<h2 class="title">The Archives</h2>
 	 <?php } ?>

	<div id="archive">
		
	<?php while (have_posts()) : the_post(); ?>
	
			<div class="clearfloat">
	<div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
	<div class="meta"><?php the_time('j M Y') ?></div>	
	
	<div class="spoiler">
	

	<?php the_excerpt(); ?>
	</div>

	</div>

	<?php endwhile; ?>
	
	<div class="navigation">

	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
			else { ?>

			<div class="right"><?php next_posts_link('Next Page &raquo;') ?></div>
			<div class="left"><?php previous_posts_link('&laquo; Previous Page') ?></div>
			<?php } ?>


	</div>
	
	<?php else : ?>
	
	<h2 class="title">No posts found. Try a different search?</h2>
	
	<?php endif; ?>

	</div>
	
	</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
