<?php
/**
 * The template for displaying archive pages
 *
 *
 * @package practicetheme
 */

get_header();
?>
<div id="content" class="site-content">
	<div class="pt-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						*/
						get_template_part( 'template-parts/content', get_post_type() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>



			</main><!-- #main -->
		</div>
	</div>
</div>
<?php
get_sidebar();
get_footer();
