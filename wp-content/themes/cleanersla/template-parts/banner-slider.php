<section class="banner_sec">
    <div class="banner_sec_info">
        <div class="swiper-container banner_slider">
            <div class="swiper-wrapper">
                <?php
                // Check rows exists.
                if (have_rows('slider')) :
                    // Loop through rows.
                    while (have_rows('slider')) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="bnr_otr">
                                <div class="bnr_img_otr">
                                    <img src="<?php $img = get_sub_field('slider_image'); echo $img['url'] ?>">
                                </div>
                                <div class="bnr_content text-left">
                                    <div class="container">
                                        <div class="wow fadeInLeftBig" data-wow-delay="0.2s">
                                            <h1><?php the_sub_field('slider_title') ?></h1>
                                            <p><?php the_sub_field('slider_content') ?></p>
                                        </div>
                                        <div class="bnr_btn wow fadeInUp" data-wow-delay="0.6s">
                                            <a href="<?php $link = get_sub_field('slider_download_link'); echo $link['url'] ?>" 
                                            target="<?php echo $link['target'] ?>"
                                            class="btn btn-primary cmn_btn"><?php echo $link['title'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                else :
                // Do something...
                endif;
                ?>


            </div>
        </div>
    </div>
</section>