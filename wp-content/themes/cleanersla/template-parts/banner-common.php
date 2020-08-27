<section class="banner_sec">
    <div class="banner_sec_info">
        <div class="bnr_otr">
            <div class="bnr_img_otr">
                <img src="<?php $img = get_field('banner_image'); echo $img['url'] ?>">
            </div>
            <div class="bnr_content text-left">
                <div class="container">
                    <div class="wow fadeInLeftBig" data-wow-delay="0.2s">
                        <h1><?php the_field('banner_title') ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>