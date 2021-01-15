<?php
$blogInfo=$data['blogInfo'];
?>

    <div id="content" class="site-content">
        <div class="single-page-header post-box" style="background-image: url(assets/images/blog/<?= $blogInfo['id']; ?>/blog.jpg);">
            <div class="single-bg-overlay"></div>
            <div class="sing-page-header-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-cat">
                                <span class="posted-in"> <a href="#"><?= $blogInfo['catTitle']; ?></a></span>
                            </div>
                            <div class="entry-header">
                                <h1 class="entry-title"><?= $blogInfo['title']; ?></h1>
                                <div class="entry-meta">
                                    <span class="byline"><a class="url fn n" href="#"><i class="flaticon-user"></i> Tom Black</a></span>
                                    <span class="posted-on">
                                                <a href="#"><i class="flaticon-clock"></i><time class="entry-date"><?= $blogInfo['date']; ?></time></a>
                                            </span>
                                    <span class="comment-num"><a href="#"><i class="flaticon-chat"></i><?= $blogInfo['comment']; ?>نظر</a></span>

                                </div><!-- .entry-meta -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="entry-content">
            <div class="container">
                <div class="row">

                    <aside class="widget-area primary-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <section id="author_widget-2" class="widget onum_author-widget">
                            <div class="author-widget_wrapper text-center">
                                <div class="author-widget_image-wrapper">
                                    <img class="author-widget_image img-circle" src="assets/images/author.png" alt="Kate Olson">
                                </div>
                                <h5 class="author-widget_title">مریم رمضانی</h5>
                                <p class="author-widget_text">او مدیرعامل است. او از طرفداران بزرگ اونوم و سئو است.</p>
                                <div class="author-widget_social">
                                    <a class="social-twitter" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="social-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="social-linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </section>
                        <section class="widget widget_categories">
                            <h5 class="widget-title">دسته‌ها</h5>
                            <ul>
                                <li><a href="#">آژانس</a> <span class="posts-count">(1)</span></li>
                                <li><a href="#">کسب و کار</a> <span class="posts-count">(3)</span></li>
                                <li><a href="#">بازاریابی</a> <span class="posts-count">(5)</span></li>
                                <li><a href="#">سئو</a> <span class="posts-count">(3)</span></li>
                            </ul>
                        </section>
                        <section id="search-2" class="widget widget_search">
                            <form role="search" method="get" id="search-form" class="search-form" action="">
                                <input type="search" class="search-field" placeholder="جستجو…" value="" name="s">
                                <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                            </form>
                        </section>
                        <section class="widget widget_recent_news">
                            <h5 class="widget-title">پستهای اخیر</h5>
                            <ul class="recent-news clearfix">

                                <li class="clearfix">
                                    <div class="thumb">
                                        <a href="single-blog.html">
                                            <img src="assets/images/recent-post-1.jpg" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a href="single-blog.html">معماری وب سایت</a></h6>
                                        <span class="post-on"><span class="entry-date">30 آبان, 1398</span></span>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="thumb">
                                        <a href="single-blog.html">
                                            <img src="assets/images/recent-post-2.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a href="single-blog.html">دوستی با موبایل</a></h6>
                                        <span class="post-on"><span class="entry-date">30 آبان, 1398</span></span>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="thumb">
                                        <a href="single-blog.html">
                                            <img src="assets/images/recent-post-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="entry-header">
                                        <h6><a href="single-blog.html">الگوریتم سئو گوگل</a></h6>
                                        <span class="post-on"><span class="entry-date">30 آبان, 1398</span></span>
                                    </div>
                                </li>

                            </ul>
                        </section>
                        <section id="instagram_widget-1" class="widget instagram_widget">
                            <h5 class="widget-title">اینستاگرام</h5>
                            <div class="widget-insta-feeds instafeed-gallery">
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="assets/images/ft-gallery-1.jpg" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="assets/images/ft-gallery-2.jpg" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="assets/images/ft-gallery-3.jpg" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="assets/images/ft-gallery-4.jpg" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="assets/images/ft-gallery-5.jpg" alt=""></a>
                                </div>
                                <div class="instafeed-item">
                                    <a href="#" target="_blank"><img src="assets/images/ft-gallery-6.jpg" alt=""></a>
                                </div>
                            </div>
                        </section>
                        <section id="tag_cloud-1" class="widget widget_tag_cloud">
                            <h5 class="widget-title">برچسب‌ها</h5>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">کسب و کار</a>
                                <a href="#" class="tag-cloud-link">بازاریابی</a>
                                <a href="#" class="tag-cloud-link">سئو</a>
                                <a href="#" class="tag-cloud-link">اس ام ام</a>
                                <a href="#" class="tag-cloud-link">راه حل</a>
                                <a href="#" class="tag-cloud-link">استارت اپ</a>
                                <a href="#" class="tag-cloud-link">استراتژی</a>
                                <a href="#" class="tag-cloud-link">پیشنهاد</a>
                            </div>
                        </section>
                    </aside>

                    <div class="content-area col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <article class="post-box blog-post">
                            <div class="single-post-inner">
                                <div class="entry-media">
                                    <img src="assets/images/post-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="inner-post no-padding-top">
                                <div class="entry-summary">
                                    <?= $blogInfo['description']; ?>
                                </div>
                                <div class="entry-footer clearfix">
                                    <div class="tagcloud">
                                        <?php
                                        $all_tag=$blogInfo['all_tag'];
                                        foreach ($all_tag as $tag){ ?>
                                        <a href="#"><?= $tag['title']; ?></a>
                                        <?php } ?>
                                    </div>
                                    <div class="share-post">
                                        <a class="twit" target="_blank" href="#" title="Twitter"><i class="fab fa-twitter"></i>Twitter</a>
                                        <a class="face" target="_blank" href="#" title="Facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                                        <a class="pint" target="_blank" href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a>
                                        <a class="linked" target="_blank" href="#"><i class="fab fa-linkedin-in"></i>LinkedIn</a>
                                    </div>
                                </div>

                                <div class="related-posts">
                                    <h2>پست های مرتبط</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="post-box post-item">
                                                <div class="post-inner">
                                                    <div class="entry-media">
                                                        <div class="post-cat">
                                                                <span class="posted-in"> 
                                                                    <a href="#">Marketing</a> 
                                                                    <a href="#"">SEO</a>
                                                                </span>
                                                        </div>
                                                        <a href="#"><img src="assets/images/relate-post-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="inner-post">
                                                        <div class="entry-header">
                                                            <div class="entry-meta">
                                                                    <span class="byline"> 
                                                                        <a class="url fn n" href="#"><i class="flaticon-user"></i> Tom Black</a>
                                                                    </span>
                                                                <span class="posted-on">
                                                                        <a href="#"><i class="flaticon-clock"></i> 
                                                                            <time class="entry-date published">November 21, 2019</time>
                                                                        </a>
                                                                    </span>
                                                            </div>
                                                            <h4 class="entry-title"><a href="#">15 SEO Best Practices:  Website Architecture</a></h4>
                                                        </div><!-- .entry-header -->
                                                        <div class="the-excerpt">The basic premise of search engine reputation management is to use the following three...</div><!-- .entry-content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="post-box post-item">
                                                <div class="post-inner">
                                                    <div class="entry-media">
                                                        <div class="post-cat">
                                                                <span class="posted-in"> 
                                                                    <a href="#">Marketing</a> 
                                                                </span>
                                                        </div>
                                                        <a href="#"><img src="assets/images/relate-post-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="inner-post">
                                                        <div class="entry-header">
                                                            <div class="entry-meta">
                                                                    <span class="byline"> 
                                                                        <a class="url fn n" href="#"><i class="flaticon-user"></i> Tom Black</a>
                                                                    </span>
                                                                <span class="posted-on">
                                                                        <a href="#"><i class="flaticon-clock"></i> 
                                                                            <time class="entry-date published">September 24, 2019</time>
                                                                        </a>
                                                                    </span>
                                                            </div>
                                                            <h4 class="entry-title"><a href="#">A Guide to Google SEO Algorithm Updates</a></h4>
                                                        </div><!-- .entry-header -->
                                                        <div class="the-excerpt">The basic premise of search engine reputation management is to use the following three...</div><!-- .entry-content -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>


                </div>
            </div>
        </div>
    </div>

  