<?php
$circle=$data['circle'];
?>
<section class="section-content-marketing p-t110 p-b340 bg-light particles-js" data-color="#fe4c1c,#00c3ff,#0160e7" data-id="a1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center m-b35">
                <div class="ot-heading">
                    <h6><span>نتایج قابل اثبات</span></h6>
                    <h2 class="main-heading">SEO یک فرآیند جدی و مهم است ،
                        ما شما رو موفق می کنیم
                    </h2>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 text-center">
                <div class="ot-cprocess">
                    <?php
                    foreach ($circle as $row){ ?>
                        <div class="ot-cprocess-item clearfix <?= $row['class']; ?>">
                        <div class="ot-cprocess-item-number font-second">0<?= $row['number']; ?></div>
                        <div class="ot-cprocess-item-inner">
                            <div class="ot-cprocess-item-dot"></div>
                            <div class="ot-cprocess-item-title font-second">
                                <a href="<?= $row['link']; ?>" style="<?= $row['color']; ?>">
                                    <?= $row['title']; ?>
                                </a>
                            </div>
                            <div class="ot-cprocess-item-desc font-main">
                                <p>
                                    <?= $row['description']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="circle_logo">
                        <img src="assets/images/optimized-nxo9.png" alt="">
                    </div>
                    <svg class="ot-cprocess-circle-chart" height="500" width="500">
                        <circle cx="250" cy="250" r="225" stroke="url(#gradient)" stroke-width="50" fill="none"></circle>
                        <linearGradient id="gradient" gradientTransform="rotate(45)">
                            <stop offset="0%" stop-color="#015be6"></stop>
                            <stop offset="100%" stop-color="#03baee"></stop>
                        </linearGradient>
                    </svg>
                </div>
                <div class="services-content-marketing">
                    <?php
                    foreach ($circle as $row){ ?>
                        <div class="process-box">
                        <div class="number-box">0<?= $row['number']; ?></div>
                        <div class="icon-main"></div>
                        <div class="content-box">
                            <h5>
                                <a href="<?= $row['link']; ?>" style="<?= $row['color']; ?>">
                                    <?= $row['title']; ?>
                                </a>
                            </h5>
                            <p>
                                <?= $row['description']; ?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>