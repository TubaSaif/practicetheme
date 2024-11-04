<?php
/**
 * The template for displaying all pages
 *
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
				<div class="pt-row">
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
				</div>
			</main><!-- #main -->
		</div>
	</div>
</div>
<?php
get_sidebar();
get_footer();
