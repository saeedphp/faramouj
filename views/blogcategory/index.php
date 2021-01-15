<?php
$blogCat=$data['blogCat'];
$catInfo=$data['catInfo'];
?>

    <div id="content" class="site-content">
        <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title">دسته بندی وبلاگ</h1>
                    <ul id="breadcrumbs" class="breadcrumbs">
                        <li><a href="<?=  URL;?>">خانه</a></li>
                        <li><a href="blog">بلاگ</a></li>
                        <li class="active"><?= $catInfo['title']; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="p-t90 p-b90 blog-grid-content">
            <div class="container">
                <div class="row">
                    <div class="content-area col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-grid pf_3_cols">
                            <?php
                            foreach ($blogCat as $row){ ?>
                                <article class="col-md-4 col-sm-6 col-xs-12 post-box masonry-post-item">
                                <div class="post-inner">
                                    <div class="entry-media">
                                        <div class="post-cat">
                                                <span class="posted-in"> 
                                                    <a href="#" rel="category tag">
                                                        <?= $row['blogTitle']; ?>
                                                    </a>
                                                </span>
                                        </div>
                                        <div class="gallery-post">
                                            <div>
                                                <div class="item-image">
                                                    <img src="assets/images/blog/<?= $row['id']; ?>/blog.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner-post">
                                        <div class="entry-header">

                                            <div class="entry-meta">
                                                <span class="byline">
                                                    <a class="url fn n" href="#"><i class="flaticon-user"></i>
                                                        Tom Black
                                                    </a>
                                                </span>
                                                <span class="posted-on">
                                                        <a href="#">
                                                            <i class="flaticon-clock"></i>
                                                            <time class="entry-date published">
                                                                <?= $row['date']; ?>
                                                            </time>
                                                        </a>
                                                    </span>
                                            </div><!-- .entry-meta -->

                                            <h3 class="entry-title">
                                                <a href="blog-single.html">
                                                    <?= $row['title']; ?>
                                                </a>
                                            </h3>
                                        </div><!-- .entry-header -->

                                        <div class="entry-summary the-excerpt">
                                            <p>
                                                <?= mb_strimwidth($row['description'], 0, 150, "..."); ?>
                                            </p>
                                        </div><!-- .entry-content -->
                                    </div>
                                </div>
                            </article>
                            <?php } ?>

                        </div>

                       <!-- <ul class="page-pagination text-center">
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="next page-numbers" href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></li>
                        </ul>-->
                    </div>


                </div>
            </div>
        </div>
    </div>

   