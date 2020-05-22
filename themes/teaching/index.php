    <?php get_header(); ?>
    <!-- main --------------------------->
    <main>
        <article>
            <section class="wlc-ILA">
                <div class="w-1200 mgr-auto">
                    <?php 
                        $args = array(
                            'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                            'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
                            'showposts' => 1, // số lượng bài viết
                            'cat' => 1, // lấy bài viết trong chuyên mục có id là 1
                            'p' => 12,
                        );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <h1 class="title-section"><?php the_title(); ?></h1>
                        <div class="wlc-ILA-content"><?php the_content(); ?></div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
                    
            </section>
            
            <section class="about">
                <div class="w-1200 mgr-auto">
                    <?php 
                        $args = array(
                            'post_status' => 'publish', 
                            'post_type' => 'post', 
                            'showposts' => 1,
                            'cat' => 1,
                            'p' => 18, 
                        );
                    ?>
                    <?php $getposts = new WP_query($args); ?>
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <h2 class="title-section"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    <?php endwhile; wp_reset_postdata(); ?>
<!--
                    <div class="about-content flex flex-warp space-between align-center">
                        <div class="about-child">
                            <h3 class="title-child">ILA story</h3>
                            <img src="<?php bloginfo('template_directory') ?>/images/about-01.png" alt="ila story">
                            <button class="btn btn-read-more">Read more</button>
                        </div>
                        <div class="about-child">
                            <h3 class="title-child">Vision &middot Misson &middot Value</h3>
                            <img src="<?php bloginfo('template_directory') ?>/images/about-02.png" alt="ila story">
                            <button class="btn btn-read-more">Read more</button>
                        </div>
                        <div class="about-child">
                            <h3 class="title-child">Products</h3>
                            <img src="<?php bloginfo('template_directory') ?>/images/about-03.png" alt="ila story">
                            <button class="btn btn-read-more">Read more</button>
                        </div>
                        <div class="about-child">
                            <h3 class="title-child">Centers/location/Vietnam map</h3>
                            <img src="<?php bloginfo('template_directory') ?>/images/about-04.png" alt="ila story">
                            <button class="btn btn-read-more">Read more</button>
                        </div>
                    </div>
