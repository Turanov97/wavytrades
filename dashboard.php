<?php
/* Template Name: Dashboard */
if (!is_user_logged_in()) {
    wp_redirect("/dashboard/account");

}
get_header();
$current_user = wp_get_current_user();
$theAuthorId = get_the_author_meta('ID');
$getUserUrl = get_avatar_url ($theAuthorId);



?>


<div class="dashboard">
    <?php require_once 'woocommerce/dashboard/dashboard-sidebar.php'?>
    <main class="dashboard__main ">

        <header class="dashboard__header">
            <div class="dashboard__header-left">
                <h1 class="dashboard__page-title">Member Dashboard</h1>
            </div>
            <div class="dashboard__header-right">
<!--                <a href="https://cdn.simplertrading.com/2021/10/06121512/SimplerTrading-Rules-of-the-Room.pdf"-->
<!--                   target="_blank" class="btn btn-xs btn-link">Trading Room Rules</a>-->
                <div class="dropdown display-inline-block">
<!--                    <a href="#" class="btn btn-xs btn-orange btn-tradingroom dropdown-toggle" id="dLabel"-->
<!--                       data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                        <strong>Enter a Trading Room</strong>-->
<!--                    </a>-->
                    <nav class="dropdown-menu dropdown-menu--full-width" aria-labelledby="dLabel">
                        <ul class="dropdown-menu__menu">
                            <li>
                                <a href=""
                                   target="_blank" rel="nofollow"><span class="st-icon-options icon icon--md"></span>
                                    Options Trading Room</a></li>
                            <li>
                                <a href=""
                                   target="_blank" rel="nofollow"><span class="st-icon-moxie icon icon--md"></span>
                                    Moxie Indicator™ Mastery Room</a></li>
                            <li>
                                <a href=""
                                   target="_blank" rel="nofollow"><span
                                            class="st-icon-consistent-growth icon icon--md"></span> Compounding Growth
                                    Room</a></li>
                            <li>
                                <a href=""
                                   target="_blank" rel="nofollow"><span
                                            class="st-icon-chart-patterns icon icon--md mx-2"></span> Chart Patterns
                                    Mastery</a></li>
                            <li><a data-user="37192" class="free_trading_room"
                                   href=""
                                   target="_blank" rel="nofollow"><span
                                            class="st-icon-training-room icon icon--sm"></span> Free Trading Room</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="dashboard__content">
            <div class="dashboard__content-main">
                <!-- Dashboard Walkthrough Banner-->
                <section class="dashboard__content-section">
                    <h2 class="section-title">Memberships</h2>
                    <div class="membership-cards row">


                        <div class="col-sm-6 col-xl-4">
                            <article class="membership-card membership-card--options">
                                <a href="/dashboard/"
                                   class="membership-card__header">
                            <span class="membership-card__icon">
                                <span class="icon icon--lg st-icon-options"></span>
                            </span>
                                    Options
                                </a>
                                <div class="membership-card__actions">
                                    <a href="">Dashboard</a>
                                    <a href=""
                                       target="_blank" rel="nofollow">Trading Room</a>
                                </div>
                            </article>
                        </div>

                    </div>
                </section>

