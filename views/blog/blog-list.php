<?php
$blog=$data['blog'];
$blogInfo=$data['blogInfo'];
?>

<div class="content-area col-lg-8 col-md-8 col-sm-12 col-xs-12">
    <div class="blog-list">
        <div class="row">
            <?php
            foreach ($blog as $row){

                $len = str_word_count($row['description']);
                $min = floor($len / 300);
                $time = '  زمان مطالعه ' . $min . ' دقیقه';

                ?>
                <div class="col-md-6">
                <article class="post-box">
                    <div class="post-inner">
                        <div class="entry-media">
                            <div class="post-cat">
                                <span class="posted-in">
                                                    <a href="blogcategory/index/<?= $row['blogId']; ?>" rel="category tag"><?= $row['catTitle']; ?></a>
                                                </span>
                            </div>
                            <a href="blog/index/<?= $row['id']; ?>">
                                <img src="assets/images/blog/<?= $row['id']; ?>/blog.jpg" alt="">
                            </a>
                        </div>
                        <div class="inner-post">
                            <div class="entry-header">

                                <div class="entry-meta">
                                    <span class="byline"><a class="url fn n" href="#"><i class="flaticon-user"></i> Tom Black</a></span>
                                    <span class="posted-on">
                                                        <a href="#"><i class="flaticon-clock"></i> <time class="entry-date published"><?= $row['date']; ?></time></a>
                                                    </span>
                                    <span class="comment-num"><a href="#"><i class="flaticon-chat"></i> نظر<?= $row['comment']; ?></a></span>
                                </div><!-- .entry-meta -->
                                <span class="comment-num"><p><i class="flaticon-clock"></i><?= $time; ?></p></span>

                                <h3 class="entry-title"><a href="blog/index/<?= $row['id']; ?>">
                                        <?= $row['title']; ?>
                                    </a></h3>
                            </div><!-- .entry-header -->

                            <div class="entry-summary the-excerpt">
                                <p>
                                    <?= mb_strimwidth($row['description'], 0, 120, "..."); ?>
                                </p>
                            </div><!-- .entry-content -->
                            <div class="ot-button" style="display: flex;justify-content: flex-end;transform: scale(.8);position: relative;right:30px;top:27px;">
                                <a href="blog/index/<?= $row['id']; ?>" class="octf-btn octf-btn-primary octf-btn-icon"><span>
                                ادامه مطلب
                                <i style="left: -40px;transform: scaleX(-1);" class="flaticon-right-arrow-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <?php } ?>
        </div>
    </div>
    <ul class="page-pagination">
        <li><span aria-current="page" class="page-numbers current">1</span></li>
        <li><a class="page-numbers" href="#">2</a></li>
        <li><a class="page-numbers" href="#">3</a></li>
        <li><a class="next page-numbers" href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></li>
    </ul>
</div>