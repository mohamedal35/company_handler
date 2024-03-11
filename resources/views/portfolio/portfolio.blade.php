<x-layout>


    <!-- projects -->
    <div class="cases-area mt-5">
        <div class="container ">






            <div class="filterHeader">
                <button class=" filter active " id="all"><i class="fas fa-lightbulb-on me-2"></i> الكل
                    @foreach ($categories as $category)
                        <button class=" filter " id="{{ $category->cat_id }}"><i class="{{ $category->icon }}"></i>
                            {{ $category->name }}</button>
                    @endforeach
                </button>
            </div>


            <div class="row py-3" id="filterItems">

                @foreach ($products as $product)
                    @php
                        $categories_class = '';
                    @endphp
                    @foreach ($product->product_cats as $cat)
                        @php
                            $categories_class .= ' ' . $cat->category_data->cat_id;
                        @endphp
                    @endforeach
                    <div class="col-lg-3 col-md-6  p-1 {{$categories_class}}">
                        <div class="single-cases ">
                            <div class="cases-image">
                                <a target="_blank"
                                    href="{{$product->link}}">
                                    <img src="7odaa-com/assets/images/cases-study/{{$product->img}}">
                                </a>
                            </div>
                            <div class="cases-content">
                                @foreach ($product->product_cats as $cat)
                                
                                <a href="{{$product->link}}"
                                    target="_blank" class="tag-1"> {{$cat->category_data->name}} </a>
                                @endforeach

                                
                                <h3>
                                    <a target="_blank"
                                        href="{{$product->link}}">
                                        {{$product->header}}
                                    </a>
                                </h3>
                                <p>
                                    {{$product->body}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/aljawhara/">
                                <img src="7odaa-com/assets/images/cases-study/aljawhara.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/aljawhara/" target="_blank" class="tag-1"> موقع
                                الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/aljawhara/">
                                    الجوهرة
                                </a>
                            </h3>
                            <p>
                                مكتب للاستقدام في المملكة العربية السعودية
                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/nahas/">
                                <img src="7odaa-com/assets/images/cases-study/nahas.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/nahas/" target="_blank" class="tag-1"> موقع
                                الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/nahas/">
                                    نحاس وشركاؤه
                                </a>
                            </h3>
                            <p>
                                نحاس وشركاؤه هو منصة متكاملة لتقديم الخدمات القانونية
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/ebhar/">
                                <img src="7odaa-com/assets/images/cases-study/ebhar.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/ebhar/" target="_blank" class="tag-1"> موقع
                                الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/ebhar/">
                                    ابهار
                                </a>
                            </h3>
                            <p>
                                اشهر موقع النشر والتوزيع للكتب الورقية والالكترونية وخدمات النشر والتوزيع
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/rawafed/">
                                <img src="7odaa-com/assets/images/cases-study/rawfed.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/rawafed/" target="_blank" class="tag-1"> موقع
                                الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/rawafed/">
                                    روافد نجد للإستقدام
                                </a>
                            </h3>
                            <p>
                                اكبر مكاتب الاستقدام في السعودية . تعود فترة تأسيس المكتب الي عام 1430 هجريا
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/just-ask/">
                                <img src="7odaa-com/assets/images/cases-study/just_ask.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/just-ask/" target="_blank" class="tag-1"> موقع
                                الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/just-ask/">
                                    جست اسك
                                </a>
                            </h3>
                            <p>
                                متجر متعدد البائعين يعمل في دولة العراق
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/easy-cashier/">
                                <img src="7odaa-com/assets/images/cases-study/easy_cashier.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/easy-cashier/" target="_blank" class="tag-1">
                                موقع الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/easy-cashier/">
                                    ايزي كاشير
                                </a>
                            </h3>
                            <p>
                                لوحة تحكم متكاملة لادارة الحسابات
                            </p>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/nawat_medical/">
                                <img src="7odaa-com/assets/images/cases-study/nawat_medical.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/nawat_medical/" target="_blank" class="tag-1">
                                موقع الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/nawat_medical/">
                                    نواة الطب
                                </a>
                            </h3>
                            <p>
                                مورد رائد للأجهزة والمعدات واللوازم المخبرية والطبية والجراحية والتصوير
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/sky-park-dashboard/">
                                <img src="7odaa-com/assets/images/cases-study/sky_park_dashboard.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/sky-park-dashboard/" target="_blank"
                                class="tag-1"> موقع الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/sky-park-dashboard/">
                                    لوحة تحكم سكاي بارك
                                </a>
                            </h3>
                            <p>
                                لوحة تحكم وادارة ملاهي من حجز ودخول وخروج وخدمات داخلية
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/sky-park/">
                                <img src="7odaa-com/assets/images/cases-study/sky_park.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/sky-park/" target="_blank" class="tag-1"> موقع
                                الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/sky-park/">
                                    سكاي بارك
                                </a>
                            </h3>
                            <p>
                                استمتع بتجربة الإثارة والتحدي في منتزهنا الذي تبلغ مساحته 4500 مترًا مربعًا . قم بالحجز
                                الأن
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/dukkan/">
                                <img src="7odaa-com/assets/images/cases-study/dukkan.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/dukkan/" target="_blank" class="tag-1"> موقع
                                الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/dukkan/">
                                    دكان
                                </a>
                            </h3>
                            <p>
                                متجر الكتروني مختص بالخدمات الطبية والعناية الشخصية
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6  p-1 web">
                    <div class="single-cases ">
                        <div class="cases-image">
                            <a target="_blank" href="https://siteidea.net/sitedesign/alrahy/">
                                <img src="7odaa-com/assets/images/cases-study/alrahy.jpg">
                            </a>
                        </div>
                        <div class="cases-content">
                            <a href="https://siteidea.net/sitedesign/alrahy/" target="_blank" class="tag-1"> موقع
                                الكتروني </a>
                            <h3>
                                <a target="_blank" href="https://siteidea.net/sitedesign/alrahy/">
                                    الراهي
                                </a>
                            </h3>
                            <p>
                                مطاعم ومطابخ الراهي نفخر بخدمتكم وجودتنا سر رضاكم عنا حمّل التطبيق وبالعافيه عليك
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="cases-shape-1" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-1.png">
    </div>
    <div class="cases-shape-2" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-2.png">
    </div>
    <div class="cases-shape-4" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-4.png">
    </div>
    <div class="cases-shape-5" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-5.png">
    </div>
    <div class="cases-shape-6" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-4.png">
    </div>
    <div class="cases-shape-7" data-speed="0.04" data-revert="true">
        <img src="7odaa-com/assets/images/cases-study/shape-5.png">
    </div>



</x-layout>
