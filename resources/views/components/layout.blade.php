<?php 

use App\Models\Info;

$info = new Info;
$info = $info->get_all_info();
?>
<!doctype html>
<html>
<!-- # +----------------------------------------------------------------------------+
    # | 7odaa Design CMS Company  Solutions                                        |
    # | Copyright (c) 7odaa Design Solutions 2024. All rights reserved.            |
    # | Version:       3.0                                                         |
    # | File:          www.7odaa.com      index.php                                |
    # | Last Modified: 2024-02-17 21:57:23 PM                                      |
    # | E-mail:        info@7odaa.com                                              |
    # | Web:           https://www.7odaa.com/                                      |
    # +----------------------------------------------------------------------------+ -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="t2hyiEeY6IeekS1GE2chIXNaRiKR6Y0UZs8r7LlE" />
    <meta name="facebook-domain-verification" content="e9bf4vmexojv2k36znfxp5ce39lqj3" />
    <title>حودا ديزين</title>
    <link rel="icon" type="image/png" href="{{asset('7odaa-com/assets/images/fav.svg')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/font.awesome.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('7odaa-com/assets/css/responsive.css')}}">
</head>

<body>
    <!-- header -->
    <!-- spinner -->
    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>
    <!-- navbar -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="index.php">
                            <img src="7odaa-com/assets/images/logo.svg">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.php">
                        <img src="7odaa-com/assets/images/logo.svg">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link active" > الرئيسية </a>
                            </li>
                            <li class="nav-item">
                                <a href="/portfolio" class="nav-link">اعمالنا</a>
                            </li>
                            <li class="nav-item">
                                <a href="marketing" class="nav-link">التسويق</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link">تواصل معنا</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    المزيد
                                    <i class="ri-add-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="faq.php" class="nav-link"> الاسئلة الشائعة </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="offers.php" class="nav-link"> العروض </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-of-service.php" class="nav-link"> الشروط والاحكام </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <!-- <div class="option-item">
                          <i class="search-btn ri-search-line"></i>
                          <i class="close-btn ri-close-line"></i>
                          <div class="search-overlay search-popup">
                            <div class='search-box'>
                              <form class="search-form">
                                <input class="search-input" name="search" placeholder="بحث ..." type="text">
                                <button class="search-button" type="submit">
                                  <i class="ri-search-line"></i>
                                </button>
                              </form>
                            </div>
                          </div>
                        </div> -->
                            <div class="option-item">
                                <a href="contact" class="default-btn"> تواصل معنا <i
                                        class="ri-message-line"></i><span></span></a>
                            </div>
                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-menu-4-line" data-bs-toggle="modal"
                                        data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="contact.php" class="default-btn"> file.contactUS <i
                                        class="ri-message-line"></i><span></span></a>
                            </div>
                            <div class="option-item">
                                <div class="side-menu-btn">
                                    <i class="ri-menu-4-line" data-bs-toggle="modal"
                                        data-bs-target="#sidebarModal"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
                <div class="modal-body">
                    <div class="title">
                        <a href="index.php">
                            <img src="7odaa-com/assets/images/logo.svg">
                        </a>
                    </div>
                    <div class="sidebar-content">
                        <h3> نبذة مختصرة </h3>
                        <p>مؤسسة حودا ديزين لخدمات تصميم و تطوير المواقع و تطبيقات الهواتف العاملة بنظامى التشغيل
                            الاندرويد وال ios تقدم المؤسسة حلول الويب المتكاملة لجميع المؤسسات فى العالم و لديها قاعدة
                            عملاء ضخمة فى جميع دول العالم </p>
                    </div>
                    <div class="sidebar-contact-info">
                        <h3>معلومات للتواصل </h3>
                        <ul class="info-list">
                            <li><i class="ri-phone-fill"></i> <a href="tel:00201111202057">00201111202057</a></li>
                            <li><i class="ri-phone-fill"></i> <a href="tel:00966566366464">00966566366464</a></li>
                            <li><i class="ri-mail-line"></i> <a
                                    href="mailto:info@7odaa.com"><span>info@7odaa.com</span></a></li>
                            <li><i class="ri-map-pin-line"></i> جمهورية مصر العربيه - المملكه العربية السعودية </li>
                        </ul>
                    </div>
                    <ul class="sidebar-social-list">
                        <li><a href="https://www.facebook.com/7odaa90" target="_blank"><i
                                    class="ri-facebook-fill"></i></a></li>

                        <li>
                            <a href="http://wa.me/00201111202057" target="_blank">
                                <i class="ri-whatsapp-line me-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    {{$slot}}

    <!-- footer -->
    <section class="footer-area pt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="widget-logo">
                            <a href="index.php">
                                <img src="7odaa-com/assets/images/logo.svg">
                            </a>
                        </div>
                        <p>أفضل حل لشركتك الناشئة في مجال تكنولوجيا المعلومات </p>
                        <ul class="widget-info">
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:00201111202057">@foreach ($info as $item)
                                    @php
                                        if ($item->key == 'phone_1') echo $item->value;
                                    @endphp
                                @endforeach</a>
                            </li>
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:00966566366464">@foreach ($info as $item)
                                    @php
                                        if ($item->key == 'phone_2') echo $item->value;
                                    @endphp
                                @endforeach</a>
                            </li>
                            <li>
                                <i class="ri-global-line"></i>
                                <a href="mailto:info@7odaa.com"><span>@foreach ($info as $item)
                                    @php
                                        if ($item->key == 'email') echo $item->value;
                                    @endphp
                                @endforeach</span></a>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                @foreach ($info as $item)
                                @php
                                    if ($item->key == 'location') echo $item->value;
                                @endphp
                            @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-6">
                    <div class="single-footer-widget">
                        <h3>حودا ديزين</h3>
                        <ul class="footer-links-list">
                            <li><a href="/portfolio"> اعمالنا</a></li>
                            <li><a href="marketing"> التسويق </a></li>
                            <li><a href="offers"> العروض </a></li>
                            <li><a href="web"> برمجة وتصميم المواقع الإلكترونية </a></li>
                            <li><a href="terms-of-service">الشروط والاحكام</a></li>
                            <li><a href="contact"> تواصل معنا </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-6">
                    <div class="single-footer-widget">
                        <h3> بريد التواصل</h3>
                        <ul class="footer-links-list">
                            <li><a href="mailto:info@siteidea"> <i class="fad fa-mailbox me-2"></i> الدعم الفني </a>
                            </li>
                            <li><a href="mailto:hr@siteidea"> <i class="fad fa-mailbox me-2"></i> الموارد البشرية </a>
                            </li>
                            <li><a href="mailto:sales@siteidea"> <i class="fad fa-mailbox me-2"></i> التسويق والمبيعات
                                </a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3> تابعنا </h3>


                        <ul class="widget-social">
                            <li>
                                <a href="@foreach ($info as $item)
                                @php
                                    if ($item->key == 'facebook') echo $item->value;
                                @endphp
                            @endforeach" target="_blank">
                                    <i class="ri-facebook-line me-2"></i>
                                    فيسبوك
                                </a>
                            </li>

                            <li>
                                <a href="@foreach ($info as $item)
                                @php
                                    if ($item->key == 'whatsapp') echo $item->value;
                                @endphp
                            @endforeach" target="_blank">
                                    <i class="ri-whatsapp-line me-2"></i>
                                    واتساب
                                </a>
                            </li>
                            <li>
                                <a href="@foreach ($info as $item)
                                @php
                                    if ($item->key == 'whatsapp2') echo $item->value;
                                @endphp
                            @endforeach" target="_blank">
                                    <i class="ri-whatsapp-line me-2"></i>
                                    واتساب
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        حقوق النشر © 2024 جميع الحقوق محفوظة <a href="#">حودا ديزين</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-shape-1" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/footer/shape-1.png">
        </div>
        <div class="footer-shape-2" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/footer/shape-2.png">
        </div>
        <div class="footer-shape-3" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/footer/shape-3.png">
        </div>
        <div class="footer-shape-4" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/footer/shape-4.png">
        </div>
        <div class="footer-shape-5" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/footer/shape-5.png">
        </div>
    </section>





    <div class="support">
        <div class="links">
            <a href="https://api.whatsapp.com/send/?phone=%2B200201111202057&amp;text&amp;type=phone_number&amp;app_absent=0"
                target="_blank" class="whatsapp">
                <i class="ri-whatsapp-line"></i>
            </a>
            <a href="tel:00200201111202057" target="_blank" class="call">
                <i class="ri-phone-line"></i>
            </a>
        </div>
        <div class="supportBtn">
            <i class="ri-customer-service-line"></i>
        </div>
    </div><!--
    //////////////////////////
    //////////////////////////
    //////////////////////////
    //////////////////////////
    script
    //////////////////////////
    //////////////////////////
    //////////////////////////
    //////////////////////////
-->

    <script src="{{asset('7odaa-com/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/nice-select.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/fancybox.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/TweenMax.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/scrollbar.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/horizontal-scrollbar.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('7odaa-com/assets/js/main.js')}}"></script>
</body>

</html>
