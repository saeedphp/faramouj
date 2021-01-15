<?php
$active='faq-archive';
require ('views/admin/layout.php');
$archive=$data['archive'];
?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4> سوالات متداول بایگانی شده</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button onclick="deleteItem();" type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#profileModal">
                                    حذف
                                </button>
                                <button onclick="recovery();" type="button" id="btn-submit" class="btn btn-secondary mb-2 mr-2">
                                    بازگردانی
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4 Y">
                            <?php
                            if (sizeof($archive)>0){ ?>
                                <form id="tbl-form" method="post">
                                    <table id="individual-col-search" class="table table-hover x">

                                        <thead>
                                        <tr>
                                            <th class="text-center">ردیف</th>
                                            <th> عنوان </th>
                                            <th>توضیحات</th>
                                            <th> نمایش </th>
                                            <th>انتخاب
                                                <input id="select" onclick="selectAll();"  type="checkbox">
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <?php
                                        $i=1;
                                        foreach ($archive as $row){ ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?= $i; ?>
                                                </td>
                                                <td>
                                                    <?= $row['title']; ?>
                                                </td>
                                                <td>
                                                    <?= mb_strimwidth($row['description'], 0, 70, "..."); ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($row['colRight']==1){
                                                        echo 'سمت راست';
                                                    }else{
                                                        echo 'سمت چپ';
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                                                </td>
                                            </tr>
                                            <?php $i++; } ?>

                                        </tbody>

                                        <tfoot>
                                        <tr>
                                            <th class="text-center">ردیف</th>
                                            <th> عنوان </th>
                                            <th>توضیحات</th>
                                            <th> نمایش </th>
                                            <th style="visibility: hidden;">انتخاب
                                                <input id="select" onclick="selectAll();"  type="checkbox">
                                            </th>
                                        </tr>
                                        </tfoot>

                                    </table>
                                </form>
                            <?php }else{ ?>
                                <div class="row" style="display: flex;justify-content: center;text-align: center;">
                                    <div class="col-md-12">
                                        <p style="font-size: 25px;margin-bottom: 16px">
                                            هیچ موردی وجود ندارد!
                                        </p>
                                    </div>
                                    <div class="com-md-12">
                                        <img src="assets/images/svg-icons/paper.png">
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
<!--  END CONTENT AREA  -->
</div>


<script>

    function deleteItem() {

        if (!$('input[type="checkbox"]').is(':checked')){
            swal('خطا','هیچ گزینه ای انتخاب نشده است!','warning');
        }else {
            swal({
                    title: "آیا می خواهید برای همیشه حذف کنید؟",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    cancelButtonText: 'خیر',
                    confirmButtonText: 'بله',
                },
                function (isConfirm) {
                    if (isConfirm){
                        $.ajax({
                            type:'POST',
                            url:'adminfaq/delete',
                            data:$('#tbl-form').serializeArray(),
                            beforeSend: function() {
                                $('#loader-icon').css('display','block');
                                $('#dark').fadeIn(200);
                            },
                            success: function(msg) {
                                setTimeout(function (msg) {
                                    console.log(msg);
                                    $('#loader-icon').css('display','none');
                                    $('#dark').fadeOut(200);
                                },700);
                                $(".x").load('adminfaq/archivefaq' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

    function recovery() {

        if (!$('input[type="checkbox"]').is(':checked')) {
            swal('خطا', 'هیچ گزینه ای انتخاب نشده است!', 'warning');
        } else {
            swal({
                    title: "آیا می خواهید این مورد را برگردانید؟",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    cancelButtonText: 'خیر',
                    confirmButtonText: 'بله',
                },
                function (isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type: 'POST',
                            url: 'adminfaq/recovery',
                            data: $('#tbl-form').serializeArray(),
                            beforeSend: function () {
                                $('#loader-icon').css('display', 'block');
                                $('#dark').fadeIn(200);
                            },
                            success: function (msg) {
                                setTimeout(function (msg) {
                                    $('#loader-icon').css('display', 'none');
                                    $('#dark').fadeOut(200);
                                }, 700);
                                $(".x").load('adminfaq/archivefaq' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

</script>