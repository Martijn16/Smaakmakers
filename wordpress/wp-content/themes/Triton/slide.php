<script type="text/javascript">
jQuery(document).ready(function() {
jQuery('#slider').s3Slider({
            timeOut: 3000
        });
});
</script>
<div id="slider">
    <ul id="sliderContent">
	<?php 
		$gldcat = get_option('trit_gldcat'); 
		$gldct = get_option('trit_gldct');
		$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
		while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
	?>
		<li class="sliderImage">
                <a href="<?php the_permalink() ?>"> <?php trit_slide_image() ?></a>
                <span class="botom">
				<b><?php the_title(); ?></b>
				<br /> <p><?php the_content_rss('more_link_text', TRUE, '', 50); ?></p>
				</span>
        </li>
        <?php endwhile; ?>   
            <li class="clear sliderImage"></li>
    </ul>
</div>