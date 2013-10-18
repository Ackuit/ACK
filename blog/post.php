<?php include('../perch/runtime.php');

perch_layout('global.top', array(
    'title' => 'Ackuit - Human Technology',
));

perch_layout('global.nav', array(
    'blog-toggle' => 'current-menu-item current_page_item active',
));

perch_layout('global.bottom');
?>


<div class="span8 offset4 wrapper">


    <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// MAIN PAGE -->

    <section id="blog" class="main show blog">
        <h1 class="fixed">Blog</h1>
        <div class="row-fluid">
            <div class="offset2 span6">
                <h2 class="fixed"></h2>
            </div>
        </div>
        <div class="content row-fluid">
            <div class="span3 sidebar-blog hidden-phone">
                <aside id="search-2" class="widget widget_search">
                    <h6>Search&#8230;</h6>
                    <form method="get" class="search-form" action="#">
                        <fieldset class="relative">
                            <input type="text" name="s" id="s" class="input-block-level" placeholder="Search ..." value="" />
                            <button type="submit" class="submit" name="submit" id="searchsubmit"></button>
                        </fieldset>
                    </form>
                </aside>
                <aside id="categories-2" class="widget widget_categories">
                    <?php perch_blog_categories(); ?>
                </aside>
                <!-- <aside id="pt_recent_posts_widget-2" class="widget pt_recent_posts_widget">
                    <h6>Latest News</h6>
                    <ul>
                        <li>
                            <a href="blog-post.html" title="Is Google Building a Games Console?" class="image">
                                <img width="74" height="50" src="img/blog/144948918-74x50.jpg" class="attachment-blog-featured-widget wp-post-image" alt="144948918" />
                                <p class="post-title span9">
                                    Is Google Building a Games Console?
                                </p>
                                <span class="post-date span12">June 28, 2013</span>
                            </a>
                        </li>
                        <li>
                            <a href="blog-post.html" title="Google Glass: Operating Room" class="image">
                                <img width="74" height="50" src="img/blog/google-glass-12-of-12-74x50.jpg" class="attachment-blog-featured-widget wp-post-image" alt="google-glass-12-of-12" />
                                <p class="post-title span9">
                                    Google Glass: Operating Room
                                </p>
                                <span class="post-date span12">June 28, 2013</span>
                            </a>
                        </li>
                        <li>
                            <a href="blog-post.html" title="Is It the Dawn of the Encryption App?" class="image">
                                <img width="74" height="50" src="img/blog/Crypto2WEB-74x50.jpg" class="attachment-blog-featured-widget wp-post-image" alt="Crypto2WEB" />
                                <p class="post-title span9">
                                    Is It the Dawn of the Encryption App?
                                </p>
                                <span class="post-date span12">June 28, 2013</span>
                            </a>
                        </li>
                    </ul>
                </aside>
                <aside id="pt_video_widget-2" class="widget pt_video_widget">
                    <h6>Video</h6>
                    <a href="https://www.youtube.com/watch?v=XKcwNIPiGKc" class="popup mfp-iframe">
                        <img src="http://img.youtube.com/vi/XKcwNIPiGKc/hqdefault.jpg">
                        <div class="video-title">
                            <span class="play-icon">&#9656;</span>
                            <p>The Last of Us</p>
                        </div>
                    </a>
                </aside>-->
                <aside id="tag_cloud-2" class="widget widget_tag_cloud">
                    <?php perch_blog_tags(); ?>
                </aside>
                <!--<aside id="text-2" class="widget widget_text">
                    <h6>Welcome to our blog</h6>
                    <div class="textwidget">This is a blog page, it displays your latest or selected posts. You can choose from various post types, layouts.</div>
                </aside>-->
                <aside id="archives-2" class="widget widget_archive">
                    <?php perch_blog_date_archive_years(); ?>
                </aside>
            </div>
            <div class="span8 offset1">
                <div class="post">
                    <?php perch_blog_post(perch_get('s')); ?>

                    <?php perch_blog_author_for_post(perch_get('s')); ?>

                    <div class="meta">
                        <div class="cats">
                            <?php perch_blog_post_categories(perch_get('s')); ?>
                        </div>
                        <div class="tags">
                            <?php perch_blog_post_tags(perch_get('s')); ?>
                        </div>
                    </div>

                    <?php perch_blog_post_comments(perch_get('s')); ?>

                    <?php perch_blog_post_comment_form(perch_get('s')); ?>

                </div>
            </div>
        </div>
    </section>

</div>
</div>
</div>
</html>