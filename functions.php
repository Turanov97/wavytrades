<?php
/**
 * wavyTrades functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wavyTrades
 */


if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wavytrades_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on wavyTrades, use a find and replace
        * to change 'wavytrades' to the name of your theme in all the template files.
        */
    load_theme_textdomain('wavytrades', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');


    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );


    add_theme_support('woocommerce');
    add_theme_support('widgets');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__('Primary', 'wavytrades'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'wavytrades_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'wavytrades_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wavytrades_content_width()
{
    $GLOBALS['content_width'] = apply_filters('wavytrades_content_width', 640);
}

add_action('after_setup_theme', 'wavytrades_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wavytrades_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'wavytrades'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'wavytrades'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'wavytrades_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function wavytrades_scripts()
{
    wp_enqueue_style('wavytrades-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('icon-style', get_template_directory_uri() . '/assets/style.css', array(), _S_VERSION);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap-3.4.1-dist/css/bootstrap.min.css', array(), _S_VERSION);
    wp_enqueue_style('dashbord', get_template_directory_uri() . '/assets/bootstrap-3.4.1-dist/css/dashboard.css', array(), _S_VERSION);
    wp_enqueue_style('dashbord', get_template_directory_uri() . '/assets/bootstrap-3.4.1-dist/css/dashicons.min.css', array(), _S_VERSION);
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/bootstrap-3.4.1-dist/css/custom.css', array(), _S_VERSION);

    wp_style_add_data('wavytrades-style', 'rtl', 'replace');

    wp_enqueue_script('wavytrades-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    wp_register_style('fonts-stm', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', false, null);
    wp_enqueue_style('fonts-stm');

}

add_filter('woocommerce_add_to_cart_redirect', 'misha_skip_cart_redirect_checkout');

function misha_skip_cart_redirect_checkout($url)
{
    return wc_get_checkout_url();
}


add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('dashicons');
});

