<?php
$info=$data['info'];
?>

<div class="row flex-row justify-content-center">
    <div class="col-md-6 col-xs-12 xs-m-b40">
        <div class="ot-heading">
            <h6><span>چرا توسعه برنامه</span></h6>
            <h2 class="main-heading">با یک متخصص کار کنید
                <br>شرکت سئو</h2>
        </div>
        <p class="m-b35">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
        <?php
        foreach ($info as $row){ ?>
            <div class="ot-progress m-b20">
                <div class="overflow">
                    <span class="pname fleft"><?= $row['title']; ?></span>
                    <span class="ppercent fright"><?= $row['number']; ?>%</span>
                </div>
                <div class="iprogress">
                    <div class="progress-bar" data-percent="<?= $row['number']; ?>%"></div>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="col-md-6 col-xs-12 align-self-center">
        <img src="assets/images/about-us-2.png" alt="">
    </div>
</div>