<?php
?>
<div id="sidebar">

	<?php include (TEMPLATEPATH . '/searchform.php'); ?>

<ul>
<li id="categories">
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