-->
                </div>
            </section>
            
            <section class="work-ILA">
                <div class="w-1200 mgr-auto">
                    <h2 class="title-section">Why work at ILA?</h2>
                    <div class="work-ILA-content">
                        <ol class="list-counter flex flex-warp space-between align-center">
                            <li>Competitive salary</li>
                            <li>Visa/work permit</li>
                            <li>Paid training</li>
                            <li>Health insurance</li>
                            <li>Holiday & Annual leave</li>
                            <li>Housing allowance for province centes</li>
                            <li>Health insurance</li>
                            <li>Holiday & Annual leave</li>
                            <li>Housing allowance for province centes</li>
                        </ol>
                    </div>
                </div>
            </section>
            
            <section class="about-us">
                <div class="w-1200 mgr-auto">
                    <h2 class="title-section">What do our employees say about us?</h2>
                    <div class="about-us-content">
                        <div class="video-block mgr-auto">
                            <video width="100%" height="100%" autoplay="" loop="" playsinline="" controls="">
                                <source src="https://ila.edu.vn/front/media/ila-brand-video.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="slider-about">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="about-us-child swiper-slide">
                                        <div class="says-avatar">1</div>
                                        <span class="icon-quote"></span>
                                        <p class="quote">We hire all year round, but our busi-est period is over summer (Jun-Jul) and the start of the new school year (Sept). May through to October ts the peak hiring season for ILA.</p>
                                        <p class="signature">Nguyen Van A</p>
                                        <p class="postion">Officer</p>
                                    </div>
                                    
                                    <div class="about-us-child swiper-slide">
                                        <div class="says-avatar">2</div>
                                        <span class="icon-quote"></span>
                                        <p class="quote">We hire all year round, but our busi-est period is over summer (Jun-Jul) and the start of the new school year (Sept). May through to October ts the peak hiring season for ILA.</p>
                                        <p class="signature">Nguyen Van A</p>
                                        <p class="postion">Officer</p>
                                    </div>
                                    
                                    <div class="about-us-child swiper-slide">
                                        <div class="says-avatar">3</div>
                                        <span class="icon-quote"></span>
                                        <p class="quote">We hire all year round, but our busi-est period is over summer (Jun-Jul) and the start of the new school year (Sept). May through to October ts the peak hiring season for ILA.</p>
                                        <p class="signature">Nguyen Van A</p>
                                        <p class="postion">Officer</p>
                                    </div>
                                    
                                    <div class="about-us-child swiper-slide">
                                        <div class="says-avatar">4</div>
                                        <span class="icon-quote"></span>
                                        <p class="quote">We hire all year round, but our busi-est period is over summer (Jun-Jul) and the start of the new school year (Sept). May through to October ts the peak hiring season for ILA.</p>
                                        <p class="signature">Nguyen Van A</p>
                                        <p class="postion">Officer</p>
                                    </div>
                                    
                                    <div class="about-us-child swiper-slide">
                                        <div class="says-avatar">5</div>
                                        <span class="icon-quote"></span>
                                        <p class="quote">We hire all year round, but our busi-est period is over summer (Jun-Jul) and the start of the new school year (Sept). May through to October ts the peak hiring season for ILA.</p>
                                        <p class="signature">Nguyen Van A</p>
                                        <p class="postion">Officer</p>
                                    </div>
                                    
                                    <div class="about-us-child swiper-slide">
                                        <div class="says-avatar">6</div>
                                        <span class="icon-quote"></span>
                                        <p class="quote">We hire all year round, but our busi-est period is over summer (Jun-Jul) and the start of the new school year (Sept). May through to October ts the peak hiring season for ILA.</p>
                                        <p class="signature">Nguyen Van A</p>
                                        <p class="postion">Officer</p>
                                    </div>
                                </div>
                                  
                            </div> 
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <button class="btn btn-read-more">Read more</button>
                    </div>
                </div>
                
            </section>
            
            <section class="career-frm">
                <div class="career-banner">
                    <div class="w-1200 mgr-auto">
                        <h2 class="title-section">So now are you ready to explore your new teaching career?</h2>
                    </div>
                </div>
                <div class="w-1200 mgr-auto">
                    <div class="career-frm-content">
                        <div class="tabs-k career-frm-tabs">
                            <!-- Tab 1 -->
                            <input type="radio" name="tabset" id="tab1" aria-controls="vacancy" checked>
                            <label for="tab1">Vacancy List</label>
                            <!-- Tab 2 -->
                            <input type="radio" name="tabset" id="tab2" aria-controls="application-frm">
                            <label for="tab2">Application Form</label>
                            <div class="tab-panels">
                                <section id="vacancy" class="tab-panel">
                                    <?php get_template_part('vacancy-list'); ?>
                                </section>
                                <section id="application-frm" class="tab-panel">
                                    <?php get_template_part('application-frm'); ?>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="faq">
                <div class="w-1200 mgr-auto">
                    <div class="img-warp">
                        <img src="<?php bloginfo('template_directory') ?>/images/FAQ.png" alt="FAQ">
                    </div>
                    
                    <div class="faq-content">
                        <div class="slider-faq">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="about-us-child swiper-slide">
                                        <p class="signature">I don’t have a bachelor's degree, can I still work at ILA?</p>
                                        <p class="quote">One of our job requirements is that all our teachers have completed a Bachelor’s degree. This is also a legal requirement to gain a work permit in Vietnam.</p>
                                    </div>
                                    <div class="about-us-child swiper-slide">
                                        <p class="signature">Do you offer short term contracts?</p>
                                        <p class="quote">All of our contracts are a year in ength. At times we will consider part time contracts of a minimum of 6 months for in-country hires. During the summer period, we may offer shorter term contracts</p>
                                    </div>
                                    <div class="about-us-child swiper-slide">
                                        <p class="signature">What TEFL certiﬁcates does ILA consider?</p>
                                        <p class="quote">One of our hiring criteria is that all teachers must have completed acertiﬁcation in English Language Teaching. We consider all applications from candidates that have an English language teaching certiﬁcation. Your course must be at least 120 hours in-class with 4 hours of observed teaching practice with real students.</p>
                                    </div>
                                    <div class="about-us-child swiper-slide">
                                        <p class="signature">Do you offer short term contracts?</p>
                                        <p class="quote">All of our contracts are a year in ength. At times we will consider part time contracts of a minimum of 6 months for in-country hires. During the summer period, we may offer shorter term contracts</p>
                                    </div>
                                    <div class="about-us-child swiper-slide">
                                        <p class="signature">What TEFL certiﬁcates does ILA consider?</p>
                                        <p class="quote">One of our hiring criteria is that all teachers must have completed acertiﬁcation in English Language Teaching. We consider all applications from candidates that have an English language teaching certiﬁcation. Your course must be at least 120 hours in-class with 4 hours of observed teaching practice with real students.</p>
                                    </div>
                                </div>
                            </div> 
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <button class="btn btn-read-more">Read more</button>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <!----------------------------------->
    <?php get_footer(); ?>
    