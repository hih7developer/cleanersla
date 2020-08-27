<section class="ourservices_sec inner_service_sec">
    <div class="container-fluid">
        <div class="cmn_hdr color_white text-center wow fadeInUp" data-wow-delay="0.2s">
            <h2>OUR SERVICES</h2>
        </div>
        <div class="ourservices_bdy_outr row">
            <?php
            $delay = 0.4;
            $loop = new WP_Query(array('post_type' => 'services', 'post_status' => 'publish'));
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="col-md-6 ourservices_bdy_inr wow fadeInUp" data-wow-delay="<?php echo $delay; $delay += 0.2; ?>s">
                <div class="service_icon">
                    <img src="<?php $img = get_field('icon'); echo $img['url'] ?>" alt="<?php echo $img['title'] ?>">
                </div>
                <div class="service_info">
                    <h3><?php the_title() ?></h3>
                    <span><?php the_field('tagline') ?></span>
                    <p><?php the_field('short_description') ?></p>
                </div>
            </div>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>