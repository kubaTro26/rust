<?php
/* Template name: World-RUST*/
?>

<?php
get_header();
?>

<section class="world-rust">
    <?php if (have_rows('world_rust')) : ?>
        <?php while (have_rows('world_rust')) : the_row();
            $img_world_rust = get_sub_field('img_world_rust');
			$img_world_rust_1 = get_sub_field('img_world_rust_1');
            $head_world_rust = get_sub_field('head_world_rust');
            $head_world_rust_1 = get_sub_field('head_world_rust_1');
			$desc_world_rust = get_sub_field('desc_world_rust');
			    if ($layout_box == 'flex-row-reverse') {
					$class = 'flex-row-reverse';
            }   else {
					$class = 'flex-row';
            }
        ?>
            <div class="world-rust <?php echo $class ?>">
                <div class="img-world-rust" style="background-image: url('<?php echo $img_world_rust['url'] ?>');">
					<div class="content-left">
						<span class="header-left"><?php echo $head_world_rust ?></span>
						<div class="img-rust" style="background-image: url('<?php echo $img_world_rust_1['url'] ?>');"></div>		
					</div>
					<div class="content-right">
						<span class="header-right"><?php echo $head_world_rust_1 ?></span>
						<span class="desc-right"><?php echo $desc_world_rust ?></span>		
					</div>
				</div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<section class="mission">
    <?php if (have_rows('mission')) : ?>
        <?php while (have_rows('mission')) : the_row();
            $img_mission = get_sub_field('img_mission');
            $head_mission = get_sub_field('head_mission');
			$desc_mission = get_sub_field('desc_mission');
			    if ($layout_box == 'flex-row-reverse') {
					$class = 'flex-row-reverse';
            }   else {
					$class = 'flex-row';
            }
        ?>
            <div class="mission <?php echo $class ?>">
				<div class="content-left-mission">
					<span class="header-mission-left"><?php echo $head_mission ?></span>
					<span class="desc-mission-left"><?php echo $desc_mission ?></span>	
				</div>
				<div class="content-right-mission">
					<div class="img-mission" style="background-image: url('<?php echo $img_mission['url'] ?>');"></div>		
				</div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php
get_footer();
?>