<?php
$portfolioInfo=$data['portfolioInfo'];
?>

    <div id="content" class="site-content">
        <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title"><?= $portfolioInfo['title']; ?></h1>
                    <ul id="breadcrumbs" class="breadcrumbs">
                        <li><a href="<?= URL; ?>">خانه</a></li>
                        <li class="active"><?= $portfolioInfo['title']; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="p-t70">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-detail xs-p-b20">
                            <span>منتشر شده</span>
                            <strong><?= $portfolioInfo['date']; ?></strong>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-detail xs-p-b20">
                            <span>دسته بندی</span>
                            <strong><?= $portfolioInfo['catTitle']; ?></strong>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="project-detail xs-p-b20">
                            <span>مشتری</span>
                            <strong>لورم ایپسوم</strong>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="otf-social-share clearfix shape-circle">
                            <a class="share-facebook" href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="share-twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="share-pinterest" href="#" data-pin-custom="true" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                            <a class="share-email" href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-t50">
            <div class="container">
                <img src="assets/images/projects/<?= $portfolioInfo['id']; ?>/portfolio.jpg" alt="">
            </div>
        </section>

        <section class="p-t40">
            <div class="container">
                <?= $portfolioInfo['description']; ?>
            </div>
        </section>
        <div class="entry-content project-bottom">
            <div class="container">
                <div class="content-area">
                    <!--<div class="single-portfolio-navigation">
                        <div class="post-nav clearfix">
                            <div class="post-prev"><a href="#" rel="prev"><span class="flaticon-arrow-pointing-to-left"></span>Previous</a></div>
                            <div class="post-next"><a href="#" rel="next">Next<span class="flaticon-arrow-pointing-to-right"></span></a></div>
                        </div>
                    </div>-->
                    <div class="portfolio-related-posts-wrap">
                        <div class="portfolio-related-title-wrap">
                            <h2 class="portfolio-related-title">پروژه های مرتبط</h2>
                        </div>
                        <div class="portfolio-related-posts projects-grid">

                            <div class="project-item">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="#">
                                            <img src="assets/images/projects/project-relate-1.jpg" class="" alt="" >
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="#">Basics Project</a></h5>
                                            <p class="portfolio-cates"><a href="#">Development</a><span>/</span><a href="#">Media</a><span>/</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="#">
                                            <img src="assets/images/projects/project-relate-2.jpg" class="" alt="" >
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="#">App for Health</a></h5>
                                            <p class="portfolio-cates"><a href="#">Development</a><span>/</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="project-item">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="#">
                                            <img src="assets/images/projects/project-relate-3.jpg" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="#">UX Design for Tubus</a></h5>
                                            <p class="portfolio-cates"><a href="http://wpdemo.archiwp.com/onum/Categories/development/">Development</a><span>/</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   