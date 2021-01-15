<?php
$team=$data['team'];
?>

<div class="row p-b40">
    <div class="col-sm-8 xs-m-b40">
        <div class="ot-heading">
            <h6><span>تیم حرفه ای</span></h6>
            <h2 class="main-heading">با لیدر تیم ما ملاقات کنید</h2>
        </div>
        <p class="m-b0">اگر ما یک “تیم حرفه ای” داشته باشیم ، مردم جذب ما خواهند شد.
            ما فقط تیم حرفه ای داریم
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-12 p-b155">
        <div class="team-slider">
            <?php
            foreach ($team as $row){ ?>
                <div class="team-wrap">
                <div class="team-thumb">
                    <img src="assets/images/team/<?= $row['id']; ?>/team.jpg" alt="">
                </div>
                <div class="team-info">
                    <h4><?= $row['title']; ?></h4>
                    <span><?= $row['position']; ?></span>
                    <div class="team-social">
                        <a class="twitter" target="_blank" href="<?= $row['twitter']; ?>"><i class="fab fa-twitter"></i></a>
                        <a class="facebook" target="_blank" href="<?= $row['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="pinterest" target="_blank" href="<?= $row['pinterest']; ?>"><i class="fab fa-pinterest-p"></i></a>
                        <span class="flaticon-add-1"></span>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>