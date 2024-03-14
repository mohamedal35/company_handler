<x-layout>


    <!-- main-banner-area  -->
    <!-- start content -->
    {{-- <div class="partner-area">
        <div class="container">
            <div class="partner-box">
                <div class="partner-slides owl-carousel owl-theme">
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Java.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Kotlin.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Android.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Apple.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Swift.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/dart.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/flutter.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/laravel.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/PHP.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/MySQL.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/bootstrap.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Adobe_Illustrator.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Adobe_XD.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Figma-logo.svg"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Photoshop.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/JavaScript.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/jquery.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/sass.png"></a>
                    </div>
                    <div class="single-partner">
                        <a href="#"><img src="7odaa-com/assets/images/partner/Vue.png"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="partner-shape-1" data-speed="0.06" data-revert="true">
            <img src="7odaa-com/assets/images/partner/shape-1.png">
        </div>
        <div class="partner-shape-2" data-speed="0.06" data-revert="true">
            <img src="7odaa-com/assets/images/partner/shape-2.png">
        </div>
    </div> --}}
    @php
        print_r($sections_html);
    @endphp
    <div class="clients-area py-5">
        <div class="container">
            @php
                print_r($marketer_headers);
            @endphp

            <div class=" marketer owl-carousel owl-theme">
                @foreach ($marketers as $marketer)
                <div class="clients-item marketerItem">
                    <h6 class="location"> {{$marketer->for}}</h6>
                    <h3 class="name"> {{$marketer->name}} </h3>
                    <div class="marketerContact">
                        <i class="ri-mail-line me-2"></i>
                        <a href="mailto:{{$marketer->email}}"> {{$marketer->email}}  </a>
                    </div>
                    <div class="marketerContact">
                        <i class="ri-phone-line me-2"></i>
                        <a href="tel:{{$marketer->phone}}"> {{$marketer->phone}} </a>
                    </div>
                    <div class="marketerContact">
                        <i class="ri-whatsapp-line me-2"></i>
                        <a target="_blank" href="https://api.whatsapp.com/send/?phone=%2B{{$marketer->phone}}&amp;text&amp;type=phone_number&amp;app_absent=0"> whatsApp </a>
                    </div>
                    <div class="marketerContact">
                        <i class="ri-map-pin-line me-2"></i>
                        <a href="#!"> {{$marketer->loc}} </a>
                    </div>



                    <div class="shape-2">
                        <img src="7odaa-com/assets/images/clients/shape-5.png">
                    </div>
                    <div class="shape-3">
                        <img src="7odaa-com/assets/images/clients/shape-6.png">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="clients-shape-1" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/clients/shape-1.png">
        </div>
        <div class="clients-shape-2" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/clients/shape-2.png">
        </div>
        <div class="clients-shape-3" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/clients/shape-3.png">
        </div>
    </div>
    <section class="py-5">
        <div class="container p-md-5 ">
            @php
                print_r($partners_header)
            @endphp
            <div class="Roles row align-items-center justify-content-center mx-md-5">
                <img src="7odaa-com/assets/images/roales/1.jpg" class="col-md-6 p-2 ">
                <div class="col-md-6 p-2 ">
                    <h4>ما دورى إذا أردت الدخول فى هذا النظام ؟ </h4>
                    <p><span>الدور الوحيد هو البحث عن عملاء لشركة نامى </span> ابدأ البحث عن أناس فى محيطك أو على مواقع
                        الإنترنت و منصات
                        التواصل الإجتماعى يحتاجون الى مواقع الكترونية أو تطبيقات موبايل و
                        اذا طلب العميل الذى أحضرته خدمة من خدمات نامى فقد صرت الآن
                        شريكا لنامى </p>
                </div>
            </div>
            <div class="Roles row align-items-center justify-content-center mx-md-5">
                <img src="7odaa-com/assets/images/roales/2.jpg" class="col-md-6 p-2 order-md-last ">
                <div class="col-md-6 p-2 order-md-first">
                    <h4>ما هى تفاصيل هذه الشراكة و هل تحتاج الي دفع ؟ </h4>
                    <p><span>شعارنا مع المسوق أنت شريكنا فى كل شئ </span> بمجرد احضارك للعميل و بداية العقد معه فقد
                        أصبحت
                        شريكا فى هذا
                        المشروع بنسبة 15 % من قيمة أى متحصلات مالية تحصل عليها
                        الشركة من هذا المشروع فمثال لو قام العميل بدفع 20.000 فقيمة
                        مستحقاتك تبلغ 3000 من غير أى مجهود منك </p>
                </div>
            </div>
            <div class="Roles row align-items-center justify-content-center mx-md-5">
                <img src="7odaa-com/assets/images/roales/3.jpg" class="col-md-6 p-2 ">
                <div class="col-md-6 p-2 ">
                    <h4>هل هذا هو كل ما فى الأمر ؟ </h4>
                    <p><span>تضاعف نسبة الشراكة </span>فى حالة إحضارك لعميل آخر يريد المشروع نفسه فقد ارتفعت نسبة
                        شراكتك الى 30 % بمعنى لو تكلفت الخدمة 20.000 فقد صارت قيمة
                        مستحقاتك المالية 6000 و أنت فى بيتك </p>
                </div>
            </div>
            <div class="Roles row align-items-center justify-content-center mx-md-5">
                <img src="7odaa-com/assets/images/roales/4.jpg" class="col-md-6 p-2 order-md-last ">
                <div class="col-md-6 p-2 order-md-first">
                    <h4>هل من يعمل كمبرمج له دور فى هذه الشراكة ؟ </h4>
                    <p><span>نظام شراكة المبرمج </span> اذا كنت مبرمجا فأهلا بك أيضا ... فإذا استطعت الحصول على مشروع و
                        قدمته لنامى ، فأنت شريكنا أيضا فى هذا المشروع بنسبة 10%
                        بالإضافة لقيمة الدور الذى ستقوم بتنفيذه فى المشروع . لكننا نمتلك
                        شرطا واحد فى هذا الأمر و هو أن تكون ذا جودة فالعميل يأت فى
                        المرتبة الأولى عندنا </p>
                </div>
            </div>
            <div class="Roles row align-items-center justify-content-center mx-md-5">
                <img src="7odaa-com/assets/images/roales/5.jpg" class="col-md-6 p-2 ">
                <div class="col-md-6 p-2 ">
                    <h4>كيف أضمن حقى ؟ </h4>
                    <p><span>عقد المسوق + متابعة كل ما يحدث داخل جروبين على الواتس </span>
                        لضمان حق المسوق ، تقوم شركة نامى بعمل عقد ُيسمى عقد شراكة
                        المشروع ليضمن لك الحصول على نسبة شراكتك من المستحقات
                        المالية الخاصة بالمشروع . و نقوم بإضافة المسوق فى الجروب الفنى
                        ليتابع ما يحدث أثناء بناء المشروع . و نقوم بإضافته أيضا لجروب
                        المحاسبة المالية للمشروع . ليتابع مستحقاته و نسبة شراكته فى
                        المشروع بنفسه </p>
                </div>
            </div>
            <div class="Roles row align-items-center justify-content-center mx-md-5">
                <img src="7odaa-com/assets/images/roales/6.jpg" class="col-md-6 p-2 order-md-last ">
                <div class="col-md-6 p-2 order-md-first">
                    <h4>ماذا لو قامت الشركة بخطأ مما أدى الى غضب
                        العميل ؟</h4>
                    <p><span>نتحمل أخطاءنا </span> لو قامت الشركة بخطأ منها ، أدى الى غضب العميل و عدم إكمال
                        المشروع فالمسوق لا يجب أن يتحمل الخطأ لذا نقوم نحن بتحمل هذا
                        الخطأ و التعويض بطريقة مناسبة .</p>
                </div>
            </div>
        </div>
    </section>  

    <!-- clients -->
    {{-- <div class="clients-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2> آراء عملاؤنا </h2>
                <p> يرجى الاطلاع على ما يقوله عنا </p>
            </div>
            <div class="clients-slides owl-carousel owl-theme">
                <div class="clients-item">

                    <p>
                        بسم الله الرحمن الرحيم
                        أشكر حقيقة شركة حودا ديزين على أنها الموقع الثاني لي
                        ولله الحمد وجدت فيهم حسن التعامل وروعة التصميم وجدية العمل وبإذن هذا ثاني موقع ولن يكون الأخير
                        تعاملي معكم مستمر
                        فشكرا لكم </p>
                    <div class="title-name">
                        <h3> تامر أبوالجود </h3>
                        <span> تطبيق Daystar Market </span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="7odaa-com/assets/images/clients/shape-4.png">
                    </div>
                    <div class="shape-2">
                        <img src="7odaa-com/assets/images/clients/shape-5.png">
                    </div>
                    <div class="shape-3">
                        <img src="7odaa-com/assets/images/clients/shape-6.png">
                    </div>
                </div>
                <div class="clients-item">

                    <p>‘’ أحد أفضل الشركات التي تعاملت معها من الناحية العملية ومن ناحية الجودة والخبرة العالية.
                        تم تلبية جميع احتياجاتي بصورة ممتازة.
                        أتمنى لكم حظاً موفقاً. ’’</p>
                    <div class="title-name">
                        <h3> خالد المهدي </h3>
                        <span> تطبيق Reservation </span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="7odaa-com/assets/images/clients/shape-4.png">
                    </div>
                    <div class="shape-2">
                        <img src="7odaa-com/assets/images/clients/shape-5.png">
                    </div>
                    <div class="shape-3">
                        <img src="7odaa-com/assets/images/clients/shape-6.png">
                    </div>
                </div>
                <div class="clients-item">

                    <p>
                        قمة في الاداء والاتقان وسرعة الانجاز وجمال الإخراج
                        والإهتمام الدقيق برضى العميل
                        تستحق كل الشكر والتقدير والى الاما
                    </p>
                    <div class="title-name">
                        <h3> تامر أبوالجود </h3>
                        <span> تطبيق Equipment Experts </span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="7odaa-com/assets/images/clients/shape-4.png">
                    </div>
                    <div class="shape-2">
                        <img src="7odaa-com/assets/images/clients/shape-5.png">
                    </div>
                    <div class="shape-3">
                        <img src="7odaa-com/assets/images/clients/shape-6.png">
                    </div>
                </div>
                <div class="clients-item">

                    <p>
                        السلام عليكم ورحمة الله وبركاتة

                        بصراحة في قمة الذوق و سرعة الانجاز ، وتصآميمه هاديه و رآيقه في نفس الوقت

                        الله يوفقك الى الآمام ،،</p>
                    <div class="title-name">
                        <h3> ماجد العواضي </h3>
                        <span> تطبيق DR CARE </span>
                    </div>
                    <div class="star-rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                    </div>
                    <div class="shape-1">
                        <img src="7odaa-com/assets/images/clients/shape-4.png">
                    </div>
                    <div class="shape-2">
                        <img src="7odaa-com/assets/images/clients/shape-5.png">
                    </div>
                    <div class="shape-3">
                        <img src="7odaa-com/assets/images/clients/shape-6.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="clients-shape-1" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/clients/shape-1.png">
        </div>
        <div class="clients-shape-2" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/clients/shape-2.png">
        </div>
        <div class="clients-shape-3" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/clients/shape-3.png">
        </div>
    </div> --}}
    <!-- slogan -->

    <!-- end content -->

</x-layout>
