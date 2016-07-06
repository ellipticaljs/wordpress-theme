<!DOCTYPE html>
<html class="override">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <title><?php wp_title(); ?></title>
    <script src="<?php echo get_bloginfo("stylesheet_directory"); ?>/components/webcomponentsjs/webcomponents-lite.js"></script>
    <link rel="import" href="<?php echo get_bloginfo("stylesheet_directory"); ?>/imports/import.html">
    <link href="<?php echo get_bloginfo("stylesheet_directory"); ?>/style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<ui-container class="ui-sticky-footer">
    <ui-topbar home-url="<?php echo home_url(); ?>">
        <touch-drawer>
            <touch-header>
                <ui-search>
                    <input type="text" placeholder="search">
                </ui-search>
            </touch-header>
        </touch-drawer>
        <touch-bar>
            <ui-toggle></ui-toggle>
            <ui-brand home>
                <h4>My Brand</h4>
            </ui-brand>
            <touch-icons>
                <touch-icon>
                    <md-more>
                        <menu-item><a>Sign In</a></menu-item>
                        <menu-item><a>Sign Up</a></menu-item>
                    </md-more>
                </touch-icon>
            </touch-icons>
        </touch-bar>
        <section class="center">
            <ui-brand class="left" home>
                <h6>My Brand</h6>
            </ui-brand>
            <ui-menu>
                <menu-item><a href="<?php echo home_url(); ?>/sample-page">Sample</a></menu-item>
                <menu-item><a>Link</a></menu-item>
                <menu-item-dropdown><a>Link</a>
                    <ui-dropdown>
                        <menu-item><a>Sublink</a></menu-item>
                        <menu-item><a>Sublink</a></menu-item>
                        <menu-item><a>Sublink</a></menu-item>
                    </ui-dropdown>
                </menu-item-dropdown>
                <menu-item><a>Link</a></menu-item>
            </ui-menu>
        </section>
        <ui-menu class="right">
            <menu-item><a><span class="hide-for-medium-down icon-core-profile"></span><span class="show-for-medium-down">Sign-In</span></a></menu-item>
            <menu-item><a><span class="hide-for-medium-down icon-core-checkbox"></span><span class="show-for-medium-down">Sign-Up</span></a></menu-item>
        </ui-menu>
    </ui-topbar>
   