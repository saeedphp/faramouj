<?php
$realNum=$data['realNum'];
?>
<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 p-t120 p-b20">
                <div class="ot-heading text-center">
                    <h6><span>اعداد واقعی</span></h6>
                    <h2 class="main-heading">از چیزهای بزرگ انتظار داشته باشید
                        <br>آژانس جستجوگرها</h2>
                </div>
            </div>
            <div class="col-md-12 col-xs-12 p-b110">
                <div class="real-numbers font-second">
                    <span class="b-switch active">قبل</span>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                    <span class="a-switch">بعد</span>
                    <div class="chart-boxs clearfix">
                        <img class="img-before" src="assets/images/woman-before.png" alt="">
                        <img class="img-after" src="assets/images/man-after.png" alt="">
                        <?php
                        foreach ($realNum as $row){ ?>

                            <div class="col-md col-md-4">
                                <div class="chart-item">
                                    <h2 class="before" style="display: block;color: <?= $row['pre_number_bg'] ?>">
                                        <?= $row['pre_number'] ?>
                                    </h2>
                                    <h2 class="after" style="display: none;color: <?= $row['post_number_bg'] ?>">
                                        <?= $row['post_number'] ?>
                                    </h2>
                                    <span>
                                        <?= $row['title']; ?>
                                    </span>
                                    <img class="img-box" src="<?= $row['background']; ?>" alt="">
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>