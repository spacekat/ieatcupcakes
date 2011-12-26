<?php
?>
<div class="secondary-column">
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar - Index') ) : else : ?>
	<?php endif; ?>
</div>
<div id="sidebar">

<ul>
<li id="categories"><h2><?php _e('Categories'); ?></h2>
	<ul>
	<?php wp_list_cats(array('order' => 'DESC','orderby' => 'ID',)); ?>
	</ul>
</li>
</ul>

<ul>
<li><h2>Archives</h2>
	<ul>
	<?php wp_get_archives('type=monthly'); ?>
	</ul>
</ul>

</div>
