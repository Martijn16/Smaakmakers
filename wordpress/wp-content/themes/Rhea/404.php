<?php get_header(); ?>

<div id="content" >
<div class="post" id="post-<?php the_ID(); ?>">
<div class="title">

	<h2 style="margin:30px 0px 0px 70px;"><?php _e('Page not Found.', 'web2feel'); ?></h2>

<div class="clear"></div>

</div>
<div class="cover">

<div class="entry">
	<p><?php _e('Sorry, no posts matched your criteria.', 'web2feel'); ?></p>
</div>

</div>


</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>