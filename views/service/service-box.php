<?php
$seoBox=$data['seoBox'];
?>
<section class="p-t110 p-b70">
    <div class="container">
        <div class="row row-rev">

            <div class="col-md-6 col-sm-12 col-xs-12 sm-m-b40">
                <?php
                foreach ($seoBox as $row1){ ?>
                    <?php
                    if ($row1['col-right']==1){ ?>

                        <div class="service-box s-box <?= $row1['class']; ?>">
                            <div class="overlay"></div>
                            <span class="big-number"><?= $row1['number']; ?></span>
                            <div class="number-box"><?= $row1['number']; ?></div>
                            <div class="content-box">
                                <h5><?= $row1['title']; ?></h5>
                                <p><?= $row1['description']; ?></p>
                            </div>
                        </div>

                        <?php } ?>
                <?php } ?>

            </div>

            <div class="col-md-6 col-sm-12 col-xs-12">
                <?php
                foreach ($seoBox as $row1){ ?>
                    <?php
                    if ($row1['col-right']!=1){ ?>

                        <div class="service-box s-box <?= $row1['class']; ?>">
                            <div class="overlay"></div>
                            <span class="big-number"><?= $row1['number']; ?></span>
                            <div class="number-box"><?= $row1['number']; ?></div>
                            <div class="content-box">
                                <h5><?= $row1['title']; ?></h5>
                                <p><?= $row1['description']; ?></p>
                            </div>
                        </div>

                    <?php } ?>
                <?php } ?>
            </div>

        </div>
    </div>
</section>