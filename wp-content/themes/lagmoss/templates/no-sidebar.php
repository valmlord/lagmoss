<?php
/**
 * Template Name: No Sidebar
 */
get_header(); ?>
	<div class="container">
		<div class="cart">
			<div id="primary">
				<main id="main" class="site-main">

					<?php

					while ( have_posts() ) : the_post();
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php

								the_content();
								?>
							</div><!-- .entry-content -->

						</article><!-- #post-<?php the_ID(); ?> -->
					<?php
					endwhile; // End of the loop.
					?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
<?php

get_footer();