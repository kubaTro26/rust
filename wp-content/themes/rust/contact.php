<?php
/* Template name: Contact */
?>

<?php
get_header();
?>
<section class="contact">
    <?php if (have_rows('contact')) : ?>
        <?php while (have_rows('contact')) : the_row();
            $img_contact = get_sub_field('img_contact');
			$img_contact_map = get_sub_field('img_contact_map');
            $head_contact_left = get_sub_field('head_contact_left');
            $head_contact_right = get_sub_field('head_contact_right');
			$location_salon = get_sub_field('location_salon');
			$location_adress = get_sub_field('location_adress');
			$location_salon_1 = get_sub_field('location_salon_1');
			$location_adress_1 = get_sub_field('location_adress_1');
			$location_salon_2 = get_sub_field('location_salon_2');
			$location_adress_2 = get_sub_field('location_adress_2');
			$location_salon_3 = get_sub_field('location_salon_3');
			$location_adress_3 = get_sub_field('location_adress_3');
			$location_salon_4 = get_sub_field('location_salon_4');
			$location_adress_4 = get_sub_field('location_adress_4');
			$location_salon_5 = get_sub_field('location_salon_5');
			$location_adress_5 = get_sub_field('location_adress_5');
        ?>
            <div class="contact-content">
                <div class="img-contact" style="background-image: url('<?php echo $img_contact['url'] ?>');">
					<div class="contact-content-left">
						<span class="header-left-contact"><?php echo $head_contact_left ?></span>
						<div class="img-map" style="background-image: url('<?php echo $img_contact_map['url'] ?>');"></div>	
						<div class="location-salon">
						<div class="location-salon-content">
							<span class="salon-location" ><?php echo $location_salon ?></span>
							<span class="salon-adress" ><?php echo $location_adress ?></span>
						</div>
						<div class="location-salon-content">
							<span class="salon-location" ><?php echo $location_salon_1 ?></span>
							<span class="salon-adress" ><?php echo $location_adress_1 ?></span>
						</div>
						<div class="location-salon-content">
							<span class="salon-location" ><?php echo $location_salon_2 ?></span>
							<span class="salon-adress" ><?php echo $location_adress_2 ?></span>
						</div>
						<div class="location-salon-content">
							<span class="salon-location" ><?php echo $location_salon_3 ?></span>
							<span class="salon-adress" ><?php echo $location_adress_3 ?></span>
						</div>
						<div class="location-salon-content">
							<span class="salon-location" ><?php echo $location_salon_4 ?></span>
							<span class="salon-adress" ><?php echo $location_adress_4 ?></span>
						</div>
						<div class="location-salon-content">
							<span class="salon-location" ><?php echo $location_salon_5 ?></span>
							<span class="salon-adress" ><?php echo $location_adress_5 ?></span>
						</div>
						</div>
					</div>
					<div class="contact-content-right">
						<span class="header-right-contact"><?php echo $head_contact_right ?></span>
						<div class="contact-form"<?php echo do_shortcode('[contact-form-7 id="965" title="Formularz 1"]'); ?>></div>
					</div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php
get_footer();
?>