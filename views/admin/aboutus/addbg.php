<?php
$active='aboutusbg';
require ('views/admin/layout.php');
$bg=$data['bg'];
$bgInfo=$data['bgInfo'];
$edit=0;
if (isset($bgInfo['pretitle'])){
    $edit=1;
}
?>
<link rel="stylesheet" type="text/css" href="assets/panel/plugins/dropify/css/dropify.min.css">
<script src="assets/panel/plugins/dropify/js/dropify.js"></script>

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>
                                    <?php
                                    if ($edit == 0) { ?>
                                        افزودن بکگراند جدید
                                    <?php } else { ?>
                                        ویرایش بکگراند

                                    <?php } ?>

                                </h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>

                        </div>
                    </div>

                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4">
                            <form action="adminaboutus/addbg" enctype="multipart/form-data" id="myform" class="mt-0" method="post">

                                <div class="form-group">
                                    <input value="<?php if ($edit == '') {} else {echo $bgInfo['pretitle']; } ?>" type="text" name="pretitle" class="form-control mb-2" id="exampleInputUsername1" placeholder="پیش عنوان">
                                </div>

                                <div class="form-group">
                                            <textarea class="form-control mb-2" name="title" placeholder="عنوان...">
                                                <?php if ($edit == '') {} else {echo $bgInfo['title']; } ?>
                                            </textarea>
                                </div>

                                <div class="form-group">
                                            <textarea class="form-control mb-2" name="posttitle" placeholder="پس عنوان...">
<?php if ($edit == '') {} else {echo $bgInfo['posttitle']; } ?>
                                            </textarea>
                                </div>

                                <div class="form-group">
                                            <textarea class="form-control mb-2" name="description" placeholder="توضیحات...">
<?php if ($edit == '') {} else {echo $bgInfo['description']; } ?>
                                            </textarea>
                                </div>

                                <div class="form-group">
                                    <input type="file" name="image" class="form-control mb-2" id="exampleInputUsername1" placeholder="">
                                </div>

                                <div class="input-group mb-3">
                                    <label class="lbl-title">آپلود تصویر
                                        <abbr class="" title="ضروری" style="color:red;">*</abbr>
                                    </label>
                                    <input name="image" type="file" class="dropify" required>
                                </div>

                                <div class="form-group">
                                    <input value="<?php if ($edit == '') {} else {echo $bgInfo['video']; } ?>" type="text" name="video" class="form-control mb-2" id="exampleInputUsername1" placeholder="ویدیو">
                                </div>

                                <div class="form-group">
                                    <input value="<?php if ($edit == '') {} else {echo $bgInfo['link']; } ?>" type="text" name="link" class="form-control mb-2" id="exampleInputUsername1" placeholder="لینک">
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="date" class="form-control mb-2" id="exampleInputUsername1" placeholder="تاریخ">
                                </div>

                                <button id="submit" form="myform" type="submit" class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!--  END CONTENT AREA  -->
</div>


