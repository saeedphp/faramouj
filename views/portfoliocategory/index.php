<?php
$portfolioCat=$data['portfolioCat'];
$catInfo=$data['catInfo'];
?>

    <div id="content" class="site-content">
        <div class="page-header dtable text-center" style="background-image: url(assets/images/bg-page-header.jpg);">
            <div class="dcell">
                <div class="container">
                    <h1 class="page-title"><?= $catInfo['title']; ?></h1>
                    <ul id="breadcrumbs" class="breadcrumbs">
                        <li><a href="<?= URL; ?>">خانه</a></li>
                        <li class="active"><?= $catInfo['title']; ?></li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="p-t110 p-b90">
            <div class="container">

                <div class="project-filter-wrapper">

                    <div class="projects-grid isotope" style="position: relative; overflow: hidden; height: 1600px;">

                        <?php
                        foreach ($portfolioCat as $row){ ?>
                            <div class="project-item media optimization  isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                <div class="projects-box">
                                    <div class="projects-thumbnail">
                                        <a href="portfolio/index/<?= $row['id']; ?>">
                                            <img src="assets/images/projects/<?= $row['id']; ?>/portfolio.jpg" class="" alt="">
                                        </a>
                                    </div>
                                    <div class="portfolio-info s1">
                                        <div class="portfolio-info-inner">
                                            <h5><a href="portfolio/index/<?= $row['id']; ?>"><?= $row['title']; ?></a></h5>
                                            <p class="portfolio-cates"><a><?= $row['catTitle']; ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                </div>

            </div>
        </section>

    </div>

   