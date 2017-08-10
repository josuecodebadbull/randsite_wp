<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-4">
			<h1>Hola desde single</h1>
		</div>
		<div class="col-xs-3">
			<h1>Hola desde single</h1>
		</div>
		<?php while(have_posts()): the_post(); ?>
			<?php  the_title(); ?>
			<?php  the_content(); ?>
		<?php endwhile; ?>
	</div>
</div>
</body>
</html>
