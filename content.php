<?php
/**
* The default template for displaying content -.
*/
?>
<section class="main">
	<article class="post" id="post-<?php the_ID(); ?>">

		<section class="post-content">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      <p><?php echo the_content(); ?></p>
		</section><!-- /.post-content -->

		<!-- Todo Sidebar -->
		<aside ="meta">
			<p><time datetime="<?php echo get_the_time(Y-m-d-g-i-s); ?>"><?php echo get_the_date(); ?></time></p>
		  <p>Kategorie:<?php the_category(',') ?></p>
		  <p>Schlagworte <?php the_tags(""); ?></p>
		  <p><a href="#comments"><?php comments_number( 'Kommentieren', '1 Kommentar', '% Kommentare' ); ?></a></p>
		</aside><!-- Aside/Sidebar/Meta -->

		<footer>Kommentare</footer>

	</article><!-- /.post -->
</section><!-- /.main -->