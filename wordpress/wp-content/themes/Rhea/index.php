<?php get_header(); ?>


<div id="content">
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
<?php rhea_postim_image();?>
<div class="entry">

<?php the_excerpt(); ?> 
</div>
<div class='clear'></div>
<a class="rmore" href="<?php the_permalink() ?>">Read More</a>
</div>


</div>

<?php endwhile; ?>

<div class="clear"></div>

<div id="navigation">
<?php if(function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi() ?>
<?php else : ?>
        <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','arclite')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','arclite')) ?></div>
        <div class="clear"></div>
<?php endif; ?>

</div>

<?php else : ?>
	<h1 class="title"><?php _e('Not Found.', 'web2feel'); ?></h1>
	<p><?php _e('Sorry, no posts matched your criteria.', 'web2feel'); ?></p>
<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>