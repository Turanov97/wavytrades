<?php
$current_user = wp_get_current_user();

$theAuthorId = get_the_author_meta('ID');
$getUserUrl = get_avatar_url($theAuthorId);
$stm_user_active_subscriptions = stm_user_active_subscriptions( false, get_current_user_id() );

?>

<aside class="dashboard__sidebar">
    <nav class="dashboard__nav-primary ">
        <a href="/dashboard/account" class="dashboard__profile-nav-item">
                <span class="dashboard__profile-photo"
                      style="background-image: url(<?php echo get_avatar_url($theAuthorId); ?>);"></span>
            <span class="dashboard__profile-name"><?php echo ucfirst($current_user->user_nicename) ?></span>

        </a>
        <ul>
            <li>
            </li>
            <ul class="dash_main_links">
                <li class="is-active">
                    <a href="/dashboard/" target="">
                        <span class="dashboard__nav-item-icon dashicons dashicons-admin-home"></span>
                        <span class="dashboard__nav-item-text">Member Dashboard</span>
                    </a>
                </li>
            </ul>
        </ul>
        <ul>
            <li>
                <p class="dashboard__nav-category">memberships</p>
            </li>
            <ul class="dash_main_links">
                <li class="">
                    <a href="/trade-alerts/" target="">
                        <span class="dashboard__nav-item-icon st-icon-options"></span>
                        <span class="dashboard__nav-item-text">Mastery</span>
                    </a>
                </li>
            </ul>
        </ul>

        <ul>
            <li>
                <p class="dashboard__nav-category">News</p>
            </li>
            <ul class="dash_main_links">
                <li class="">
                    <a href="/news/" target="">
                        <span class="dashboard__nav-item-icon st-icon-courses"></span>
                        <span class="dashboard__nav-item-text">News</span>
                    </a>
                </li>
            </ul>
        </ul>
        <ul>
            <li>
                <p class="dashboard__nav-category">Tools</p>
            </li>
            <ul class="dash_main_links">
                <li class="">
                    <a href="/dashboard/ww/" target="">
                        <span class="dashboard__nav-item-icon st-icon-trade-of-the-week"></span>
                        <span class="dashboard__nav-item-text">Weekly watchlist</span>
                    </a>
                </li>
            </ul>
        </ul>
        <ul>
            <li>
                <p class="dashboard__nav-category">Trading Education</p>
            </li>
            <ul class="dash_main_links">
                <li class="">
                    <a href="/trading-education/" target="">
                        <span class="dashboard__nav-item-icon st-icon-training-room"></span>
                        <span class="dashboard__nav-item-text">Trading Education</span>
                    </a>
                </li>
            </ul>
        </ul>

        <ul>
            <li>
                <p class="dashboard__nav-category">account</p>
            </li>
            <ul class="dash_main_links">

                <li class="">
                    <a href="/dashboard/account/" target="">
                        <span class="dashboard__nav-item-icon st-icon-settings"></span>
                        <span class="dashboard__nav-item-text">My Account</span>
                    </a>
                </li>
            </ul>
        </ul>
    </nav>

    <!--<footer class="dashboard__toggle">-->
    <!--    <button class="dashboard__toggle-button" data-toggle-dashboard-menu="">-->
    <!--        <div class="dashboard__toggle-button-icon">-->
    <!--            <span></span>-->
    <!--            <span></span>-->
    <!--            <span></span>-->
    <!--        </div>-->
    <!--        <span class="framework__toggle-button-label">Dashboard Menu</span>-->
    <!--    </button>-->
    <!--</footer>-->
    <div class="dashboard__overlay" data-toggle-dashboard-menu=""></div>

</aside>
