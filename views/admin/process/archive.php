<?php
$active='process-archive';
require ('views/admin/layout.php');
$archive=$data['archive'];
$processInfo=$data['processInfo'];
?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4> فعالیت های بایگانی شده</h4>
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


                    <!--modal-->

                    <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-header" id="registerModalLabel">
                                    <h4 class="modal-title"> افزودن </h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                                </div>
                                <div class="modal-body">
                                    <form id="myform" class="mt-0" method="post">

                                        <div class="form-group">
                                            <input type="text" name="number" class="form-control mb-2" id="exampleInputUsername1" placeholder="شماره">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="icon" class="form-control mb-2" id="exampleInputEmail2" placeholder="آیکون">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="title" class="form-control mb-2" id="exampleInputUsername1" placeholder="عنوان">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="description" class="form-control mb-2" id="exampleInputUsername1" placeholder="توضیحات">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="link" class="form-control mb-2" id="exampleInputUsername1" placeholder="لینک">
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="date" class="form-control mb-2" id="exampleInputUsername1" placeholder="تاریخ">
                                        </div>

                                        <a id="submit" onclick="submitForm();" class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                                    </form>




                                </div>

                            </div>
                        </div>
                    </div>

                    <!--modal-->

                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4 Y">
                            <?php
                            if (sizeof($archive)>0){ ?>
                            <form id="tbl-form" method="post">
                                <table id="individual-col-search" class="table table-hover x">

                                    <thead>
                                    <tr>
                                        <th class="text-center">ردیف</th>
                                        <th>شماره</th>
                                        <th> آیکون </th>
                                        <th> عنوان </th>
                                        <th>توضیحات</th>
                                        <th> لینک </th>
                                        <th> ویرایش </th>
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
                                                <?= $row['number']; ?>
                                            </td>
                                            <td>
                                                <?= $row['icon']; ?>
                                            </td>
                                            <td>
                                                <?= $row['title']; ?>
                                            </td>
                                            <td>
                                                <?= $row['description']; ?>
                                            </td>
                                            <td>
                                                <?= $row['link']; ?>
                                            </td>
                                            <td>
                                                <a data-toggle="modal" data-target="#registerModal">
                                                    <i onclick="editProcess(<?= $row['id']; ?>)" class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <input type="checkbox" name="id[]" value="<?= $row['id']; ?>">
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>

                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>شماره</th>
                                        <th> ایکون </th>
                                        <th> عنوان </th>
                                        <th>توضیحات</th>
                                        <th> لینک </th>
                                        <th> لینک </th>
                                        <th class="invisible"></th>
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

    var editProcessId = '';

    function editProcess(processId) {

        editProcessId = processId;

        var url = 'adminprocess/editprocess/' + processId;
        var data = {};

        $.post(url, data, function (msg) {

            $('input[name=number]').val(msg['number']);
            $('input[name=icon]').val(msg['icon']);
            $('input[name=title]').val(msg['title']);
            $('input[name=description]').val(msg['description']);
            $('input[name=link]').val(msg['link']);

        }, 'json');

    }

    function submitForm(){

        $.ajax({
            type: 'POST',
            url: 'adminprocess/addprocess/'+editProcessId,
            data: $('#myform').serializeArray(),
            beforeSend: function () {
                $('#loader-icon').css('display', 'block');
                $('#dark').fadeIn(200);
                event.preventDefault();
                setTimeout(function (msg) {
                    $('.register-modal').modal( 'hide' );
                }, 700);
            },
            success: function (msg) {
                setTimeout(function (msg) {
                    $('#loader-icon').css('display', 'none');
                    $('#dark').fadeOut(200);
                }, 700);
                $(".x").load('adminprocess' + " .x");
            }
        });

    }


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
                            url:'adminprocess/delete',
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
                                $(".Y").load('adminprocess/archiveprocess' + " .Y");
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
                            url: 'adminprocess/recovery',
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
                                $(".x").load('adminprocess/archiveprocess' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

</script>