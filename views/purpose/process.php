<?php
$process=$data['process'];
?>

<section class="p-t100 p-b120 bg-process">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ot-heading text-center m-b80">
                    <h6><span>چگونه شروع کنیم</span></h6>
                    <h2 class="main-heading">چند گام ساده<br>برای کسب و کار موفق</h2>
                </div>
            </div>
        </div>
        <div class="flex-row justify-content-center">
            <?php
            foreach ($process as $row){

                $path=realpath('assets/images/purpose-process/'.$row['id'].'/process.png');

                ?>
                <div class="col-md-4 col-sm-6 col-xs-12 text-center <?= $row['class']; ?>">
                <div class="process-box">
                    <div class="number-box">0<?= $row['number']; ?></div>
                    <div class="icon-main">
                        <img src="assets/images/purpose-process/<?= $row['id']; ?>/process.png" alt="ll">
                    </div>
                    <div class="content-box">
                        <h5><a href="<?= $row['link']; ?>"><?= $row['title']; ?></a></h5>
                        <p><?= $row['description']; ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
           <!-- <div class="col-md-4 col-sm-6 col-xs-12 text-center sm-m-b40">
                <div class="process-box">
                    <img class="p-arrow" src="assets/images/p-arrow2-1.png" alt="arrow">
                    <div class="number-box">02</div>
                    <div class="icon-main p-b20">
                        <img src="assets/images/process2-1.png" alt="Research &amp; Concept">
                    </div>
                    <div class="content-box">
                        <h5>تحقیق و مفهوم</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                <div class="process-box">
                    <img class="p-arrow" src="assets/images/p-arrow1.png" alt="arrow">
                    <div class="number-box">03</div>
                    <div class="icon-main p-b20">
                        <img src="assets/images/process3-1.png" alt="Project Termination">
                    </div>
                    <div class="content-box">
                        <h5>پایان پروژه</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</section>