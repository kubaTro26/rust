<?php
/* Template name: Collection Product */
?>

<?php
get_header();
?>


<section class="header_image">
	<?php if (have_rows('header_image')) : ?>
		<?php while (have_rows('header_image')) : the_row();
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$description_1 = get_sub_field('description_1');
			$description_2 = get_sub_field('description_2'); ?>

			<div class="header_background" style="background-image: url('<?php echo $image['url'] ?>');">
				<?php echo $title ?>
			</div>

			<div class="description">
				<div class="desc1">
					<?php echo $description_1 ?>
				</div>
				<div class="desc2">
					<?php echo $description_2 ?>
				</div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="discover_kitchen">
	<?php if (have_rows('discover_kitchen')) : ?>
		<?php while (have_rows('discover_kitchen')) : the_row();
			$image_1 = get_sub_field('image_1');
			$image_2 = get_sub_field('image_2');
			$desc = get_sub_field('desc');
			$pole1img1 = get_sub_field('pole1-image_1');
			$pole2img1 = get_sub_field('pole2-image_1');
			$pole3img1 = get_sub_field('pole3-image_1');
			$pole4img1 = get_sub_field('pole4-image_1');
			$pole5img1 = get_sub_field('pole5-image_1');
			$pole6img1 = get_sub_field('pole6-image_1');
			$pole7img1 = get_sub_field('pole7-image_1');
			$pole8img1 = get_sub_field('pole8-image_1');
			$pole1img2 = get_sub_field('pole1-image_2');
			$pole2img2 = get_sub_field('pole2-image_2');
			$pole3img2 = get_sub_field('pole3-image_2');
			$pole4img2 = get_sub_field('pole4-image_2');
			$pole5img2 = get_sub_field('pole5-image_2');
			$layout_box = get_sub_field('layout_box');
			if ($layout_box == 'flex-row-reverse') {
				$class = 'flex-row-reverse';
			} else {
				$class = 'flex-row';
			}
		?>

			<div class="discover_the_kitchen <?php echo $class ?>">
				<div class="desc">
					<?php echo $desc ?>
				</div>
				<div class="image">
					<img src="<?php echo $image_1['url'] ?>" alt="Kolekcja DeepHarmony">
					<div class="field_1" style="top: 40%; left: 12%;">
						<span class="circle">
						<span class="text bottom" style="width:174px; height:125px;"><?php echo $pole1img1 ?></span>
						</span>
					</div>
					<div class="field_1" style="top: 48%; left: 36%;">
						<span class="circle">
						<span class="text bottom2" style="width:138px; height:74px;"><?php echo $pole2img1 ?></span>
						</span>
					</div>
					<div class="field_1" style="top: 35%; left: 40%;">
						<span class="circle">
						<span class="text top" style="width:186px; height:73px;"><?php echo $pole3img1 ?></span>
						</span>
					</div>
					<div class="field_1" style="top: 55%; left: 37%;">
						<span class="circle">
						<span class="text right" style="width:158px; height:152px;"><?php echo $pole4img1 ?></span>
						</span>
					</div>
					<div class="field_1" style="top: 43%; left: 73%;">
						<span class="circle">
						<span class="text top2" style="width:133px; height:73px;"><?php echo $pole5img1 ?></span>
						</span>
					</div>
					<div class="field_1" style="top: 61%; left: 68%;">
						<span class="circle">
						<span class="text bottom3" style="width:173px; height:100px;"><?php echo $pole6img1 ?></span>
						</span>
					</div>
					<div class="field_1" style="top: 30%; left: 83%;">
						<span class="circle">
						<span class="text top3" style="width:132px; height:73px;"><?php echo $pole7img1 ?></span>
						</span>
					</div>
					<div class="field_1" style="top: 27%; left: 93%;">
						<span class="circle">
						<span class="text top4" style="width:121px; height:99px;"><?php echo $pole8img1 ?></span>
						</span>
					</div>
				</div>
			</div>
			<div class="image_2">
				<img src="<?php echo $image_2['url'] ?>" alt="Kolekcja DeepHarmony">
				<div class="field_2" style="top: 78%; left: 12%;">
						<span class="circle">
						<span class="text top5" style="width:185px; height:73px;"><?php echo $pole1img2 ?></span>
						</span>
					</div>
				<div class="field_2" style="top: 28%; left: 31%;">
						<span class="circle">
						<span class="text top6" style="width:191px; height:49px;"><?php echo $pole2img2 ?></span>
						</span>
					</div>
				<div class="field_2" style="top: 26%; left: 56%;">
						<span class="circle">
						<span class="text bottom4" style="width:133px; height:73px;"><?php echo $pole3img2 ?></span>
						</span>
					</div>
				<div class="field_2" style="top: 36%; left: 74%;">
						<span class="circle">
						<span class="text right2" style="width:125px; height:74px;"><?php echo $pole4img2 ?></span>
						</span>
					</div>
				<div class="field_2" style="top: 89%; left: 46%;">
						<span class="circle">
						<span class="text right3" style="width:272px; height:100px;"><?php echo $pole5img2 ?></span>
						</span>
					</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="detail_matters">
	<?php if (have_rows('detail_matters')) : ?>
		<?php while (have_rows('detail_matters')) : the_row();
			$title = get_sub_field('title');
			$image_1 = get_sub_field('image_1');
			$image_2 = get_sub_field('image_2');
			$image_3 = get_sub_field('image_3');
			$desc = get_sub_field('desc');
			$layout_box = get_sub_field('layout_box');
			if ($layout_box == 'flex-row-reverse') {
				$class = 'flex-row-reverse';
			} else {
				$class = 'flex-row';
			}
		?>

			<div class="detailmatters  <?php echo $class ?>">
				<div class="title"><?php echo $title ?></div>
				<div class="images">
					<div class="images_image1" style="background-image: url('<?php echo $image_1['url'] ?>');"></div>
					<div class="images_image2" style="background-image: url('<?php echo $image_2['url'] ?>');"></div>
					<div class="images_image3" style="background-image: url('<?php echo $image_3['url'] ?>');"></div>
				</div>
				<div class="description <?php echo $class2 ?>">
					<div class="description_desc">
						<?php echo $desc ?>
					</div>
				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="well_planned">
	<?php if (have_rows('well_planned')) : ?>
		<?php while (have_rows('well_planned')) : the_row();
			$title = get_sub_field('title');
			$title_2 = get_sub_field('title_2');
			$image = get_sub_field('image');
			$image_2 = get_sub_field('image_2');
			$desc = get_sub_field('desc');
			$desc_2 = get_sub_field('desc_2');
			$desc_3 = get_sub_field('desc_3');
			$layout_box = get_sub_field('layout_box');
			if ($layout_box == 'flex-row-reverse') {
				$class = 'flex-row-reverse';
			} else {
				$class = 'flex-row';
			}
		?>

			<div class="wellplanned  <?php echo $class ?>">
				<div class="image" style="background-image: url('<?php echo $image['url'] ?>');"></div>
				<div class="content order">
					<div class="title">
						<?php echo $title ?>
					</div>
					<div class="desc">
						<?php echo $desc ?>
					</div>
				</div>

				<div class="content white">
					<div class="title_2">
						<?php echo $title_2 ?>
					</div>
					<div class="desc_2">
						<?php echo $desc_2 ?>
					</div>
				</div>
				<div class="image" style="background-image: url('<?php echo $image_2['url'] ?>');"></div>

				<div class="desc_3">
					<?php echo $desc_3 ?>
				</div>
			</div>

		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="unique_harmony">
	<?php if (have_rows('unique_harmony')) : ?>
		<?php while (have_rows('unique_harmony')) : the_row();
			$title = get_sub_field('title');
			$image = get_sub_field('image');
			$image_2 = get_sub_field('image_2');
			$desc = get_sub_field('desc');
			$layout_box = get_sub_field('layout_box');
			if ($layout_box == 'flex-row-reverse') {
				$class = 'flex-row-reverse';
			} else {
				$class = 'flex-row';
			}
		?>

			<div class="uniqueharmony  <?php echo $class ?>">
				<div class="image" style="background-image: url('<?php echo $image['url'] ?>');"></div>
				<div class="content">
					<div class="title">
						<?php echo $title ?>
					</div>
					<div class="description">
						<?php echo $desc ?>
					</div>
				</div>
				<div class="image_2" style="background-image: url('<?php echo $image_2['url'] ?>');"></div>
			</div>



		<?php endwhile; ?>
	<?php endif; ?>
