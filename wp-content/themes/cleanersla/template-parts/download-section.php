<section class="appdow_sec">
    <div class="container-fluid">
        <div class="appdow_bdy">
            <div class="appdow_bdy_left">
                <div class="cmn_hdr color_white text-left wow fadeInUp" data-wow-delay="0.2s">
                    <h2><?php the_field('download_title') ?></h2>
                    <?php the_field('download_content') ?>
                </div>
                <div class="app_dloadsec wow fadeInUp" data-wow-delay="0.4s">
                    <a href="<?php $link = get_field('google_play_link'); echo $link['url'] ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/gplay.png"></a>
                    <a href="<?php $link = get_field('ios_link'); echo $link['url'] ?>"><img src="<?php bloginfo('template_url') ?>/assets/images/gplay2.png"></a>
                </div>
            </div>
            <div class="appdow_bdy_right wow fadeInUp" data-wow-delay="0.7s">
                <img src="<?php $img = get_field('download_image'); echo $img['url'] ?>">
            </div>
        </div>
    </div>
</section>