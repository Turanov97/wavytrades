<?php /* Template Name: Blog-Page */
// $stm_user_active_subscriptions = stm_user_active_subscriptions(false, get_current_user_id());
// if (empty($stm_user_active_subscriptions['plan_name'])) {
//     wp_redirect('/dashboard/');
// }
get_header();
?>
<div class="stm__blog--section">

<div class="container-fluid py-5 ">
    <h1 class="display-4 color_primary font-weight-bold">
        <?php echo get_the_title() ?>
    </h1>
    <div class="row">
        <?php
        $postsPerPage = 1;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $postsPerPage,
            'category_name' => 'blog',
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="col-md-7 col-lg-8">
                <div class="hero"
                     style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url(<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : '/wp-content/themes/wavytrades/assets/image/place.jpg' ?>);">
                    <div class="container-fluid d-flex align-items-center">
                        <div>
                            <div class="d-flex flex-row">
                                <div class="mb-2">
                                    <a href="<?php echo get_the_permalink() ?>">
                                        <div class="badge rounded-pill" style="background-color: #29abe1;">
                                            <h6 class="mx-4 mb-0 py-1" style="font-weight: 400; letter-spacing: 1px;">
                                                Getting Started </h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-row">
                                <h1 class="entry-title display-3 fs-1 text-white">   <?php echo get_the_title() ?>.</h1>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid d-flex align-items-start text-white">
                        <div class="author-card">
                            <div>
                                <div class="d-flex align-items-center">
                                    <svg id="Layer_1" data-name="Layer 1" class="img-thumbnail rounded-circle"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117.72 117.72">
                                        <defs>
                                            <style>.cls-1 {
                                                    fill: #0e2534;
                                                }</style>
                                        </defs>
                                        <title>circle-st-icon</title>
                                        <path class="cls-1"
                                              d="M116.13,58.86h-1.55a55.72,55.72,0,1,1-16.32-39.4,55.52,55.52,0,0,1,16.32,39.4h3.1a58.82,58.82,0,1,0-58.82,58.82,58.81,58.81,0,0,0,58.82-58.82Z"></path>
                                        <path class="cls-1"
                                              d="M90.78,37a6.55,6.55,0,0,0-6.51,6.51,9.05,9.05,0,0,0,.62,2.79L64.75,66.45A9.05,9.05,0,0,0,62,65.83a9.05,9.05,0,0,0-2.79.62L51.73,59a7.3,7.3,0,0,0,.62-2.48A6.55,6.55,0,0,0,45.84,50a6.36,6.36,0,0,0-6.51,6.51A5.84,5.84,0,0,0,40,59l-9.6,9.6a6,6,0,0,0-3.1-.93,6.51,6.51,0,0,0,0,13,6.36,6.36,0,0,0,6.51-6.51,3.93,3.93,0,0,0-.31-1.86l9.91-9.92a7.3,7.3,0,0,0,2.48.62,5.84,5.84,0,0,0,2.48-.62l7.44,7.44a5.84,5.84,0,0,0-.62,2.48,6.51,6.51,0,1,0,13,0,7.3,7.3,0,0,0-.62-2.48L88,49.41a6,6,0,0,0,2.48.31A6.55,6.55,0,0,0,97,43.21,5.86,5.86,0,0,0,90.78,37Z"></path>
                                    </svg>
                                    <div class="ms-3">
                                        <h4 class="mb-0 fs-sm-6">    <?php echo get_the_author(); ?>. </h4>
                                        <p class="mb-0">
                                            <?php echo get_post_time('j F Y') ?>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3 mb-2 color-text--white" >
                    The Basics of Option Premium: What It Is and How It’s Calculated Introduction Option premium is a
                    critical concept for any trader or investor to understand, as it plays a crucial role in the price
                    of
                    options contracts and the potential profitability of options trades. But for many beginners, the
                    concept
                    of option premium can be confusing and overwhelming. In this post, we’ll break down the basics of
                    option
                    premium and give you the tools you need to understand how...
                </div>
                <p class="h5 mb-5 mb-sm-4 mt-3">
                    <a class="color_primary"
                       href="<?php echo get_the_permalink() ?>">
                        Read more </a>
                </p>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>


        <div class="col-md-5 col-lg-4">
            <div class="mx-md-auto w-100 px-2">
                <div class="most_viewed_posts">
                    <div class="pt-0 pb-3">
                        <h4 class="display-6 color_primary font-weight-bold">Featured Topics</h4>
                        <p></p>
                    </div>

                    <?php $args = array(
                        'posts_per_page' => 6,
                        'post_type' => 'post',
                        'category_name' => 'blog',
                    );
                    $the_query = new WP_Query($args);

                    while ($the_query->have_posts()) {
                        // go ahead
                        $the_query->the_post();
                        ?>


                        <a class="mb-4 d-block" href="<?php echo get_permalink() ?>" target="_blank">
                            <div class="card cart--blog p-4">
                                <h5 class="mb-0"><?php echo get_the_title() ?></h5>
                                <p class="card-text pt-1">
                                    <?php echo get_post_time('j F Y') ?>.
                                    <!--                                <span class="ml-2"> 9 min read </span>-->
                                </p>
                            </div>
                        </a>
                    <?php }
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container align-items-center text-center mt-5 mb-2 px-md-5">
    <h2 class="display-4 color_primary font-weight-bold tabs_stm"> Recent Blogs </h2>
    <p class="px-md-5 w-md-75 d-inline-flex"></p>
