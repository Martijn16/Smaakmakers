<script type="text/javascript">
jQuery(function() {
jQuery(".mygallery").jCarouselLite({
btnNext: ".nextb",
btnPrev: ".prevb",
visible: 3,
speed: 1000,
easing: "backout",
auto:3000		
    });

});
</script>

<div id="slidearea" class="rounded inshadow">

<div id="gallerycover">
<div class="mygallery">

<ul>
<?php 
	$gldcat = get_option('rhea_gldcat'); 
	$gldct = get_option('rhea_gldct');
	$my_query = new WP_Query('category_name='.$gldcat.'&showposts='.$gldct.'');
	while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
?>
 	<li>
 		<div class="mytext dropshadow">
		<a href="<?php the_permalink() ?>">
			<?php rhea_slider_image();?>
		</a>


		</div>   	
 	</li>
	<?php endwhile; ?>
</ul>

<div class="clear"></div>  
	
</div>
</div>


   <a href="#" class="prevb"></a>
   <a href="#" class="nextb"></a>  

 
</div>