<?php
/* Template name: Design*/
?>

<?php
get_header();
?>
<section class="header-image-design">
	<?php if (have_rows('header_image')) : ?>
		<?php while (have_rows('header_image')) : the_row();
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$description = get_sub_field('description');
			?>
			
			<div class="header-background-design" style="background-image: url('<?php echo $image['url'] ?>');">
				<p><?php echo $title ?></p>
			</div>
			
			<div class="content">
				<div class="description">
					<?php echo $description ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
<section class="slider-collection">
    <?php if (have_rows('slider-collection')) : ?>
        <?php while (have_rows('slider-collection')) : the_row();
            $img_slider = get_sub_field('img_slider');
            $head_slider = get_sub_field('head_slider');
			$desc_slider = get_sub_field('desc_slider');
			$layout_box = get_sub_field('layout_box');
				if ($layout_box == 'flex-row-reverse') {
					$class = 'flex-row-reverse';
				} else {
					$class = 'flex-row';
				}
        ?>
            <div class="collection <?php echo $class ?>">
				<div class="content-slider-left">
					<div class="img-slider" style="background-image: url('<?php echo $img_slider['url'] ?>');"></div>		
					</div>
				<div class="content-slider-right <?php echo $class ?>">
					<span class="header-slider-right "><?php echo $head_slider ?></span>
					<span class="desc-slider-right"><?php echo $desc_slider ?></span>	
				</div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<?php
get_footer();
?>