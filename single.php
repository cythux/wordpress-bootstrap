<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-12">
				<div class="content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
							<?php endwhile; else: ?>
							<p><?php _e('Sorry, no post matched your criteria.'); ?></p>
							<?php endif; ?>
			</div><!-- /.content -->
		</div><!-- /.col-lg-9 col-md-9 col-sm-9 col-12 -->
			<div class="col-lg-3 col-md-3 col-sm-9 col-9"> 
				<h2>Sidebar</h2> <!-- Hier ist Platz für deine Sidebar-->
			</div><!-- /.col-lg-3 /.col-md-3 /.col-sm-3 / .col-3 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
<?php get_footer(); ?>