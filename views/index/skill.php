<?php
$skill=$data['skill'];
?>
<section class="home4-skills">
    <div class="container">
        <div class="row">
            <?php
            foreach ($skill as $row){ ?>
                <div class="col-md-3 col-sm-6 col-xs-13 sm-m-b60">
                <div class="circle-progress" data-color1="#ff403e" data-color2="#ff811b">
                    <div class="inner-bar" data-percent="<?= $row['percentage']; ?>">
                        <span><span class="percent"><?= $row['percentage']; ?></span>%</span>
                    </div>
                    <h4><?= $row['title']; ?></h4>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>