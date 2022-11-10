<?php
/* Template name: Single realizacja */
?>

<?php
get_header();
?>


<div class="header_image">
	<div class="header-background-image" style="background-image: url('<?php echo get_field ('header_image')['url'] ?>');"></div>
</div>
<section class="desc-realisation">
	<?php if (have_rows('desc_realisation')) : ?>
		<?php while (have_rows('desc_realisation')) : the_row();
			$project = get_sub_field('project');
			$cooperation = get_sub_field('cooperation');
			$architect = get_sub_field('architect');
			$photo = get_sub_field('photo');
			$desc_real = get_sub_field('desc_real');
		?>	
            <div class="realisation-content">
				<div class="realisation-content-left">
					<span class="desc-realisation-left "><?php echo $project ?></span>
					<span class="desc-realisation-left "><?php echo $cooperation ?></span>	
					<span class="desc-realisation-left "><?php echo $architect ?></span>	
					<span class="desc-realisation-left "><?php echo $photo ?></span>						
				</div>
				<div class="realisation-content-right <?php echo $class ?>">
					<span class="desc-realisation-right "><?php echo $desc_real ?></span>
				</div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<div class="last-realisation">
	<div class="last-realisation-content">
		<?php echo get_field('last_realisation'); ?>
		<div class="logo_realisation" style="background-image: url('<?php echo get_field ('logo_realisation')['url'] ?>');"></div>
	</div>
</div>

<?php
get_footer();
