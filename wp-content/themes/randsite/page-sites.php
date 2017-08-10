<?php 
/*
* Template Name: Sites
*/
get_header(); ?>
<div class="container">
	<div class="row">
		<?php 

	$args = array(
		"post_type" => "sites",
	);


	$the_query = new WP_Query( $args );
	// The Loop
	if ( $the_query->have_posts() ) :
	while ( $the_query->have_posts() ) : $the_query->the_post();
	echo "<div class='col-xs-12'>";
	   the_title(); 
	echo "</div>";
	echo "<div class='col-xs-12'>";
	  the_content(); 
	echo "</div>";
	echo "<div class='col-xs-12'>";
	the_field('calificacion');
	echo "</div>";
	echo "<div class='col-xs-12'>";
	the_field('link');
	echo "</div>";
	endwhile;
	endif;
	?>



	<?php // Reset Post Data
	wp_reset_postdata(); ?>
	</div>
</div>
</body>
</html>
