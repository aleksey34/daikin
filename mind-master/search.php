<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package mind
 */

get_header();
?>

	<section id="primary" class="content-area container woocommerce-product-details__short-description">
        <div class="row">
            <main id="main" class="site-main col-12 col-md-7 col-lg-8">

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title">
                        <?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'mind' ), '<span>' . get_search_query() . '</span>' );
                        ?>
                    </h1>
                </header><!-- .page-header -->

                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /**
                     * Run the loop for the search to output the results.
                     * If you want to overload this in a child theme then include a file
                     * called content-search.php and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', 'search' );

                endwhile;
            ?>
                 <div class="pagination-wrapper">
		            <?php
                    // path-  inc/template-tags.php
                    mind_the_pagination();
		            ?>
                </div>
            <?php
            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

            </main><!-- #main -->
            <div class="col-12 col-md-5 col-lg-4" id="sidebar">
                <?php get_sidebar();   ?>
            </div>
        </div>

	</section><!-- #primary -->

<?php

get_footer();
