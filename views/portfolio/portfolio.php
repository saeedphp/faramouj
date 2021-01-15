<?php
$portfolio=$data['portfolio'];
$portfolioCat=$data['portfolioCat'];
?>

<section class="p-t110 p-b90">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-b20">
                <div class="ot-heading text-center">
                    <h6><span>پروژه های ما</span></h6>
                    <h2 class="main-heading">مشاهده نمونه کار های ما <br>و جزئیات آن برای مشتریان</h2>
                </div>
            </div>
        </div>
        <div class="project-filter-wrapper">

            <!--portfolio categories-->
                <div class="container">
                    <ul class="project_filters">
                        <li><a href="#" data-filter="*" class="selected">همه</a></li>
                        <?php
                        foreach ($portfolioCat as $cat){ ?>
                            <li><a href="#" data-filter=".<?= $cat['link']; ?>"><?= $cat['title']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            <!--portfolio categories-->



            <!--portfolio items-->
                <div class="projects-grid projects-style-2 ">
                <?php
                foreach ($portfolio as $row){ ?>
                    <div class="project-item <?= $row['link']; ?> ">
                        <div class="projects-box">
                            <div class="projects-thumbnail">
                                <a href="portfolio/index/<?= $row['id']; ?>">
                                    <img src="assets/images/projects/<?= $row['id']; ?>/portfolio.jpg" class="" alt="">
                                </a>
                            </div>
                            <div class="portfolio-info">
                                <div class="portfolio-info-inner">
                                    <h5><a href="portfolio/index/<?= $row['id']; ?>"><?= $row['title']; ?></a></h5>
                                    <p class="portfolio-cates"><a href="portfoliocategory/index/<?= $row['catId']; ?>"><?= $row['catTitle']; ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
            <!--portfolio items-->

        </div>
    </div>
</section>