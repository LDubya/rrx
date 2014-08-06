<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */


get_header(); ?>

<div id="primary" class="content-area">

    <div id="content" class="site-content" role="main">
        <article id="post-4" class="post-4 page type-page status-publish hentry post">
            <div class="entry-main">
                <header class="entry-header">
<!--                    <h1 class="entry-title"><a href="http://localhost:8888/wordpress/" title="Permalink to Home" rel="bookmark">Home</a></h1>-->


                </header>
                <!-- .entry-header -->

                <div class="entry-content">
                    <div class="panel-grid" id="pg-4-0">
                        <div class="panel-grid-cell" id="pgc-4-0-0">
                            <div class="panel widget widget_circleicon-widget panel-first-child panel-last-child" id="panel-4-0-0-0">
                                <div class="circle-icon-box circle-icon-position-top circle-icon-hide-box circle-icon-size-small">
                                    <div class="circle-icon-wrapper">
                                        <div class="circle-icon">
                                            <div class="icon-edit"></div>
                                        </div>
                                    </div>

                                    <h4>Editable Home Page</h4>
                                    <p class="text">yonder</p>	<a href="#" class="more-button">Start Editing <i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-grid-cell" id="pgc-4-0-1">
                            <div class="panel widget widget_circleicon-widget panel-first-child panel-last-child" id="panel-4-0-1-0">
                                <div class="circle-icon-box circle-icon-position-top circle-icon-hide-box circle-icon-size-small">
                                    <div class="circle-icon-wrapper">
                                        <div class="circle-icon">
                                            <div class="icon-ok-circle"></div>
                                        </div>
                                    </div>

                                    <h4>Loads of Icons</h4>
                                    <p class="text">This widget uses FontAwesome - giving you hundreds of icons. Or you could disable the icon and use your own image image. Great for testimonials.</p>	<a href="#" class="more-button">Example Button <i></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-grid-cell" id="pgc-4-0-2">
                            <div class="panel widget widget_circleicon-widget panel-first-child panel-last-child" id="panel-4-0-2-0">
                                <div class="circle-icon-box circle-icon-position-top circle-icon-hide-box circle-icon-size-small">
                                    <div class="circle-icon-wrapper">
                                        <div class="circle-icon">
                                            <div class="icon-time"></div>
                                        </div>
                                    </div>

                                    <h4>Saves You Time</h4>
                                    <p class="text">Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don't waste it.</p>	<a href="#" class="more-button">Test Button <i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-grid" id="pg-4-1">
                        <div class="panel-row-style-wide-grey panel-row-style">
                            <div class="panel-grid-cell" id="pgc-4-1-0">
                                <div class="panel widget widget_headline-widget panel-first-child panel-last-child" id="panel-4-1-0-0">
                                    <h1>This Is A Headline Widget</h1>
                                    <div class="decoration">
                                        <div class="decoration-inside"></div>
                                    </div>
                                    <h3>You can customize it and put it where ever you want</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .entry-content -->


            </div>

        </article>
        <!-- #post-4 -->


        <nav role="navigation" id="nav-below" class="site-navigation paging-navigation">
            <h1 class="assistive-text">Post navigation</h1>


        </nav>
        <!-- #nav-below -->

    </div>

</div><!-- #primary .content-area -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>


?>