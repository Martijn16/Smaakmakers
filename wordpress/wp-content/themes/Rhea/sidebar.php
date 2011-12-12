<div class="right">

<?php include (TEMPLATEPATH . '/searchform.php'); ?>


<div class="sidebox">
<h3 class="sidetitl"> Popular Posts </h3>	
<div class="featlist">
<?php 
	$my_query = new WP_Query('orderby=comment_count&showposts=5');
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
<div class="fblock">

<a href="<?php the_permalink() ?>">	<?php rhea_thumb_image();?></a>
<h3><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php echo substr($post->post_title,0,20); ?></a></h3>
<p>  <?php the_content_rss('', TRUE, '', 10); ?> </p>

</div>
<?php endwhile; ?>
</div>
</div>	

<div class="sidebox">
<h3 class="sidetitl">Twitter updates</h3>
<?php
$twit = get_option('rhea_twit'); 
include('twitter.php');?>
<?php if(function_exists('twitter_messages')) : ?>
       <?php twitter_messages("$twit") ?>
       <?php endif; ?>
</div> 

<?php include (TEMPLATEPATH . '/sponsors.php'); ?>	

<div class="sidebar">
<ul>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
	<?php endif; ?>
</ul>
</div>

</div>