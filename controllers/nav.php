<?php
function nav_brand()
{
    echo '
        <li class="sidebar-brand">
            <a href="#">'.
                '$this->get_name()'.'
            </a>
        </li>';
}

function nav_dashboard()
{
    echo '<li><a href="index.php">Home</a></li>';
}

function nav_profile()
{
    echo '<li><a href="profile.php">Profile</a></li>';
}

function nav_body_start()
{
    // wrapper
    echo '<div id="wrapper"><div class="overlay"></div>';

    // sidebar wrapper
    echo '<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">';

    // list
    nav_brand();
    nav_dashboard();
    nav_profile();

    // sidebar wrapper
    echo '</ul></nav>';

    // page content wrapper
    echo '<div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
    ';
}

function nav_body_close()
{
    // page content wrapper
    echo '</div></div></div></div>';

    // wrapper
    echo '</div>';

    // jQuery -- does not work with DataTable CDN
    echo '
    <!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    ';

    // compiled plugins
    echo '
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/nav.js"></script>
    ';
}
