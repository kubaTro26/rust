<?php
/* Template name: Showrooms*/
?>

<?php
get_header();
?>

<section class="header-image-showrooms">
	<?php if (have_rows('header_image')) : ?>
		<?php while (have_rows('header_image')) : the_row();
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			?>
			
			<div class="header-background-design" style="background-image: url('<?php echo $image['url'] ?>');">
				<p><?php echo $title ?></p>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>
<div class="description-showrooms">
    <div class="container-description-right"><?php echo get_field('desc_showrooms'); ?>
	</div>
</div>
<section class="salons" >
    <?php if (have_rows('salons')) : ?>
        <?php while (have_rows('salons')) : the_row();
			$list_city = get_sub_field('list_city');
            $city_head = get_sub_field('city_head');
            $image = get_sub_field('image');
            $description_city = get_sub_field('description_city');
            $adress_salon = get_sub_field('adress_salon');
            $opening_hours = get_sub_field('opening_hours');
            $img_salon = get_sub_field('img_salon');
        ?>
			<div class="list-section-city"><?php echo $list_city?></div>
			<div class="salons-section">
				<div class="section-salons-left">
					<div class="city-head"><?php echo $city_head ?></div>
					<div class="description-city"><?php echo $description_city ?></div>
					<div class="adress-salon"><?php echo $adress_salon ?></div>
					<div class="opening-hours"><?php echo $opening_hours ?></div>
				</div>
				<div class="section-salons-right">
					<div class="img_salon" style="background-image: url('<?php echo $img_salon['url'] ?>');"></div>
				</div>
			</div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<section class="teams-showrooms">
	<?php if (have_rows('teams_showrooms')) : ?>
		<?php while (have_rows('teams_showrooms')) : the_row();
				$title_showrooms = get_sub_field('title_showrooms');
				$people_img = get_sub_field('people_img');
				$people_name = get_sub_field('people_name');
				$people_desc = get_sub_field('people_desc');
				$people_img_2 = get_sub_field('people_img_2');
				$people_name_2 = get_sub_field('people_name_2');
				$people_desc_2 = get_sub_field('people_desc_2');
				$people_img_3 = get_sub_field('people_img_3');
				$people_name_3 = get_sub_field('people_name_3');
				$people_desc_3 = get_sub_field('people_desc_3');
				$people_img_4 = get_sub_field('people_img_4');
				$people_name_4 = get_sub_field('people_name_4');
				$people_desc_4 = get_sub_field('people_desc_4');
			?>
				<div class="header-team"><?php echo $title_showrooms?></div>
				<div class="content-teams-showrooms">
					<div class="content-teams-people">
						<div class="people-img" style="background-image: url('<?php echo $people_img['url'] ?>');"></div>
						<div class="people-name"><?php echo $people_name ?></div>
						<div class="people-desc"><?php echo $people_desc ?></div>
					</div>
					<div class="content-teams-people">
						<div class="people-img" style="background-image: url('<?php echo $people_img_2['url'] ?>');"></div>
						<div class="people-name"><?php echo $people_name_2 ?></div>
						<div class="people-desc"><?php echo $people_desc_2 ?></div>
					</div>
					<div class="content-teams-people">
						<div class="people-img" style="background-image: url('<?php echo $people_img_3['url'] ?>');"></div>
						<div class="people-name"><?php echo $people_name_3 ?></div>
						<div class="people-desc"><?php echo $people_desc_3 ?></div>
					</div>
					<div class="content-teams-people">
						<div class="people-img" style="background-image: url('<?php echo $people_img_4['url'] ?>');"></div>
						<div class="people-name"><?php echo $people_name_4 ?></div>
						<div class="people-desc"><?php echo $people_desc_4 ?></div>
					</div>
				</div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>	
<div class="list-city-last">		
	<div class="list-section-city"><?php echo get_field('list_city_last');?></div>
</div>
<?php
get_footer();
?>