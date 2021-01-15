<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <base href="<?= URL; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> پنل مدیریت </title>
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="assets/panel/assets/css/loader.css" rel="stylesheet" type="text/css"/>
    <script src="assets/panel/assets/js/loader.js"></script>

    <link href="assets/panel/https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="assets/panel/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/panel/assets/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/panel/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/panel/assets/css/apps/contacts.css">

    <link href="assets/panel/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="assets/panel/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/editors/quill/quill.snow.css">
    <link href="assets/panel/assets/css/apps/todolist.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/custom_dt_html5.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/dt-global_style.css">

    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/table/datatable/custom_dt_miscellaneous.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/components/custom-modal.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/scrollspyNav.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/alert/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/dropify/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/parsleyjs/css/parsley.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/assets/css/authentication/form-1.css">
    <link rel="stylesheet" type="text/css" href="assets/panel/plugins/date-picker/kamadatepicker.min.css">

</head>
<body>

<style>

    .fa{position: relative;top: 3px;margin-left: :5px;font-size: 16px !important;}

    #dark{
        width: 100%;
        height: 100%;
        position: fixed;
        background: rgba(0,0,0,.3);
        left:0;
        top: 0;
        z-index: 9999999;
        display: none;
    }

    #loader-icon{
        text-align: center;
        margin: 0 auto;
    }
</style>

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<div class="header-container fixed-top">
    <header class="header navbar navbar-expand-sm">

        <ul class="navbar-item theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="admindashboard">
                    <img src="assets/images/optimized-nxo9.png" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link">  </a>
            </li>
        </ul>

        <ul class="navbar-item flex-row ml-md-0 ml-auto">
            <li class="nav-item align-self-center search-animated">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-search toggle-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <form class="form-inline search-full form-inline search" role="search">
                    <div class="search-bar">
                        <input type="text" class="form-control search-form-control  ml-lg-auto"
                               placeholder="جستجو کنید...">
                    </div>
                </form>
            </li>
        </ul>

        <ul class="navbar-item flex-row ml-md-auto">

            <li class="nav-item dropdown language-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/panel/assets/img/ca.png" class="flag-width" alt="flag">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="language-dropdown">
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/panel/assets/img/de.png"
                                                                                    class="flag-width" alt="flag"> <span
                                class="align-self-center">&nbsp;آلمانی</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/panel/assets/img/jp.png"
                                                                                    class="flag-width" alt="flag"> <span
                                class="align-self-center">&nbsp;ژاپنی</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/panel/assets/img/fr.png"
                                                                                    class="flag-width" alt="flag"> <span
                                class="align-self-center">&nbsp;فرانسوی</span></a>
                    <a class="dropdown-item d-flex" href="javascript:void(0);"><img src="assets/panel/assets/img/ca.png"
                                                                                    class="flag-width" alt="flag"> <span
                                class="align-self-center">&nbsp;انگلیسی</span></a>
                </div>
            </li>

            <li class="nav-item dropdown message-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-mail">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                </a>
                <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                    <div class="">
                        <a class="dropdown-item">
                            <div class="">

                                <div class="media">
                                    <div class="user-img">
                                        <img class="usr-img rounded-circle" src="assets/panel/assets/img/90x90.jpg"
                                             alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">محسن رضایی</h5>
                                            <p class="msg-title">بروزرسانی اکانت</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="">

                                <div class="media">
                                    <div class="user-img">
                                        <img class="usr-img rounded-circle" src="assets/panel/assets/img/90x90.jpg"
                                             alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">هومن شکیبا</h5>
                                            <p class="msg-title">پیام شما</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="">

                                <div class="media">
                                    <div class="user-img">
                                        <img class="usr-img rounded-circle" src="assets/panel/assets/img/90x90.jpg"
                                             alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h5 class="usr-name">زهرا جوان</h5>
                                            <p class="msg-title">اکانت شما بروز شد</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown notification-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-bell">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                    </svg>
                    <span class="badge badge-success"></span>
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                    <div class="notification-scroll">

                        <div class="dropdown-item">
                            <div class="media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-heart">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                </svg>
                                <div class="media-body">
                                    <div class="notification-para"><span class="user-name">زهرا طباطبایی</span> عکس شما
                                        را دوست دارد.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-share-2">
                                    <circle cx="18" cy="5" r="3"></circle>
                                    <circle cx="6" cy="12" r="3"></circle>
                                    <circle cx="18" cy="19" r="3"></circle>
                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                </svg>
                                <div class="media-body">
                                    <div class="notification-para"><span class="user-name">رضا جوان </span> پست شما را
                                        به اشتراک گذاشت
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <div class="media">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-tag">
                                    <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                    <line x1="7" y1="7" x2="7" y2="7"></line>
                                </svg>
                                <div class="media-body">
                                    <div class="notification-para"><span class="user-name">محمدرضا پر </span> از شما در
                                        اظهار نظر نام برد.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown user-profile-dropdown">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    <img src="assets/images/faramouj-white-logo.png" alt="avatar">
                </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                    <div class="">
                        <div class="dropdown-item">
                            <a href="user_profile.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                پروفایل من</a>
                        </div>
                        <div class="dropdown-item">
                            <a href="apps_mailbox.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>
                                صندوق ورودی</a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_lockscreen.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                                قفل صفحه</a>
                        </div>
                        <div class="dropdown-item">
                            <a href="auth_login.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                خروج</a>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN NAVBAR  -->
