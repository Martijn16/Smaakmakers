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

	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="clear"></div>

</div>

<div class="cover">

<div class="entry">
<?php the_content('Read the rest of this entry &raquo;'); ?>
<div class="clear"></div>
</div>

</div>

</div>

<?php endwhile; endif; ?>
</div>		

<?php get_sidebar(); ?>
<?php get_footer(); ?>