<?php
$active='faq';
require ('views/admin/layout.php');
$faq=$data['faq'];
$faqInfo=$data['faqInfo'];
?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>مدیریت سوالات متداول</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button onclick="deleteCat();" type="button" class="btn btn-warning mb-2 mr-2" data-toggle="modal" data-target="#profileModal">
                                    بایگانی
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
                                    <form id="myform" class="mt-0" method="post">

                                        <div class="form-group">
                                            <input type="text" name="title" class="form-control mb-2" id="exampleInputUsername1" placeholder="عنوان">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="description" class="form-control mb-2" id="exampleInputUsername1" placeholder="توضیحات">
                                        </div>

                                        <div class="row col-12">
                                            <div class="form-group col-md-6">
                                                <label style="display: block;text-align: center;width: auto !important;float: none !important;">سمت راست</label>
                                                <input style="transform: scale(.35)" class="form-control mb-2" type="radio" name="colRight" value="1">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label style="display: block;text-align: center;width: auto !important;float: none !important;">سمت چپ</label>
                                                <input style="transform: scale(.35)" class="form-control mb-2" type="radio" name="colRight" value="0">
                                            </div>
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

                        <div class="table-responsive mb-4">
                            <form id="tbl-form" method="post">
                                <table id="individual-col-search" class="table table-hover x">

                                    <thead>
                                    <tr>
                                        <th class="text-center">ردیف</th>
                                        <th> عنوان </th>
                                        <th>توضیحات</th>
                                        <th> نمایش </th>
                                        <th> ویرایش </th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php
                                    $i=1;
                                    foreach ($faq as $row){ ?>
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
                                                <a style="cursor: pointer;" data-toggle="modal" data-target="#registerModal">
                                                    <i onclick="editFaq(<?= $row['id']; ?>)" class="fa fa-edit"></i>
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
                                        <th class="text-center">ردیف</th>
                                        <th> عنوان </th>
                                        <th>توضیحات</th>
                                        <th> نمایش </th>
                                        <th style="visibility: hidden;"> ویرایش </th>
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

    var editFaqId = '';

    function editFaq(faqId) {

        editFaqId = faqId;

        var url = 'adminfaq/editfaq/' + faqId;
        var data = {};

        $.post(url, data, function (msg) {

            $('input[name=title]').val(msg['title']);
            $('input[name=description]').val(msg['description']);
            $('input[name=colRight]').val(msg['colRight']);

        }, 'json');

    }

    function submitForm(){

        $.ajax({
            type: 'POST',
            url: 'adminfaq/addfaq/'+editFaqId,
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
                $(".x").load('adminfaq' + " .x");
            }
        });

    }


    function deleteCat() {

        if (!$('input[type="checkbox"]').is(':checked')){
            swal('خطا','هیچ گزینه ای انتخاب نشده است!','warning');
        }else {
            swal({
                    title: "آیا می خواهید بایگانی کنید؟",
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
                            url:'adminfaq/archive',
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
                                $(".x").load('adminfaq' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

</script>