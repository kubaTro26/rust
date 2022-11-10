<?php
/* Template name: Partners*/
?>

<?php
get_header();
?>
<section class="header-image-partners">
	<?php if (have_rows('header_image')) : ?>
		<?php while (have_rows('header_image')) : the_row();
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			?>	
			<div class="header-background-partners" style="background-image: url('<?php echo $image['url'] ?>');">
				<p><?php echo $title ?></p>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
<section class="partners">
	<?php if (have_rows('partners')) : ?>
		<?php while (have_rows('partners')) : the_row();
			$image_partners = get_sub_field('image_partners');
			$title = get_sub_field('title');
			?>
			<div class="img-partners" style="background-image: url('<?php echo $image_partners['url'] ?>');"></div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>


<?php
get_footer();
?>