</section>

<section class="discover_the_rest">
	<?php if (have_rows('discover_the_rest')) : ?>
		<?php while (have_rows('discover_the_rest')) : the_row();
			$title = get_sub_field('title');
			$logo = get_sub_field('logo');
			$image_1 = get_sub_field('image_1');
			$image_2 = get_sub_field('image_2');
			$image_3 = get_sub_field('image_3');
			$image_4 = get_sub_field('image_4');
			$image_5 = get_sub_field('image_5');
			$image_6 = get_sub_field('image_6');
			$desc_1 = get_sub_field('desc_1');
			$desc_2 = get_sub_field('desc_2');
			$desc_3 = get_sub_field('desc_3');
			$desc_4 = get_sub_field('desc_4');
			$desc_5 = get_sub_field('desc_5');
			$desc_6 = get_sub_field('desc_6');
		?>

			<div class="discovertherest">
				<div class="title">
					<?php echo $title ?>
					<div class="logo" style="background-image: url('<?php echo $logo['url'] ?>');"></div>
				</div>
				<div class="images">
					<div class="img_wrapper_1">
						<img src="<?php echo $image_1['url'] ?>">
						<?php echo $desc_1 ?>
					</div>
					<div class="img_wrapper_2">
						<img src="<?php echo $image_2['url'] ?>">
						<?php echo $desc_2 ?>
					</div>
					<div class="img_wrapper_3">
						<img src="<?php echo $image_3['url'] ?>">
						<?php echo $desc_3 ?>
					</div>
					<div class="img_wrapper_4">
						<img src="<?php echo $image_4['url'] ?>">
						<?php echo $desc_4 ?>
					</div>
					<div class="img_wrapper_5">
						<img src="<?php echo $image_5['url'] ?>">
						<?php echo $desc_5 ?>
					</div>
					<div class="img_wrapper_6">
						<img src="<?php echo $image_6['url'] ?>">
						<?php echo $desc_6 ?>
					</div>
				</div>

			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<?php
get_footer();