<div class="sub-header-container">
    <header class="header navbar navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </a>

        <ul class="navbar-nav flex-row">
            <li>
                <div class="page-header">

                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">داشبورد</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>فروش ها</span></li>
                        </ol>
                    </nav>

                </div>
            </li>
        </ul>
        <ul class="navbar-nav flex-row ml-auto ">
            <li class="nav-item more-dropdown">
                <div class="dropdown  custom-dropdown-icon">
                    <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"><span>تنظیمات</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                        <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">تنظیمات</a>
                        <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">نامه</a>
                        <a class="dropdown-item" data-value="Print" href="javascript:void(0);">پرینت</a>
                        <a class="dropdown-item" data-value="Download" href="javascript:void(0);">دانلود</a>
                        <a class="dropdown-item" data-value="Share" href="javascript:void(0);">اشتراک گذاری</a>
                    </div>
                </div>
            </li>
        </ul>
    </header>
</div>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    <div class="sidebar-wrapper sidebar-theme">

        <nav id="sidebar">
            <div class="shadow-bottom"></div>
            <ul class="list-unstyled menu-categories" id="accordionExample">
                <li class="menu">
                    <a href="#dashboard" data-active="true" data-toggle="collapse" aria-expanded="true"
                       class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-dashboard"></i>
                            <span>داشبورد</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#accordionExample">
                        <li>
                            <a href="admindashboard"> داشبورد </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#menu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-bars"></i>
                            <span>مدیریت منو</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='menu'){echo 'show';} ?>" id="menu" data-parent="#accordionExample">
                        <li class="<?php if ($active=='menu'){echo 'active';} ?>">
                            <a href="adminmenu"> منو ها </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#process" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-tasks"></i>
                            <span>مدیریت فعالیت ما</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='process' || $active=='process-archive'){echo 'show';} ?>" id="process" data-parent="#accordionExample">
                        <li class="<?php if ($active=='process'){echo 'active';} ?>">
                            <a href="adminprocess"> فعالیت ما </a>
                        </li>
                        <li class="<?php if ($active=='process-archive'){echo 'active';} ?>">
                            <a href="adminprocess/archiveprocess"> بایگانی </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#service" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-server"></i>
                            <span>مدیریت خدمات</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='service' || $active=='service-archive'){echo 'show';} ?>" id="service" data-parent="#accordionExample">
                        <li class="<?php if ($active=='service'){echo 'active';} ?>">
                            <a href="adminservice"> خدمات ما </a>
                        </li>
                        <li class="<?php if ($active=='service-archive'){echo 'active';} ?>">
                            <a href="adminservice/servicearchive"> بایگانی </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#slider" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-sliders"></i>
                            <span>مدیریت اسلایدر</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='slider'){echo 'show';} ?>" id="slider" data-parent="#accordionExample">
                        <li class="<?php if ($active=='slider'){echo 'active';} ?>">
                            <a href="adminslider"> اسلایدر </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#faq" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-question-circle-o"></i>
                            <span>مدیریت سوالات متداول</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='faq' || $active=='faq-archive'){echo 'show';} ?>" id="faq" data-parent="#accordionExample">
                        <li class="<?php if ($active=='faq'){echo 'active';} ?>">
                            <a href="adminfaq"> سوالات متداول </a>
                        </li>
                        <li class="<?php if ($active=='faq-archive'){echo 'active';} ?>">
                            <a href="adminfaq/faqarchive"> بایگانی </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#redirect" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-exchange"></i>
                            <span>مدیریت ریدایرکت</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='redirect' || $active=='redirect-archive'){echo 'show';} ?>" id="redirect" data-parent="#accordionExample">
                        <li class="<?php if ($active=='redirect'){echo 'active';} ?>">
                            <a href="adminredirect"> ریدایرکت </a>
                        </li>
                        <li class="<?php if ($active=='redirect-archive'){echo 'active';} ?>">
                            <a href="adminredirect/redirectarchive"> بایگانی </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#metatag" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-search"></i>
                            <span>مدیریت متاتگ ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='metatag'){echo 'show';} ?>" id="metatag" data-parent="#accordionExample">
                        <li class="<?php if ($active=='metatag'){echo 'active';} ?>">
                            <a href="adminmetatag"> متاتگ </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#aboutus" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-info"></i>
                            <span>مدیریت درباره ما</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='aboutusbg'){echo 'show';} ?>" id="aboutus" data-parent="#accordionExample">
                        <li class="<?php if ($active=='aboutusbg'){echo 'active';} ?>">
                            <a href="adminaboutus/bg"> بکگراند درباره ما </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-user"></i>
                            <span>مدیریت کاربران</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='user' || $active='adduser'){echo 'show';} ?>" id="user" data-parent="#accordionExample">
                        <li class="<?php if ($active=='user'){echo 'active';} ?>">
                            <a href="adminuser"> کاربران </a>
                        </li>
                        <li class="<?php if ($active=='adduser'){echo 'active';} ?>">
                            <a href="adminuser/adduser"> افزودن </a>
                        </li>
                    </ul>
                </li>

                <li class="menu">
                    <a href="#brand" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <i class="fa fa-user"></i>
                            <span>مدیریت برند ها</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled <?php if ($active=='brand'){echo 'show';} ?>" id="brand" data-parent="#accordionExample">
                        <li class="<?php if ($active=='brand'){echo 'active';} ?>">
                            <a href="adminbrand"> برند ها </a>
                        </li>
                    </ul>
                </li>


            </ul>
            <!-- <div class="shadow-bottom"></div> -->

        </nav>

    </div>
    <!--  END SIDEBAR  -->

    <div id="dark">

        <div class="row">


            <div class="col-md-12">
                <div class="col-md-6"></div>

                <div class="col-md-2" id="loader-icon"><img src="loading.gif" style="margin: 300px auto"/></div>

                <div class="col-md-5"></div>

            </div>
        </div>
    </div>

    <script src="assets/panel/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/panel/bootstrap/js/popper.min.js"></script>
    <script src="assets/panel/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/panel/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/panel/assets/js/app.js"></script>
    <script src="assets/panel/assets/js/apps/contact.js"></script>
    <script>
        $(document).ready(function () {
            App.init();
        });
    </script>
    <script src="assets/panel/assets/js/custom.js"></script>



    <script src="assets/panel/plugins/apex/apexcharts.min.js"></script>
    <script src="assets/panel/assets/js/dashboard/dash_1.js"></script>
    <script src="assets/panel/assets/js/ie11fix/fn.fix-padStart.js"></script>
    <script src="assets/panel/assets/js/scrollspyNav.js"></script>
    <script src="assets/panel/plugins/editors/quill/quill.js"></script>
    <script src="assets/panel/assets/js/apps/todoList.js"></script>
    <script src="assets/panel/assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>

    <script src="assets/panel/plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="assets/panel/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="assets/panel/plugins/table/datatable/button-ext/jszip.min.js"></script>
    <script src="assets/panel/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="assets/panel/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script src="assets/panel/plugins/table/datatable/custom_miscellaneous.js"></script>
    <script src="assets/panel/plugins/alert/js/sweetalert.min.js"></script>
    <script src="assets/panel/plugins/dropify/js/dropify.js"></script>
    <script src="assets/panel/plugins/parsleyjs/js/parsley.min.js"></script>
    <script src="assets/panel/assets/js/authentication/form-1.js"></script>
    <script src="assets/panel/plugins/date-picker/kamadatepicker.min.js"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn' },
                    { extend: 'csv', className: 'btn' },
                    { extend: 'excel', className: 'btn' },
                    { extend: 'print', className: 'btn' }
                ]
            },
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>' },
                "sInfo": "صفحه _PAGE_ از _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "جستجو کنید...",
                "sLengthMenu": "نتایج :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        } );
    </script>

    <script>

        $('document').ready(function()
        {
            $('textarea').each(function(){
                    $(this).val($(this).val().trim());
                }
            );
        });

        function selectAll() {
            var items = document.getElementsByName('id[]');
            for (var i = 0; i < items.length; i++) {
                if (items[i].type === 'checkbox')
                    items[i].checked = false;
            }
            if ($('#select').is(':checked'))
                for (var i = 0; i < items.length; i++) {
                    if (items[i].type === 'checkbox')
                        items[i].checked = true;
                }
        }


        /*remove white space in textarea tag*/

        $('document').ready(function()
        {
            $('textarea').each(function(){
                    $(this).val($(this).val().trim());
                }
            );
        });

        /*remove white space in textarea tag*/

    </script>

</body>
</html>