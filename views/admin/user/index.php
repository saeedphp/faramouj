<?php
$active='user';
require ('views/admin/layout.php');
$user=$data['user'];
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
                                <h4>مدیریت کاربران</h4>
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


                    <div class="widget-content widget-content-area">

                        <div class="table-responsive mb-4">
                            <form id="tbl-form" method="post">
                                <table id="individual-col-search" class="table table-hover x">

                                    <thead>
                                    <tr>
                                        <th class="text-center">ردیف</th>
                                        <th>نام</th>
                                        <th> نام کاربری </th>
                                        <th> ایمیل </th>
                                        <th> رمز عبور </th>
                                        <th>شماره تلفن</th>
                                        <th> موبایل </th>
                                        <th> آدرس </th>
                                        <th> سطح دسترسی </th>
                                        <th> ویرایش </th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php
                                    $i=1;
                                    foreach ($user as $row){ ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $row['name']; ?>
                                            </td>
                                            <td>
                                                <?= $row['username']; ?>
                                            </td>
                                            <td>
                                                <?= $row['email']; ?>
                                            </td>
                                            <td>
                                                <?= $row['password']; ?>
                                            </td>
                                            <td>
                                                <?= $row['tel']; ?>
                                            </td>
                                            <td>
                                                <?= $row['mobile']; ?>
                                            </td>
                                            <td>
                                                <?= $row['address']; ?>
                                            </td>
                                            <td>
                                                <?= $row['title']; ?>
                                            </td>
                                            <td>
                                                <a style="cursor: pointer;" data-toggle="modal" data-target="#registerModal">
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
                                        <th class="text-center">ردیف</th>
                                        <th>نام</th>
                                        <th> نام کاربری </th>
                                        <th> ایمیل </th>
                                        <th> رمز عبور </th>
                                        <th>شماره تلفن</th>
                                        <th> موبایل </th>
                                        <th> آدرس </th>
                                        <th> سطح دسترسی </th>
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
                            url:'adminprocess/archive',
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
                                $(".x").load('adminprocess' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

</script>