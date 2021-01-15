<?php
$active='menu';
require ('views/admin/layout.php');
$menu=$data['menu'];
$menuInfo=$data['menuInfo'];
?>


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row col-12">
                            <div class="col-xl-4 col-md-4 col-sm-12">
                                <h4>مدیریت منو</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12">

                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-12" style="display: flex;justify-content: flex-end;">
                                <button onclick="deleteCat();" type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#profileModal">
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

                                    <form class="mt-0" id="myform" method="post" data-parsley-validate="" novalidate="">

                                        <div class="form-group">
                                            <label class="lbl-title">
                                                <abbr style="color:red;">*</abbr>
                                            </label>
                                            <input type="text" required name="title" class="form-control mb-2" id="exampleInputUsername1" placeholder="عنوان منو">
                                        </div>

                                        <div class="form-group">
                                            <label class="lbl-title">
                                                <abbr style="color:red;">*</abbr>
                                            </label>
                                            <input type="text" required name="link" class="form-control mb-2" id="exampleInputUsername1" placeholder="لینک">
                                        </div>

                                        <div class="form-group">
                                            <label class="lbl-title">
                                                <abbr style="color:red;">*</abbr>
                                            </label>
                                            <input type="number" required name="menuOrder" class="form-control mb-2" id="exampleInputUsername1" placeholder="ترتیب">
                                        </div>

                                        <div class="form-group">
                                            <label class="lbl-title">
                                                <abbr style="color:red;">*</abbr>
                                            </label>
                                            <select required autocomplete="off" name="parent" class="form-control mb-2">
                                                <option>انتخاب کنید</option>
                                                <?php
                                                foreach ($menu as $row){ ?>
                                                    <option value="<?= $row['id']; ?>">
                                                        <?= $row['title']; ?>
                                                    </option>
                                                <?php } ?>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="date" class="form-control mb-2" id="exampleInputUsername1" placeholder="تاریخ">
                                        </div>

                                        <div class="input-group mb-3 btn-green">
                                            <button form="myform" class="btn btn-success" type="submit">اجرای عملیات</button>
                                        </div>

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
                                        <th> لینک </th>
                                        <th> ترتیب </th>
                                        <?php
                                        if (!isset($menuInfo['id'])){ ?>
                                            <th>
                                                مشاهده زیر دسته
                                            </th>
                                        <?php } ?>
                                        <th> ویرایش </th>
                                        <th>انتخاب
                                            <input id="select" onclick="selectAll();"  type="checkbox">
                                        </th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <?php
                                    $i=1;
                                    foreach ($menu as $row){ ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $row['title']; ?>
                                            </td>
                                            <td>
                                                <?= $row['link']; ?>
                                            </td>
                                            <td>
                                                <?= $row['menuOrder']; ?>
                                            </td>
                                            <?php
                                            if (!isset($menuInfo['id'])){ ?>
                                                <td>
                                                    <a target="_blank" href="adminmenu/showchildren/<?= $row['id']; ?>">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                            <?php } ?>
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
                                        <th> عنوان </th>
                                        <th> لینک </th>
                                        <th> ترتیب </th>
                                        <?php if (!isset($menuInfo['id'])){ ?>
                                            <th> مشاهده زیر دسته </th>
                                        <?php } ?>
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

    var editMenuId = '';

    function editProcess(menuId) {

        editMenuId = menuId;

        var url = 'adminmenu/editmenu/' + menuId;
        var data = {};

        $.post(url, data, function (msg) {

            $('input[name=title]').val(msg['title']);
            $('input[name=link]').val(msg['link']);
            $('input[name=menuOrder]').val(msg['menuOrder']);
            $('select[name=parent]').val(msg['parent']);

        }, 'json');

    }

    $(document).ready(function () {
        $('#myform').parsley();

        $('#myform').on('submit', function (event) {
            event.preventDefault();
            if ($('#myform').parsley().isValid()) {
                $.ajax({
                    method: "POST",
                    url: "adminmenu/addmenu/"+editMenuId,
                    data: $(this).serializeArray(),
                    beforeSend: function () {
                        $('#loader-icon').css('display', 'block');
                        $('#dark').fadeIn(200);
                        event.preventDefault();
                        setTimeout(function (msg) {
                            $('.register-modal').modal( 'hide' );
                        }, 700);
                    },
                    success: function (msg) {
                        console.log(msg);
                        setTimeout(function (msg) {
                            $('#loader-icon').css('display', 'none');
                            $('#dark').fadeOut(200);
                        }, 700);
                        <?php if ($menuInfo['parent']==0){ ?>
                            $(".x").load('adminmenu' + " .x");
                        <?php }else{ ?>
                            $(".x").load('adminmenu/showchildren/<?= $menuInfo['id']; ?>' + " .x");
                        <?php } ?>
                    }
                });
            }
        });
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
                            url:'adminmenu/delete',
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
                                $(".x").load('adminmenu' + " .x");
                            }
                        });
                    }
                }
            );
        }

    }

</script>