<section class="ourservices_sec">
    <div class="container-fluid">
        <div class="cmn_hdr color_white text-center wow fadeInUp" data-wow-delay="0.2s">
            <h2>OUR SERVICES</h2>
        </div>
        <div class="ourservices_bdy">
            <?php
            $delay = 0.4;
            $loop = new WP_Query(array('post_type' => 'services', 'post_status' => 'publish', 'posts_per_page' => 5));
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
            <div class="ourservices_outr wow fadeInUp" data-wow-delay="<?php echo $delay; $delay += 0.2; ?>s">
                <div class="service_icon">
                    <img src="<?php $img = get_field('icon'); echo $img['url'] ?>" alt="<?php echo $img['title'] ?>">
                </div>
                <div class="service_info">
                    <h3><?php the_title() ?></h3>
                    <p><?php echo wp_trim_words(get_field('short_description'), 20, '...') ?></p>
                </div>
                <div class="ourprocess_bdy_btn">
                    <a href="<?php the_permalink() ?>" class="btn btn-three btn-primary">Read More <i
                            class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>