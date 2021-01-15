<?php
$uri = $_SERVER['REQUEST_URI'];
$active='adduser';
require ('views/admin/layout.php');
$process=$data['process'];
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
                                <h4>افزودن کاربر</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                        </div>
                    </div>

                    <form id="myform" class="mt-0" method="post">

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="text" name="namr" class="form-control mb-2" id="exampleInputUsername1" placeholder="نام">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="username" class="form-control mb-2" id="exampleInputEmail2" placeholder="نام کاربری">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="tel" class="form-control mb-2" id="exampleInputUsername1" placeholder="شماره تلفن">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="code_meli" class="form-control mb-2" id="exampleInputUsername1" placeholder="کد ملی">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="address" class="form-control mb-2" id="exampleInputUsername1" placeholder="آدرس">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="address" class="form-control mb-2" id="exampleInputUsername1" placeholder="آدرس">
                                </div>

                                <div class="form-group">
                                    <label>جنسیت</label>
                                    <input type="radio" name="gender" class="form-control mb-2" id="exampleInputUsername1">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mb-2" id="exampleInputUsername1" placeholder="یمیل">
                                </div>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control mb-2" id="exampleInputUsername1" placeholder="رمز عبور">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="mobile" class="form-control mb-2" id="exampleInputUsername1" placeholder="موبایل">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="code_posti" class="form-control mb-2" id="exampleInputUsername1" placeholder="کد پستی">
                                </div>

                                <div class="form-group">
                                    <input type="text" name="birth" class="form-control mb-2" id="date-picker" placeholder="تولد">

                                    <script>
                                        kamaDatepicker('date-picker');
                                    </script>

                                </div>

                            </div>

                        </div>

                        <a href="http://www.facebook.com/sharer.php?u=http://127.0.0.1/<?= $uri; ?>" target="_blank">Share to FaceBook</a>
                        <a href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://www.example.com">Email</a>

                        <a href="" class="btn btn-primary mt-2 mb-2 btn-block"> اجرای عملیات </a>

                    </form>

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