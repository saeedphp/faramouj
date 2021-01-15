<?php
$faq=$data['faq'];
 ?>
<section class="p-t100 p-b100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="ot-heading left-align">
                    <h6><span>سوالات متداول</span></h6>
                    <h2 class="main-heading">سوالات متداول</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-xs-12">
                <div class="ot-accordions accordions-gradient">
                    <?php
                    $i=0;
                    foreach ($faq as $row1){ ?>
                        <?php
                        if ($row1['colRight']!=1){ ?>
                            <div class="acc-item <?php if ($i==0){echo 'current';} ?>">
                                <span class="acc-toggle">
                                    <?= $row1['title']; ?>
                                    <i class="down flaticon-arrow-pointing-to-down"></i>
                                    <i class="up flaticon-arrow-pointing-to-up"></i>
                                </span>
                                <div class="acc-content <?php if ($i==0){echo 'active';} ?>" style="<?php if ($i==0){echo 'display: block;';} ?>">
                                    <?= $row1['description']; ?>
                                </div>
                            </div>
                            <?php $i++; } ?>
                    <?php } ?>
                </div>
            </div>

            <div class="col-md-6 col-xs-12 sm-m-b40">
                <div class="ot-accordions accordions-gradient">
                    <?php
                    $i=0;
                    foreach ($faq as $row1){ ?>
                        <?php
                        if ($row1['colRight']==1){ ?>
                            <div class="acc-item <?php if ($i==0){echo 'current';} ?>">
                                <span class="acc-toggle">
                                    <?= $row1['title']; ?>
                                    <i class="down flaticon-arrow-pointing-to-down"></i>
                                    <i class="up flaticon-arrow-pointing-to-up"></i>
                                </span>
                                <div class="acc-content <?php if ($i==0){echo 'active';} ?>" style="<?php if ($i==0){echo 'display: block;';} ?>">
                                    <?= $row1['description']; ?>
                                </div>
                            </div>
                            <?php $i++; } ?>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>
</section>