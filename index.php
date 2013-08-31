<!-- Beispiel 
<div class="container">
	<div class="row">
		!Artikelbereich links, Sidebar rechts 
		<div class="col-9">Artikelbereich</div>
		<div class="col-3">Sidebar</div>
	</div>
</div>

<div class="container">
	<div class="row">
		 !Artikelbereich rechts, Sidebar links 
		<div class="col-3">Sidebar</div>
		<div class="col-9">Artikelbereich</div>
	</div>
</div>
-->

<?php get_header(); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-9">
				<div class="content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); 						?>
							<?php endwhile; else: ?>
						<p><?php _e('Sorry, no post matched your criteria.'); ?></p>
							<?php endif; ?>
						<div id="nav-post"> <!-- Html Eniethis nutzen -->
							<?php posts_nav_link(' ', __('<button class="button"> << Neuere Beiträge</button>'),
							__('<button class="button"> Ältere Beiträge >> </button>')); ?>
						</div>	
				</div><!-- /.content -->
			</div><!-- /.col-lg-9 col-md-9 col-sm-9 col-9 -->
			<div class="col-lg-3 col-md-3 col-sm-3 col-3">
				Hier kommt die Sidebar hin
			</div><!-- /.col-lg-3 col-md-3 col-sm-3 col-3  -->
		</div><!-- /.row -->
	</div><!-- /.container -->
<?php get_footer(); ?>