</div>

<div class="d-lg-flex d-grid mb-5 justify-content-center align-items-center">
    <div class="text-center d-sm-flex d-grid mb-3 mb-lg-0 justify-content-center align-items-center">
        <div class="mx-1 mb-3 mb-sm-0">
            <a href="/category/blog/getting-started/">
                <div class="badge rounded-pill" style="background-color: #29abe1;">
                    <h6 class="mx-4 mb-0 py-1" style="font-weight: 400; letter-spacing: 1px;">
                        Getting Started</h6>
                </div>
            </a>
        </div>
        <div class="mx-1 mb-3 mb-sm-0">
            <a href="/category/blog/trading-tips-strategies/">
                <div class="badge rounded-pill" style="background-color: #29abe1;">
                    <h6 class="mx-4 mb-0 py-1" style="font-weight: 400; letter-spacing: 1px;">
                        Trading Tips & Strategies </h6>
                </div>
            </a>
        </div>

        <div class="mx-1 mb-3 mb-sm-0">
            <a href="/category/blog/trading-psychology/">
                <div class="badge rounded-pill" style="background-color: #29abe1;">
                    <h6 class="mx-4 mb-0 py-1" style="font-weight: 400; letter-spacing: 1px;">
                        Trading Psychology</h6>
                </div>
            </a>
        </div>

    </div>
    <div class="d-flex align-items-center mx-3">
        <form action="/" data-ajax_url="/wp-admin/admin-ajax.php" method="get"
              class="input-group flex-nowrap free_cont_search">
            <button class="btn btn-link" type="button" id="search_btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-search"
                     viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                </svg>
            </button>
            <input type="text" name="s" class="form-control" id="search" aria-label="Search"
                   aria-describedby="search_btn" placeholder="Search" value="">

            <input type="hidden" name="cat_name" class="form-control" value="blog">
        </form>
    </div>
</div>


<div class="container-lg">


</div>

<div class="container-lg">

    <div id="ajax-posts" class="row post_content">
        <?php
        $postsPerPage = 3;
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => $postsPerPage,
            'category_name' => 'blog',
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
            ?>
            <div class="col-sm-6 col-lg-4 pb-4">
                <div class="post_card_arch">
                    <div class="post_card_img"
                         style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url(<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : '/wp-content/themes/wavytrades/assets/image/place.jpg' ?>);"></div>
                    <div class="card_wrapper px-4">

                        <a class="d-block h-100"
                           href="<?php echo get_the_permalink() ?>">
                            <div class="card cart--blog py-4 px-3">
                                <h5 class="color_primary">
                                    <?php echo get_the_title() ?>
                                </h5>
                                <hr>
                                <div class="author-card">
                                    <div>
                                        <div class="d-flex align-items-center">
                                            <svg id="Layer_1" data-name="Layer 1" class="img-thumbnail rounded-circle"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 117.72 117.72">
                                                <defs>
                                                    <style>.cls-1 {
                                                            fill: #0e2534;
                                                        }</style>
                                                </defs>
                                                <title>circle-st-icon</title>
                                                <path class="cls-1"
                                                      d="M116.13,58.86h-1.55a55.72,55.72,0,1,1-16.32-39.4,55.52,55.52,0,0,1,16.32,39.4h3.1a58.82,58.82,0,1,0-58.82,58.82,58.81,58.81,0,0,0,58.82-58.82Z"></path>
                                                <path class="cls-1"
                                                      d="M90.78,37a6.55,6.55,0,0,0-6.51,6.51,9.05,9.05,0,0,0,.62,2.79L64.75,66.45A9.05,9.05,0,0,0,62,65.83a9.05,9.05,0,0,0-2.79.62L51.73,59a7.3,7.3,0,0,0,.62-2.48A6.55,6.55,0,0,0,45.84,50a6.36,6.36,0,0,0-6.51,6.51A5.84,5.84,0,0,0,40,59l-9.6,9.6a6,6,0,0,0-3.1-.93,6.51,6.51,0,0,0,0,13,6.36,6.36,0,0,0,6.51-6.51,3.93,3.93,0,0,0-.31-1.86l9.91-9.92a7.3,7.3,0,0,0,2.48.62,5.84,5.84,0,0,0,2.48-.62l7.44,7.44a5.84,5.84,0,0,0-.62,2.48,6.51,6.51,0,1,0,13,0,7.3,7.3,0,0,0-.62-2.48L88,49.41a6,6,0,0,0,2.48.31A6.55,6.55,0,0,0,97,43.21,5.86,5.86,0,0,0,90.78,37Z"></path>
                                            </svg>
                                            <div class="ms-3">
                                                <h4 class="mb-0 fs-sm-6"> <?php
                                                    echo get_the_author();
                                                    ?> </h4>
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
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>


    <div id="more_posts" class="btn btn-dark more_posts">
        <span class="btn_span_ajax">Load More</span>
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>

<div class="section_spacer"></div>
</div>

<?php

get_footer();
?>

