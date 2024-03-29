<?php
get_header();
?>
<div id="filler" class="fix">
	<div id="main-column" class="fix"><a name="main"></a>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" class="post-page">
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			</div>
		</div>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
	<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
</div>
<?php get_footer(); ?>
