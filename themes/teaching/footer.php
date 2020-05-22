<!-- Footer ------------------------->
    <footer>
        <div class="w-1200 mgr-auto">
            <h3>Contact US:</h3>
            <div class="footer-content flex flex-warp space-between align-end">
                <ul class="address">
                    <li><img src="<?php bloginfo('template_directory') ?>/images/icon-local.png" alt=""><p>12<sup>th</sup> Floor, 146 Nguyen Dinh Chieu Street, District 3, Ho Chi Minh City, Vietnam</p></li>
                    <li><img src="<?php bloginfo('template_directory') ?>/images/icon-phone.png" alt=""><p>+84 (28) 7302 4466</p></li>
                    <li><img src="<?php bloginfo('template_directory') ?>/images/icon-mail.png" alt=""><a href="mailto:teacherrecruitment@ilavietnam.edu.vn">teacherrecruitment@ilavietnam.edu.vn</a></li>
                </ul>
                <ul class="social-icon flex space-between">
                    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/icon-fb.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/icon-youtube.png" alt="Youtube"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/icon-in.png" alt="In"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory') ?>/images/icon-tw.png" alt="TW"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!----------------------------------->
    <script>
        var swiperabout = new Swiper('.slider-about .swiper-container',{
            slidesPerView: 3,
            spaceBetween: 30, 
            navigation: {
                nextEl: '.slider-about .swiper-button-next',
                prevEl: '.slider-about .swiper-button-prev',
            }
        });
        var swiperfaq = new Swiper('.slider-faq .swiper-container',{
            slidesPerView: 3,
            spaceBetween: 30, 
            navigation: {
                nextEl: '.slider-faq .swiper-button-next',
                prevEl: '.slider-faq .swiper-button-prev',
            }
        });
    </script>
    <?php wp_footer(); ?>
</body>

</html>