<?php
$benefit=$data['benefit'];
 ?>
<section class="home4-benefits">
    <div class="container">
        <div class="flex-row">

            <div class="col-md-6 col-sm-12 col-xs-12 align-self-center">
                <div class="home4-benefits-right">
                    <div class="ot-heading left-align">
                        <h6><span>مزایای ما
</span></h6>
                        <h2 class="main-heading">تجارت خود را رشد دهید
                            با آژانس بازاریابی ما
                        </h2>
                    </div>
                    <div class="row p-b30">
                        <?php
                        foreach ($benefit as $row){ ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="benefits-block">
                                <h5 class="number"><?= $row['number']; ?>.</h5>
                                <h5><?= $row['title']; ?></h5>
                                <p><?= $row['description']; ?></p>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="home4-benefits-left">
                    <img src="assets/images/image2-home4.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
