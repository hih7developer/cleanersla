<?php
// Template Name: Pricing List
?>

<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
    the_content();
}
?>

<section class="pricelist_sec inner_plist">
    <div class="container-fluid">
        <div class="pricelist_bdy processpg_list row">
            <?php
            $delay = 0.4;
            $loop = new WP_Query(array('post_type' => 'services', 'post_status' => 'publish'));
            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); ?>
                <?php if(have_rows('pricing_lists')): ?>
                    <div class="col-md-12 wow fadeInUp" data-wow-delay="<?php echo $delay; $delay += 0.2; ?>s">
                        <div class="pricelist_outr">
                            <div class="pricelist_icon">
                                <img src="<?php $img = get_field('icon');
                                                echo $img['url'] ?>" alt="<?php echo $img['title'] ?>" alt="pli">
                                <h3><?php the_title() ?></h3>
                            </div>
                            <div class="row">
                                <?php
                                $count = count(get_field('pricing_lists'));
                                $devider = ceil($count/3);
                                $start = 0;
                                 ?>
                                <?php for($i = 1; $i <= 3; $i++): ?>
                                <div class="col-md-4 pricelist_inner">
                                    <div class="pricelist_info">
                                        <ul>
                                        <?php
                                        // Check rows exists.
                                        if (have_rows('pricing_lists')) :
                                            // Loop through rows.
                                            $loop_start = 0;
                                            while (have_rows('pricing_lists')) : the_row(); ?>
                                            <?php if($start <= $loop_start && $loop_start < $i*$devider): ?>
                                            <li>
                                                <p><?php the_sub_field('pricing_item') ?></p> $<?php the_sub_field('price') ?>
                                            </li>
                                            <?php endif; ?>
                                        <?php
                                            $loop_start++;
                                            endwhile;
                                        else :
                                        // Do something...
                                        endif;
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php $start += $devider; endfor; ?>
                            </div>
                            <div class="pricelist_btn">
                                <a href="tel:<?php get_option('contact_no') ?>" class="btn btn-three btn-primary btn1">Call Us</a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>