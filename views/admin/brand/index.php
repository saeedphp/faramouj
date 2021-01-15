<?php
$active='brand';
require ('views/admin/layout.php');
$brand=$data['brand'];
?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>مدیریت برندها</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button onclick="deleteCat();" type="button" class="btn btn-warning mb-2 mr-2" data-toggle="modal" data-target="#profileModal">
                                    حذف
                                </button>
                                <button type="button" id="btn-submit" class="btn btn-success mb-2 mr-2" data-toggle="modal" data-target="#registerModal">
                                    افزودن
                                </button>
                            </div>
                        </div>
                    </div>


                    <!--modal-->

                    <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header" id="registerModalLabel">
                                    <h4 class="modal-title"> افزودن </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                </div>
                                <div class="modal-body">
                                    <form id="myform" class="mt-0" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <input type="file" name="image" class="form-control mb-2">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="link" class="form-control mb-2" id="exampleInputUsername1" placeholder="لینک">
                                        </div>

                                        <button id="submit" form="myform" class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--modal-->

                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4">
                            <form id="tbl-form" method="post">
                                <table id="individual-col-search" class="table table-hover x">

                                    <thead>
                                    <tr>
                                        <th class="text-center">ردیف</th>
                                        <th>تصویر</th>
                                        <th> لینک </th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php
                                    $i=1;
                                    foreach ($brand as $row){ ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <a style="width: 50px;">
                                                    <img style="width: 50%;" src="assets/images/brand/<?= $row['img']; ?>">
                                                </a>
                                            </td>
                                            <td>
                                                <?= $row['link']; ?>
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
                                        <th style="visibility: hidden;">تصویر</th>
                                        <th> لینک </th>
                                        <th style="visibility: hidden;">انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </tfoot>

                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<div id="output"></div>
<!--  END CONTENT AREA  -->
</div>


<script>

    $('#btn-submit').click(function () {
        $('form#myform').trigger('reset');
    });

    function deleteCat() {

        if (!$('input[type="checkbox"]').is(':checked')){
            swal('خطا','هیچ گزینه ای انتخاب نشده است!','warning');
        }else {
            swal({
                    title: "آیا می خواهید حذف کنید؟",
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
                            url:'adminslider/delete',
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
                                $(".x").load('adminslider' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

</script>