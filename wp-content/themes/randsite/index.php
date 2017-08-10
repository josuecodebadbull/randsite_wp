<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-4">
			<h1>Hola desde Index</h1>
		</div>
		<div class="col-xs-3">
			<h1>Hola desde Index</h1>
		</div>
	</div>
	<?php while(have_posts()): the_post(); ?>
			<?php  the_title(); ?>
			<?php  the_content(); ?>
		<?php endwhile; ?>
</div>
</body>
<script type="text/javascript">
		$( document ).ready(function() {
			console.log("dfghjkl");
		});
	</script>
</html>