<!--                <section class="dashboard__content-section">-->
<!--                    <h2 class="section-title">Mastery</h2>-->
<!--                    <div class="membership-cards row">-->
<!--                        <div class="col-sm-6 col-xl-4">-->
<!--                            <article class="membership-card membership-card--moxie">-->
<!--                                <a href="https://www.simplertrading.com/dashboard/mm" class="membership-card__header">-->
<!--                            <span class="membership-card__icon">-->
<!--                                <span class="icon icon--lg st-icon-moxie"></span>-->
<!--                            </span>-->
<!--                                    Moxie Indicator™ Mastery-->
<!--                                </a>-->
<!--                                <div class="membership-card__actions">-->
<!--                                    <a href="https://www.simplertrading.com/dashboard/mm">Dashboard</a>-->
<!--                                    <a href="https://chat.simplertrading.com/users/v1/ssoJWT?sessID=5cbe38b55b67506a1f7b06ed&amp;jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NzgwOTM4MDAsImlzcyI6Imh0dHBzOlwvXC93d3cuc2ltcGxlcnRyYWRpbmcuY29tIiwiZXhwIjoxNjc4Njk4NjAwLCJ0eXBlIjoiSldUU1NPIiwibmFtZSI6IkZFUlJBUkkiLCJlbWFpbCI6ImVjcnV6bXVzaWNAZ21haWwuY29tIiwidXNlcklEIjozNzE5MiwicGVybXMiOiJyIiwibWVtYmVyc2hpcHMiOlsib3B0aW9uc2dvbGQiLCJjb21wb3VuZGluZ19ncm93dGhfbWFzdGVyeSIsImNoYXJ0X3BhdHRlcm5zX21hc3RlcnkiLCJocG1yLWluZGljYXRvciIsInZvb2Rvb2xpbmVzIiwibW94aWV0cmFkZXJfbWFzdGVyeSJdLCJtZW1iZXJfc3RhcnRfZGF0ZSI6IjIxLTA2LTIwMjEifQ.XGZZewwn3Qstr-8orwNDub_BTQfCjRAMekjLkluq9CA"-->
<!--                                       target="_blank" rel="nofollow">Trading Room</a>-->
<!--                                </div>-->
<!--                            </article>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="col-sm-6 col-xl-4">-->
<!--                            <article class="membership-card membership-card--consistent-growth">-->
<!--                                <a href="https://www.simplertrading.com/dashboard/cgm" class="membership-card__header">-->
<!--                            <span class="membership-card__icon">-->
<!--                                <span class="icon icon--lg st-icon-consistent-growth"></span>-->
<!--                            </span>-->
<!--                                    Compounding Growth Mastery-->
<!--                                </a>-->
<!--                                <div class="membership-card__actions">-->
<!--                                    <a href="https://www.simplertrading.com/dashboard/cgm">Dashboard</a>-->
<!--                                    <a href="https://chat.simplertrading.com/users/v1/ssoJWT?sessID=60c8f4c5f1b5f93997c36fc2&amp;jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NzgwOTM4MDAsImlzcyI6Imh0dHBzOlwvXC93d3cuc2ltcGxlcnRyYWRpbmcuY29tIiwiZXhwIjoxNjc4Njk4NjAwLCJ0eXBlIjoiSldUU1NPIiwibmFtZSI6IkZFUlJBUkkiLCJlbWFpbCI6ImVjcnV6bXVzaWNAZ21haWwuY29tIiwidXNlcklEIjozNzE5MiwicGVybXMiOiJyIiwibWVtYmVyc2hpcHMiOlsib3B0aW9uc2dvbGQiLCJjb21wb3VuZGluZ19ncm93dGhfbWFzdGVyeSIsImNoYXJ0X3BhdHRlcm5zX21hc3RlcnkiLCJocG1yLWluZGljYXRvciIsInZvb2Rvb2xpbmVzIiwibW94aWV0cmFkZXJfbWFzdGVyeSJdLCJtZW1iZXJfc3RhcnRfZGF0ZSI6IjE0LTA3LTIwMjEifQ.RvZVNgd-zUBVjL3g4FmJgETT83mQUNF9D-5Sh0-7oMY"-->
<!--                                       target="_blank" rel="nofollow">Trading Room</a>-->
<!--                                </div>-->
<!--                            </article>-->
<!--                        </div>-->
<!---->
<!--                        <div class="col-sm-6 col-xl-4">-->
<!--                            <article class="membership-card membership-card--chart-patterns">-->
<!--                                <a href="https://www.simplertrading.com/dashboard/cpm" class="membership-card__header">-->
<!--                            <span class="membership-card__icon">-->
<!--                                <span class="icon icon--lg st-icon-chart-patterns"></span>-->
<!--                            </span>-->
<!--                                    Chart Patterns Mastery-->
<!--                                </a>-->
<!--                                <div class="membership-card__actions">-->
<!--                                    <a href="https://www.simplertrading.com/dashboard/cpm">Dashboard</a>-->
<!--                                    <a href="https://chat.simplertrading.com/users/v1/ssoJWT?sessID=605e3450c94233656b3abcae&amp;jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NzgwOTM4MDAsImlzcyI6Imh0dHBzOlwvXC93d3cuc2ltcGxlcnRyYWRpbmcuY29tIiwiZXhwIjoxNjc4Njk4NjAwLCJ0eXBlIjoiSldUU1NPIiwibmFtZSI6IkZFUlJBUkkiLCJlbWFpbCI6ImVjcnV6bXVzaWNAZ21haWwuY29tIiwidXNlcklEIjozNzE5MiwicGVybXMiOiJyIiwibWVtYmVyc2hpcHMiOlsib3B0aW9uc2dvbGQiLCJjb21wb3VuZGluZ19ncm93dGhfbWFzdGVyeSIsImNoYXJ0X3BhdHRlcm5zX21hc3RlcnkiLCJocG1yLWluZGljYXRvciIsInZvb2Rvb2xpbmVzIiwibW94aWV0cmFkZXJfbWFzdGVyeSJdfQ.Aic6DKMCp0ajiGvQXggnzWYC04__qsqyKhI4OrBX9bU"-->
<!--                                       target="_blank" rel="nofollow">Trading Room</a>-->
<!--                                </div>-->
<!--                            </article>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->
<!---->
<!---->
<!--                <section class="dashboard__content-section">-->
<!--                    <h2 class="section-title">Tools</h2>-->
<!--                    <div class="membership-cards row">-->
<!---->
<!--                        <div class="col-sm-6 col-xl-4">-->
<!--                            <article class="membership-card membership-card--foundation">-->
<!--                                <a href="https://www.simplertrading.com/dashboard/foundation"-->
<!--                                   class="membership-card__header">-->
<!--                        <span class="membership-card__icon">-->
<!--                            <span class="icon icon--lg st-icon-foundation"></span>-->
<!--                        </span>-->
<!--                                    Foundation-->
<!--                                </a>-->
<!--                                <div class="membership-card__actions">-->
<!--                                    <a href="https://www.simplertrading.com/dashboard/foundation">Dashboard</a>-->
<!--                                </div>-->
<!--                            </article>-->
<!--                        </div>-->
<!---->
<!---->
<!--                        <div class="col-sm-6 col-xl-4">-->
<!--                            <article class="membership-card membership-card--training-room">-->
<!--                                <a href="https://www.simplertrading.com/dashboard/free-trading-room" data-user="37192"-->
<!--                                   class="membership-card__header free_trading_room">-->
<!--                    <span class="membership-card__icon">-->
<!--                        <span class="icon icon--md st-icon-training-room"></span>-->
<!--                    </span>-->
<!--                                    Free Trading Room-->
<!--                                </a>-->
<!--                                <div class="membership-card__actions">-->
<!--                                    <a data-user="37192" class="free_trading_room"-->
<!--                                       href="https://www.simplertrading.com/dashboard/free-trading-room">Dashboard</a>-->
<!--                                    <a data-user="37192" class="free_trading_room"-->
<!--                                       href="https://chat.simplertrading.com/users/v1/ssoJWT?sessID=5f52714bf0a40e25f89263dc&amp;jwt=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NzgwOTM4MDAsImlzcyI6Imh0dHBzOlwvXC93d3cuc2ltcGxlcnRyYWRpbmcuY29tIiwiZXhwIjoxNjc4Njk4NjAwLCJ0eXBlIjoiSldUU1NPIiwibmFtZSI6IkZFUlJBUkkiLCJlbWFpbCI6ImVjcnV6bXVzaWNAZ21haWwuY29tIiwidXNlcklEIjozNzE5MiwicGVybXMiOiJyIiwibWVtYmVyc2hpcHMiOlsib3B0aW9uc2dvbGQiLCJjb21wb3VuZGluZ19ncm93dGhfbWFzdGVyeSIsImNoYXJ0X3BhdHRlcm5zX21hc3RlcnkiLCJocG1yLWluZGljYXRvciIsInZvb2Rvb2xpbmVzIiwibW94aWV0cmFkZXJfbWFzdGVyeSJdLCJtZW1iZXJfc3RhcnRfZGF0ZSI6IjAyXC8wMlwvMjAxNyJ9.yMsjIX87J7rxsjoRS-dF0NG43OX3x4ZIV7gUzDus8a0"-->
<!--                                       target="_blank" rel="nofollow">Trading Room</a>-->
<!--                                </div>-->
<!--                            </article>-->
<!--                        </div>-->
<!--                        <div class="col-sm-6 col-xl-4">-->
<!--                            <article class="membership-card membership-card--ww">-->
<!--                                <a href="https://www.simplertrading.com/dashboard/ww" class="membership-card__header">-->
<!--                        <span class="membership-card__icon">-->
<!--                            <span class="icon icon--md st-icon-trade-of-the-week"></span>-->
<!--                        </span>-->
<!--                                    Weekly Watchlist-->
<!--                                </a>-->
<!--                                <div class="membership-card__actions">-->
<!--                                    <a href="https://www.simplertrading.com/dashboard/ww">Dashboard</a>-->
<!--                                </div>-->
<!--                            </article>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </section>-->


                <!--fwp-loop-->


                <div class="dashboard__content-section u--background-color-white">

                    <section>
                        <div class="row">
                            <div class="col-sm-6 col-lg-5">
                                <h2 class="section-title-alt section-title-alt--underline">Weekly Watchlist</h2>
                                <div class="hidden-md d-lg-none pb-2">
                                    <a class="" href="">
                                        <img src="http://tourism.stylemix.biz/wp-content/uploads/2022/11/AdobeStock_239145367-scaled.jpeg"
                                             alt="Weekly Watchlist image" class="u--border-radius">
                                    </a>
                                </div>
                                <h4 class="h5 u--font-weight-bold">Weekly Watchlist with Raghee Horner</h4>
                                <div class="u--hide-read-more">
                                    <p>Week of February 27, 2023.</p>
                                </div>
                                <a href=""
                                   class="btn btn-tiny btn-default">Watch Now</a>
                            </div>
                            <div class="col-sm-6 col-lg-7 hidden-xs hidden-sm d-none d-lg-block">
                                <a href="">
                                    <img src="http://tourism.stylemix.biz/wp-content/uploads/2022/11/AdobeStock_239145367-scaled.jpeg"
                                         alt="Weekly Watchlist image" class="u--border-radius">
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <aside class="dashboard__content-sidebar">
                <section class="content-sidebar__section">
                </section>
            </aside>
        </div>
    </main>
</div>

<?php
get_footer();
?>
