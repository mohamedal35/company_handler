<x-layout>

    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>تواصل معنا </h2>
                <ul>
                    <li>
                        <a href="index.php">الرئيسية</a>
                    </li>
                    <li>تواصل معنا</li>
                </ul>
            </div>
        </div>
        <div class="page-banner-shape-1" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/page-banner/shape-1.png" alt="image">
        </div>
        <div class="page-banner-shape-2" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/page-banner/shape-2.png" alt="image">
        </div>
        <div class="page-banner-shape-3" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/page-banner/shape-3.png" alt="image">
        </div>
        <div class="page-banner-shape-4" data-speed="0.08" data-revert="true">
            <img src="7odaa-com/assets/images/page-banner/shape-4.png" alt="image">
        </div>
    </div>
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="contact-form">
                <form id="contactForm" method="post" action="/contact">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" required
                                    data-error=" ادخل الاسم " placeholder="الاسم *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" required
                                    data-error=" من فضلك ادخل البريد الالكترونى " placeholder="البريد الالكترونى *">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="phone" id="phone_number" required
                                    data-error=" من فضلك ادخل رقم الهاتف " class="form-control"
                                    placeholder="رقم الهاتف">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="subject" id="msg_subject" class="form-control" required
                                    data-error=" من فضلك ادخل الموضوع" placeholder="الموضوع">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                    data-error="اكتب رسالتك " placeholder="الرسالة"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <button type="submit" id="send_contact" class="default-btn"> ارسال <i
                                        class="ri-arrow-right-line"></i><span></span></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group" id="alert_div">

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="contact-info-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="contact-address">
                        <h3> معلومات التواصل </h3>
                        <p> تواصل معنا في اي وقت وسيتم الرد عليك سريعا </p>
                        <ul class="address-info">
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:+200201111202057">1412413</a>
                            </li>
                            <li>
                                <i class="ri-customer-service-line"></i>
                                <a href="tel:00966566366464">00966566366464</a>
                            </li>
                            <li>
                                <i class="ri-global-line"></i>
                                <a href="mailto:info@7odaa.com"><span>info@7odaa.com</span></a>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                جمهورية مصر العربيه - المملكه العربية السعودية
                            </li>
                        </ul>
                        <ul class="address-social">
                            <li>
                                <a href="https://www.facebook.com/7odaa90" target="_blank">
                                    <i class="ri-facebook-line"></i>
                                </a>
                            </li>


                            <li>
                                <a href="https://api.whatsapp.com/send?phone=00200966566366464" target="_blank">
                                    <i class="ri-messenger-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=00200201111202057" target="_blank">
                                    <i class="ri-messenger-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643938.217200332!2d33.51137322623584!3d26.88656134870598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14368976c35c36e9%3A0x2c45a00925c4c444!2z2YXYtdix!5e0!3m2!1sar!2ssa!4v1708244519157!5m2!1sar!2ssa"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
