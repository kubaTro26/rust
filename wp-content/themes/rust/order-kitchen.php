<?php
/* Template name: Order Kitchen */
?>

<?php
get_header();
?>
<section class="order">
    <?php if (have_rows('order')) : ?>
        <?php while (have_rows('order')) : the_row();
            $img_order = get_sub_field('img_order');
			$head_order_left = get_sub_field('head_order_left');
            $head_order_left_1 = get_sub_field('head_order_left_1');
            $head_order_right = get_sub_field('head_order_right');
			$head_order_1 = get_sub_field('head_order_1');
			$desc_order_1 = get_sub_field('desc_order_1');
			$head_order_2 = get_sub_field('head_order_2');
			$desc_order_2 = get_sub_field('desc_order_2');
			$head_order_3 = get_sub_field('head_order_3');
			$desc_order_3 = get_sub_field('desc_order_3');
			$head_order_4 = get_sub_field('head_order_4');
			$desc_order_4 = get_sub_field('desc_order_4');
			$head_order_5 = get_sub_field('head_order_5');
			$desc_order_5 = get_sub_field('desc_order_5');
			$head_order_6 = get_sub_field('head_order_6');
			$desc_order_6 = get_sub_field('desc_order_6');
			$head_order_7 = get_sub_field('head_order_7');
			$desc_order_7 = get_sub_field('desc_order_7');
        ?>
            <div class="contact-content">
                <div class="img-contact" style="background-image: url('<?php echo $img_order['url'] ?>');">
					<div class="order-content-left">
						<span class="header-left-order-small"><?php echo $head_order_left ?></span>
						<span class="header-left-order"><?php echo $head_order_left_1 ?></span>
						<div class="order-information">
						<div class="order-information-content">
							<span class="order-header" ><?php echo $head_order_1 ?></span>
							<span class="order-desc" ><?php echo $desc_order_1 ?></span>
						</div>
						<div class="order-information-content">
							<span class="order-header" ><?php echo $head_order_2 ?></span>
							<span class="order-desc" ><?php echo $desc_order_2 ?></span>
						</div>
						<div class="order-information-content">
							<span class="order-header" ><?php echo $head_order_3 ?></span>
							<span class="order-desc" ><?php echo $desc_order_3 ?></span>
						</div>
						<div class="order-information-content">
							<span class="order-header" ><?php echo $head_order_4 ?></span>
							<span class="order-desc" ><?php echo $desc_order_4 ?></span>
						</div>
						<div class="order-information-content">
							<span class="order-header" ><?php echo $head_order_5 ?></span>
							<span class="order-desc" ><?php echo $desc_order_5 ?></span>
						</div>
						<div class="order-information-content">
							<span class="order-header" ><?php echo $head_order_6 ?></span>
							<span class="order-desc" ><?php echo $desc_order_6 ?></span>
						</div>
						<div class="order-information-content">
							<span class="order-header" ><?php echo $head_order_7 ?></span>
							<span class="order-desc" ><?php echo $desc_order_7 ?></span>
						</div>
						</div>
					</div>
					<div class="order-content-right">
						<span class="header-right-contact"><?php echo $head_order_right ?></span>
						<div class="contact-form"<?php echo do_shortcode('[contact-form-7 id="965" title="Formularz 1"]'); ?>></div>
					</div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php
get_footer();
?>