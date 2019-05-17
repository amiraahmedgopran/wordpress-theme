<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <nav class="top-navbar container d-flex align-items-center">
        <a class="logo" href="#">
            <img src="<?php if(the_field('logo', 'option')) { the_field('logo', 'option'); } ?>">
        </a>
        <?php add_menus(); ?>
    </nav>
    <div class="contact-us" data-toggle="modal" data-target="#exampleModal">
            <p>اتصل بنا</p>
            <svg width='0' height='0' style='display:none;' version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                <symbol id='hexagon' viewBox="0 0 340 394">
                    <path d="M340 98.57l-.06 196.97-170 98.44L0 295.43.06 98.46l170-98.44L340 98.57z" fill="#ec7c22"
                        fill-rule="nonzero" />
                </symbol>

            </svg>
            <svg class='hexagon'>
                <use xlink:href="#hexagon" />
            </svg>

            <svg width='0' height='0' style='display:none;' version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                <symbol id='hexagon1' viewBox="0 0 340 394">
                    <path stroke="#fff" stroke-width="5"
                        d="M340 98.57l-.06 196.97-170 98.44L0 295.43.06 98.46l170-98.44L340 98.57z" fill="transparent"
                        fill-rule="nonzero" />
                </symbol>

            </svg>
            <svg class='hexagon1'>
                <use xlink:href="#hexagon1" />
            </svg>


            <svg width='0' height='0' style='display:none;' version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                <symbol id='hexagon2' viewBox="0 0 340 394">
                    <path stroke="#fff" stroke-width="5"
                        d="M340 98.57l-.06 196.97-170 98.44L0 295.43.06 98.46l170-98.44L340 98.57z" fill="transparent"
                        fill-rule="nonzero" />
                </symbol>

            </svg>
            <svg class='hexagon2'>
                <use xlink:href="#hexagon2" />
            </svg>


            <svg width='0' height='0' style='display:none;' version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
                <symbol id='hexagon3' viewBox="0 0 340 394">
                    <path stroke="#fff" stroke-width="5"
                        d="M340 98.57l-.06 196.97-170 98.44L0 295.43.06 98.46l170-98.44L340 98.57z" fill="transparent"
                        fill-rule="nonzero" />
                </symbol>

            </svg>
            <svg class='hexagon3'>
                <use xlink:href="#hexagon3" />
            </svg>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="see-more-project">وسائل الاتصال</a>
                                </div>
                                <div class="col-md-6">
                                    <div class="model-block">
                                        <h2>المملكة العربية السعودية</h2>
                                        <ul>
                                            <li><i class="fa fa-phone gray"></i> <a href="tel:920033407">920033407</a>
                                            </li>
                                            <li><i class="fa fa-mobile orang"></i> <a
                                                    href="tel:540664139 (966+)">540664139 (966+)</a></li>
                                            <li><i class="fa fa-whatsapp green"></i> <a
                                                    href="tel:540664139 (966+)">540664139 (966+)</a></li>
                                            <li><i class="fa fa-envelope gray"></i> <a
                                                    href="mailto:t@tasawk.com">t@tasawk.com</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="model-block border-block">
                                        <h2>الإمارات العربية المتحدة</h2>
                                        <ul>
                                            <li><i class="fa fa-phone gray"></i> <a href="tel:45868718 (971+)">45868718
                                                    (971+)</a></li>
                                            <li><i class="fa fa-mobile orang"></i> <a
                                                    href="tel:505931432 (971+)">5505931432 (971+)</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="#" class="hover-button ml-3">المحادثة المباشرة</a>
                                    <a href="#" class="hover-button mr-3">مركز الدعم الفنى</a>
                                </div>
                                <div class="col-12">
                                    <div class="contact">
                                        <h3 class="text-center">أو إرسل إلينا نموذج طلب وسيتم الرد خلال 24 ساعة</h3>
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>الاسم بالكامل<span class="required">*</span></label>
                                                    <input type="text" class="input-form">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>البريد الالكترونى<span class="required">*</span></label>
                                                    <input type="text" class="input-form">>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>رقم الجوال<span class="required">*</span></label>
                                                    <input type="tel" class="input-form">>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>نوع الخدمة<span class="required">*</span></label>
                                                    <span class="select"></span>
                                                    <select class="input-form">
                                                        <option>تصميم المتاجر الالكترونية</option>
                                                        <option>تصميم مواقع نت</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <label>ملاحظات</label>
                                                    <textarea class="input-form"></textarea></textarea>
                                                </div>
                                                <div class="col-md-12">
                                                    <label>تفضيلات التواصل<span class="required">*</span></label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox">
                                                    <span class="check">التواصل عبر whatsapp</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox">
                                                    <span class="check">التواصل عبر البريد الألكترونى</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="checkbox">
                                                    <span class="check">الوقت المفضل للمحادثة صباحا</span>
                                                </div>
                                                <diV class="col-md-6">
                                                    <input type="checkbox">
                                                    <span class="check">الوقت المفضل للمحادثة مساءا</span>
                                                </diV>
                                                <div class="col-12">
                                                    <a href="#" class="see-more-project mt-3">ارسل الطلب</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="title"> أطلق نجاحك </h1>
                    <p class="description">رواد صناعة المتاجر الإلكترونية ومواقع الإنترنت والتطبيقات لأكثر من 8 سنوات
                    </p>
                    <div class="count-box">
                        <div class="count">
                            <span><i class="fa fa-plus"></i> 5,000</span>
                            <p>متجر وموقع إلكتروني تم تنفيذه</p>
                        </div>
                        <div class="count">
                            <span><i class="fa fa-plus"></i> 120,000</span>
                            <p>طلب يتم معالجته شهريا عبر متاجر عملائنا المميزين</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-7 vedio" data-aos="fade-right">
                    <div class="vendor">
                        <iframe src="https://player.vimeo.com/video/212800498?autoplay=1" width="225"
                            frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="box">
            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1000 75" preserveaspectratio="none" class="traingle">
                <polygon points="0,0   0,75   500.8,75   500.8,75"></polygon>
                <polygon points="1000,0   1000,75   500,75  500,75"></polygon>
            </svg>
        </div>
</header>