<section class="contactinfo_sec">
    <div class="container-fluid">
        <div class="contactinfo_bdy">
            <div class="contactinfo_list">
                <div class="cmn_hdr color_white text-left wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Contact with Cleaners la</h2>
                </div>
                <ul>
                    <li>
                        <em><img src="<?php echo bloginfo('template_url') ?>/assets/images/contact_icon1.png"></em>
                        <span><?php echo get_option('address') ?></span>
                    </li>
                    <li>
                        <em><img src="<?php echo bloginfo('template_url') ?>/assets/images/contact_icon2.png"></em>
                        <span><a href="mailto:<?php echo get_option('email') ?>"><?php echo get_option('email') ?></a></span>
                    </li>
                    <li>
                        <em><img src="<?php echo bloginfo('template_url') ?>/assets/images/contact_icon3.png"></em>
                        <span><a href="tel:+<?php echo get_option('contact_no') ?>"><?php echo get_option('contact_no') ?></a></span>
                    </li>
                    <li>
                        <em><img src="<?php echo bloginfo('template_url') ?>/assets/images/contact_icon4.png"></em>
                        <span><?php echo get_option('timing') ?></span>
                    </li>
                </ul>
            </div>
            <div class="contactinfo_form">
                <div class="cmn_hdr text-left wow fadeInUp" data-wow-delay="0.4s">
                    <h2>Get In Touch To Know Your feedback About our company</h2>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="123" title="Home Contact Form"]') ?>
            </div>
        </div>
    </div>
</section>