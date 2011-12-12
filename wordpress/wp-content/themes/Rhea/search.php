<?php get_header(); ?>

<div id="content" class="rounded">
<h2 class="pagetitle">Search Results</h2>
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

<?php the_excerpt(); ?> 
</div>
<div class='clear'></div>
<a class="rmore" href="<?php the_permalink() ?>">Read More</a>
</div>


</div>

<?php endwhile; ?>

 <div id="navigation">
<?php

if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
?>
</div>

	<?php else : ?>


<h1>Not Found</h1>


<div class="cover">
<div class="entry">
		<p>Sorry, no post matched your criteria. Try a different search?</p>
				
</div>

</div>
<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>