add_action('wp_enqueue_scripts', 'wavytrades_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/shortcode.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


wp_localize_script('twentyfifteen-script', 'ajax_posts', array(
    'ajaxurl' => admin_url('admin-ajax.php'),
    'noposts' => __('No older posts found', 'twentyfifteen'),
));


function more_post_ajax()
{

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
        'paged' => $page,
        'category_name' => 'blog',
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
        ?>

        <div class="col-sm-6 col-lg-4 pb-4">
            <div class="post_card_arch">
                <div class="post_card_img"
                     style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url(<?php echo get_the_post_thumbnail_url() ?>)"></div>
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
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');


add_action('wp_head', 'myplugin_ajaxurl');

function myplugin_ajaxurl()
{

    echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}

// end blog post ajax


// start news post ajax
function more_post_news_ajax()
{

    $ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 3;
    $page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

    header("Content-Type: text/html");

    $args = array(
        'suppress_filters' => true,
        'post_type' => 'post',
        'posts_per_page' => $ppp,
        'paged' => $page,
        'category_name' => 'news',
    );

    $loop = new WP_Query($args);

    $out = '';

    if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
        ?>

        <div class="col-sm-6 col-lg-4 pb-4">
            <div class="post_card_arch">
                <div class="post_card_img"
                     style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url(<?php echo get_the_post_thumbnail_url() ?>)"></div>
                <div class="card_wrapper px-4">

                    <a class="d-block h-100"
                       href="<?php echo get_the_permalink() ?>">
                        <div class="card py-4 px-3">
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
    endif;
    wp_reset_postdata();
    die($out);
}

add_action('wp_ajax_nopriv_more_post_news_ajax', 'more_post_news_ajax');
add_action('wp_ajax_more_post_news_ajax', 'more_post_news_ajax');


//add_filter('woocommerce_login_redirect', 'truemisha_login_redirect', 25, 2);
//
//function truemisha_login_redirect($redirect, $user)
//{
//
//    $redirect = '/dashboard/account';
//    return $redirect;
//
//}


add_filter('woocommerce_account_menu_items', 'add_my_menu_items', 99, 1);

function add_my_menu_items($items)
{
    $my_items = array(
        //  endpoint   => label
//        '2nd-item' => __( '2nd Item', 'my_plugin' ),
//        '3rd-item' => __( '3rd Item', 'my_plugin' ),
    );
    unset($items['dashboard']);
    unset($items['downloads']);
    $items['orders'] = __('My Orders', 'woocommerce');
    $items['edit-address'] = __('Billing Address', 'woocommerce');
    $items['subscriptions'] = __('My Subscription', 'woocommerce');


    $my_items = array_slice($items, 0, 1, true) +
        $my_items +
        array_slice($items, 1, count($items), true);

    return $my_items;
}


function custom_shop_page_redirect()
{
    if (is_shop()) {
        wp_redirect(home_url('/trade-alerts'));
        exit();
    }
}

add_action('template_redirect', 'custom_shop_page_redirect');


add_action('init', 'stm_user_active_subscriptions');

if (!function_exists('stm_user_active_subscriptions')) {
    /**
     * @param bool $get_paused
     * @param int $user_id
     * @return array
     */
    function stm_user_active_subscriptions($get_paused = false, $user_id = 0)
    {
        /*
         * TODO
         * 'Subscriptio_User' will be removed
        */
        $user_subscriptions = (class_exists('Subscriptio_User')) ? Subscriptio_User::find_subscriptions(true, $user_id) : subscriptio_get_customer_subscriptions($user_id);

        $active_subscription = '';
        $has_active = false;

        if ($get_paused) {
            $statuses = array('overdue', 'suspended');
        } else {
            $statuses = array('active', 'trial');
        }

        $status = '';
        foreach ($user_subscriptions as $user_subscription) {
            /*
             * TODO
             * 'Subscriptio_User' will be removed
            */
            if (!$user_subscription) {
                continue;
            }

            $status = (class_exists('Subscriptio_User')) ? $user_subscription->status : $user_subscription->get_status();

            if (in_array($status, $statuses) && !$has_active) {
                $active_subscription = $user_subscription;
                $has_active = true;

            }
        }

        $user_subscriptions = $active_subscription;
        $user_subscription_quota = array();

        if (!empty($user_subscriptions)) {

            /*
             * TODO
             * 'Subscriptio_User' will be removed
             * */
            if (class_exists('Subscriptio_User')) {

                $plan_name = (!empty($user_subscriptions->products_multiple)) ? $user_subscriptions->products_multiple[0]['product_name'] : $user_subscriptions->product_name;
                $customer_id = $user_subscriptions->user_id;
                $product_id = $user_subscriptions->product_id;
                $last_order_id = $user_subscriptions->last_order_id;
                $expires = $user_subscriptions->payment_due_readable;

                if (empty($product_id) && !empty($user_subscriptions->products_multiple) && is_array($user_subscriptions->products_multiple)) {
                    $products = $user_subscriptions->products_multiple;
                    if (!empty($products[0]) && !empty($products[0]['product_id'])) {
                        $product_id = $products[0]['product_id'];
                    }
                }
            } else {
                $initial_order = $user_subscriptions->get_initial_order()->get_data();
                $key = key($initial_order['line_items']);
                $order_data = $initial_order['line_items'][$key]->get_data();
                $plan_name = $order_data['name'];
                $customer_id = $user_subscriptions->get_customer_id();
                $product_id = $order_data['product_id'];
                $last_order_id = $user_subscriptions->get_last_renewal_order_id();
                $expires = (!empty($user_subscriptions->get_scheduled_renewal_payment())) ? $user_subscriptions->get_scheduled_renewal_payment()->format('m/d/Y H:i') : null;
            }

            $user_subscription_quota['user_id'] = $customer_id;
            $user_subscription_quota['product_id'] = $product_id;
            $user_subscription_quota['plan_name'] = $plan_name;
            $user_subscription_quota['status'] = $status;
            $user_subscription_quota['last_order_id'] = $last_order_id;
            $user_subscription_quota['expires'] = $expires;

        }

        return $user_subscription_quota;
    }
}

add_action('wp', 'check_home');
function check_home()
{
    if (is_home() || is_front_page()) {
    } else {
        function my_plugin_body_class_test($classes)
        {
            $classes[] = 'not-front-page';
            return $classes;
        }

        add_filter('body_class', 'my_plugin_body_class_test');
    }
}


if (is_user_logged_in()) {
    function my_plugin_body_class($classes)
    {
        $classes[] = 'account-stm';
        return $classes;
    }

    add_filter('body_class', 'my_plugin_body_class');
}


if (isset($_GET['cat_name'])) {
    function searchcategory($query)
    {
        if ($query->is_search) {
            $query->set('category_name', $_GET['cat_name']);
        }
        return $query;
    }

    add_filter('pre_get_posts', 'searchcategory');
}



// redirect user if user don't sign in
global $wp;
$wp->parse_request();
$current_url = home_url($wp->request);

if (strpos($current_url, 'free-courses')) {
    $user = wp_get_current_user();
    if (empty($user->roles)) {
        wp_redirect('/dashboard/');
    }

}


if (!function_exists('write_log')) {
    function write_log($log)
    {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }

}


