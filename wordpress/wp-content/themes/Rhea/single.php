<?php get_header(); ?>

<div id="content" >

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">
	<div class='datebox'>
		<span class='date'><?php the_time('d'); ?></span><br/>
		<span class='month'><?php the_time('M'); ?></span>
	</div>
	<div class="postmeta">
		<span class="author"> Posted by <?php the_author(); ?></span> 
		<span class="comm"><?php comments_popup_link('0 Comment', '1 Comment', '% Comments'); ?></span>	
	</div>	
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="clear"></div>

</div>
<div class="cover">

<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>
<?php include (TEMPLATEPATH . '/ad1.php'); ?>
<div class="clear"></div>
<?php wp_link_pages(array('before' => '<p><strong>Pages: </strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>

</div>


</div>



<?php comments_template(); ?>
<?php endwhile; else: ?>

		<h1 class="title">Not Found</h1>
		<p>I'm Sorry,  you are looking for something that is not here. Try a different search.</p>

<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>