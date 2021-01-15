<?php
$tab=$data['tab'];
?>

<section class="z-index-1">
    <div class="section-tab">
        <div class="container">
            <div class="flex-row align-items-end m-b20">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="ot-heading text-light">
                        <h6><span>کسب و کار کوچک خود را بسازید</span></h6>
                        <h2 class="main-heading">رقابت خود را با تسلط<br>به سئو فرآیند محور شروع کنید</h2>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="tab-titles row">
                        <?php
                        $i=0;
                        foreach ($tab as $row){ ?>
                            <div>
                            <div class="col-md text-center">
                                <a class="title-item <?php if ($i==0){echo 'tab-active';} ?>" href="#<?= $row['link']; ?>" tabindex="0">
                                    <div class="icon-main"><span class="<?= $row['icon-class']; ?>"></span></div>
                                    <h6>
                                        <?= $row['title']; ?>
                                    </h6>
                                </a>
                            </div>
                        </div>
                        <?php $i++; } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tab-slider-content" id="content-tabs">
    <div class="container">
        <?php
        foreach ($tab as $row){ ?>
            <div class="flex-row section-content" id="<?= $row['link']; ?>">
                <?= $row['content']; ?>
            </div>
        <?php } ?>
    </div>
</section>