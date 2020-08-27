<section class="pricelist_sec">
    <div class="container-fluid">
        <div class="cmn_hdr text-center wow fadeInUp" data-wow-delay="0.2s">
            <h2>OUR SERVICES</h2>
        </div>
        <div class="pricelist_bdy row">
        <?php
        $delay = 0.2;
        $pricing_services = get_field('pricing_services');
        if (!empty($pricing_services)) :
        ?>
            <?php
            foreach ($pricing_services as $post) :
                setup_postdata($post); ?>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="<?php echo $delay; $delay+=0.2; ?>s">
                    <div class="pricelist_outr">
                        <div class="pricelist_icon">
                            <img src="<?php $img = get_field('pricing_icon');
                                        echo $img['url'] ?>" alt="<?php echo $img['title'] ?>">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="pricelist_info">
                            <ul>
                                <?php
                                // Check rows exists.
                                if (have_rows('pricing_lists')) :
                                    // Loop through rows.
                                    while (have_rows('pricing_lists')) : the_row(); ?>
                                        <li>
                                            <p><?php the_sub_field('pricing_item') ?></p> $<?php the_sub_field('price') ?>
                                        </li>
                                <?php
                                    endwhile;
                                else :
                                // Do something...
                                endif;
                                ?>
                            </ul>
                        </div>
                        <div class="pricelist_btn">
                            <a href="<?php the_permalink() ?>" class="btn btn-three btn-primary btn1">Learn More</a>
                            <a href="tel:<?php echo get_option('contact_no') ?>" class="btn btn-three btn-primary btn2">Call Us</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;
            wp_reset_postdata();  ?>
        <?php else : ?>
            <?php $loop = new WP_Query(array('post_type' => 'services', 'post_status' => 'publish', 'posts_per_page' => 3));
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="<?php echo $delay; $delay+=0.2; ?>s">
                    <div class="pricelist_outr">
                        <div class="pricelist_icon">
                            <img src="<?php $img = get_field('icon');
                                        echo $img['url'] ?>" alt="<?php echo $img['title'] ?>">
                            <h3><?php the_title() ?></h3>
                        </div>
                        <div class="pricelist_info">
                            <ul>
                                <?php
                                // Check rows exists.
                                if (have_rows('pricing_lists')) :
                                    // Loop through rows.
                                    while (have_rows('pricing_lists')) : the_row(); ?>
                                        <li>
                                            <p><?php the_sub_field('pricing_item') ?></p> $<?php the_sub_field('price') ?>
                                        </li>
                                <?php
                                    endwhile;
                                else :
                                // Do something...
                                endif;
                                ?>
                            </ul>
                        </div>
                        <div class="pricelist_btn">
                            <a href="<?php the_permalink() ?>" class="btn btn-three btn-primary btn1">Learn More</a>
                            <a href="tel:123-456-7890" class="btn btn-three btn-primary btn2">Call Us</a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        <?php endif; ?>
        </div>
    </div>
</section>