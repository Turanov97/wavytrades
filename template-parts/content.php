<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wavyTrades
 */

?>

<div class="col-sm-6 col-lg-4 pb-4" id=" test post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post_card_arch">
        <div class="post_card_img" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url(<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : '/wp-content/themes/wavytrades/assets/image/place.jpg'?>)"></div>
        <div class="card_wrapper px-4">
            <a class="d-block " href="<?php echo get_the_permalink()?>">
                <div class="card py-4 px-3">
                    <h5 class="color_primary"><?php echo get_the_title() ?></h5>
                    <hr>
                    <div class="author-card">
                        <div>
                            <div class="d-flex align-items-center">
                                <svg id="Layer_1" data-name="Layer 1" class="img-thumbnail rounded-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117.72 117.72"><defs><style>.cls-1{fill:#0e2534;}</style></defs><title>circle-st-icon</title><path class="cls-1" d="M116.13,58.86h-1.55a55.72,55.72,0,1,1-16.32-39.4,55.52,55.52,0,0,1,16.32,39.4h3.1a58.82,58.82,0,1,0-58.82,58.82,58.81,58.81,0,0,0,58.82-58.82Z"></path><path class="cls-1" d="M90.78,37a6.55,6.55,0,0,0-6.51,6.51,9.05,9.05,0,0,0,.62,2.79L64.75,66.45A9.05,9.05,0,0,0,62,65.83a9.05,9.05,0,0,0-2.79.62L51.73,59a7.3,7.3,0,0,0,.62-2.48A6.55,6.55,0,0,0,45.84,50a6.36,6.36,0,0,0-6.51,6.51A5.84,5.84,0,0,0,40,59l-9.6,9.6a6,6,0,0,0-3.1-.93,6.51,6.51,0,0,0,0,13,6.36,6.36,0,0,0,6.51-6.51,3.93,3.93,0,0,0-.31-1.86l9.91-9.92a7.3,7.3,0,0,0,2.48.62,5.84,5.84,0,0,0,2.48-.62l7.44,7.44a5.84,5.84,0,0,0-.62,2.48,6.51,6.51,0,1,0,13,0,7.3,7.3,0,0,0-.62-2.48L88,49.41a6,6,0,0,0,2.48.31A6.55,6.55,0,0,0,97,43.21,5.86,5.86,0,0,0,90.78,37Z"></path></svg>
                                <div class="ms-3">
                                    <h4 class="mb-0 fs-sm-6"> <?php echo ucfirst(get_the_author()) ?> </h4>
                                    <p class="mb-0">
                                        <?php echo get_post_time('j F Y') ?>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>


<!--	<header class="entry-header">-->
<!--		--><?php
//		if ( is_singular() ) :
//			the_title( '<h1 class="entry-title display-3 color_primary pb-4">', '</h1>' );
//		else :
//			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
//		endif;
//
//		if ( 'post' === get_post_type() ) :
//			?>
<!--			<div class="entry-meta">-->
<!--				--><?php
//				wavytrades_posted_on();
//				wavytrades_posted_by();
//				?>
<!--			</div>-->
            <!-- .entry-meta -->
<!--		--><?php //endif; ?>
<!--	</header>-->
    <!-- .entry-header -->

<!--	--><?php //wavytrades_post_thumbnail(); ?>

<!--	<div class="entry-content">-->
<!--		--><?php
//		the_content(
//			sprintf(
//				wp_kses(
//					/* translators: %s: Name of current post. Only visible to screen readers */
//					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wavytrades' ),
//					array(
//						'span' => array(
//							'class' => array(),
//						),
//					)
//				),
//				wp_kses_post( get_the_title() )
//			)
//		);
//
//		wp_link_pages(
//			array(
//				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wavytrades' ),
//				'after'  => '</div>',
//			)
//		);
//		?>
<!--	</div><.entry-content -->

	<footer class="entry-footer">
<!--		--><?php //wavytrades_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</div><!-- #post-<?php the_ID(); ?> -->
