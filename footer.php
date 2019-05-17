<section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="footer-title">خدماتنا</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <h4>الأكثر طلباً</h4>
                                <ul>
                                    <li><a href="#">الشركات</a></li>
                                    <li><a href="#">المتاجر</a></li>
                                    <li><a href="#">تطبيقات الجوال</a></li>
                                    <li><a href="#">برمجة مواقع ويب</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4> خدمات الأعمال</h4>
                                <ul>
                                    <li><a href="#">الهويات التجارية</a></li>
                                    <li><a href="#">خدمات موشن جرافيك</a></li>
                                    <li><a href="#">التسويق الالكتروني</a></li>
                                    <li><a href="#"> ادارة المحتوى الرقمى</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul>
                                    <li><a href="#"> مركز خدمة العملاء</a></li>
                                    <li><a href="#">الأسئلة الشائعة</a></li>
                                    <li><a href="#">الشروط والأحكام</a></li>
                                    <li><a href="#"> اتصل بنا</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <ul class="spetail">
                                    <li><a href="#"> مركز خدمة العملاء</a></li>
                                    <li><a href="#">الأسئلة الشائعة</a></li>
                                    <li><a href="#">الشروط والأحكام</a></li>
                                    <li><a href="#"> اتصل بنا</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 contact">
                    <h3 class="footer-title">كن على تواصل مع تسوق</h3>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                            <?php if(get_field('email', 'option')) { ?>
                                <h4>البريد الالكتروني</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i>
                                     <?php echo the_field('email', 'option');  ?>
                                     </a></li>
                                </ul>
                            <?php } ?>
                            </div>
                            <div class="col-md-6 p-0">
                                <h4>مسئولي المبيعات</h4>
                                <ul>
                                    <?php if(get_field('phone', 'option')) { ?>
                                    <li><a href="#"><i class="fa fa-phone"></i> <?php the_field('phone', 'option'); ?></a></li>
                                    <?php } ?>
                                    <?php if(get_field('mobile', 'option')) { ?>
                                    <li><a href="#"><i class="fa fa-mobile"></i> <?php the_field('mobile', 'option'); ?></a></li>
                                    <?php } ?>
                                    <?php if(get_field('whats_app', 'option')) { ?>
                                    <li><a href="#"><i class="fa fa-whatsapp"></i> <?php the_field('whats_app', 'option'); ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parteners">
                <?php
                $rows = get_field('footer_logo', 'option');
                if($rows)
                {
                    foreach($rows as $row)
                    {
                        echo '<a href="' . $row['footer_logo_url'] . '"><img src="'. $row['footer_logo_img'] .'" class="img-fluid"></a>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="copy-write">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p> جميع الحقوق محفوظة © مؤسسة تسوق لتقنية المعلومات 2018 </p>
                    </div>
                    <div class="col-md-4 float-left">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-behance"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-vimeo"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i
                                        class="fa fa-youtube-play"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php wp_footer(); ?>
</body>
</html>