<?php
/* Template name: Front-page */
?>

<?php
get_header();
?>

<?php
$link_data = get_field('video_link');
$link_bg = get_field('bg_front');
$image_section = get_field('image_section');
$header_section_1 = get_field('header_section_1');
$img_world = get_field('img_world');



if (!empty($link_data)) {
    $link = $link_data['url'];

    if (!empty($link_bg))

        $linkbg = $link_bg['url'];
?>

    <div class="video-section">
        <video autoplay="autoplay" muted="" loop="" poster="<?php echo $linkbg; ?>" style="" width="100%" height="100%">

            <source src="<?php echo $link; ?>" type="video/mp4" style="object-fit: cover;">

            Your browser does not support the video tag.

        </video>
        <?php echo get_field('header_desc'); ?>
    </div>
<?php } ?>

<div class="head-desc">
	<div class="container-desc">
		<?php echo get_field('header_description'); ?>
			<div class="desc_front">
				<?php echo get_field('link_desc'); ?>
			</div>
	</div>
</div>
<section class="collections">
    <?php if (have_rows('collections')) : ?>
        <?php while (have_rows('collections')) : the_row();
            $img_box = get_sub_field('img_box');
            $title = get_sub_field('title');
            $desc = get_sub_field('desc');
            $layout_box = get_sub_field('layout_box');
            if ($layout_box == 'flex-row-reverse') {
                $class = 'flex-row-reverse';
            } else {
                $class = 'flex-row';
            }
        ?>

            <script>
                var myImages = {
                    li1: "<?php the_sub_field('image_1'); ?>",
                    li2: "image2.jpg",
                    li3: "image3.jpg"
                };
                window.onload = function() {
                    var lis = document.getElementById('myList').getElementsByTagName('li');
                    for (var i = 0; i < lis.length; i++) {
                        lis[i].onmouseover = function() {
                            document.getElementById('image1').src = myImages[this.id];
                            document.getElementById('image1').style.height = "auto";
                        }
                        lis[i].onmouseout = function() {
                            document.getElementById('image1').style.height = '0';
                        }
                    }
                }
            </script>

            <div class="collections_section <?php echo $class ?>">
                <span class="title"><?php echo $title ?></span>

                <div class="content">
                    <?php echo $desc ?>
                    <div class="img"><img id="image1" height="0" /></div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<div class="container-fluid desc pt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 desc_left <?php echo get_field('layout'); ?>">
                <?php echo get_field('desc_page'); ?>
                <?php echo get_field('link'); ?>
            </div>
            <div class="col-12 col-md-6 desc_right"><?php echo get_field('desc_page2'); ?></div>
        </div>
    </div>
</div>

<section class="page_loop_3">
    <?php if (have_rows('page_loop_3')) : ?>
        <?php while (have_rows('page_loop_3')) : the_row();
            $img_desc = get_sub_field('img_desc');
            $head_desc_1 = get_sub_field('head_desc_1');
            $single_desc_1 = get_sub_field('single_desc_1');
			$single_desc_2 = get_sub_field('single_desc_2');
			$link_desc_1 = get_sub_field('link_desc_1');
        ?>
            <div class="page_loop_single_3 <?php echo $class ?>">
                <div class="img" style="background-image: url('<?php echo $img_desc['url'] ?>');">
                <div class="content">
                    <span class="desc_1"><?php echo $head_desc_1 ?></span>
                    <span class="desc_2"><?php echo $single_desc_1 ?></span>
					<span class="desc_3"><?php echo $single_desc_2 ?></span>
					<span class="desc_4"><?php echo $link_desc_1 ?></span>					
                </div>
				</div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<section class="last_section">
    <?php if (have_rows('last_section')) : ?>
        <?php while (have_rows('last_section')) : the_row();
            $title = get_sub_field('title');
			$title_desc = get_sub_field('title_desc');
            $image_1 = get_sub_field('image_1');
            $image_2 = get_sub_field('image_2');
            $image_3 = get_sub_field('image_3');
            $layout_box = get_sub_field('layout_box');
            $layout_box2 = get_sub_field('layout_box2');
            $desc = get_sub_field('desc');
            if ($layout_box == 'flex-row-reverse') {
                $class = 'flex-row-reverse';
            } else {
                $class = 'flex-row';
            }
            if ($layout_box2 == 'flex-row-reverse') {
                $class2 = 'flex-row-reverse';
            } else {
                $class2 = 'flex-row';
            }
        ?>

            <div class="lastsection  <?php echo $class ?>">
                <div class="title"><?php echo $title ?></div>
				<div class="title_desc"><?php echo $title_desc ?></div>
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
	<?php
$link_photo = get_field('zdjecie');

if (!empty($link_photo)) {
    $linkphoto = $link_photo['url'];
}
?>
</section>
<div class="image_section">
	<div class="image_sg" style="background-image: url('<?php echo $image_section['url'] ?>');"></div>
</div>
<div class="header_section">
	<div class="header_desc">
		<?php echo get_field('header_section_1'); ?>
	</div>
</div>
<section class="teams">
    <?php if (have_rows('teams')) : ?>
        <?php while (have_rows('teams')) : the_row();
            $image_team_1 = get_sub_field('image_team_1');
            $image_team_2 = get_sub_field('image_team_2');
            $image_team_3 = get_sub_field('image_team_3');
			$image_team_4 = get_sub_field('image_team_4');
			$image_team_5 = get_sub_field('image_team_5');
			$image_team_6 = get_sub_field('image_team_6');
			$image_team_7 = get_sub_field('image_team_7');
		?>
		
		            <div class="teams_image">
                    <div class="image_team_f" style="background-image: url('<?php echo $image_team_1['url'] ?>');"></div>
                    <div class="image_team" style="background-image: url('<?php echo $image_team_2['url'] ?>');"></div>
                    <div class="image_team" style="background-image: url('<?php echo $image_team_3['url'] ?>');"></div>
					<div class="image_team" style="background-image: url('<?php echo $image_team_4['url'] ?>');"></div>
					<div class="image_team" style="background-image: url('<?php echo $image_team_5['url'] ?>');"></div>
					<div class="image_team" style="background-image: url('<?php echo $image_team_6['url'] ?>');"></div>
					<div class="image_team_l" style="background-image: url('<?php echo $image_team_7['url'] ?>');"></div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<div class="front_title">
	<?php if (have_rows('front_title')) : ?>
		<?php while (have_rows('front_title')) : the_row();
			$front_title_1 = get_sub_field('front_title_1');
			$front_title_2 = get_sub_field('front_title_2');
			$front_title_3 = get_sub_field('front_title_3');	
		?>
				<div class="head_desc_white">
					<div class="container_desc_white_title"> <?php echo $front_title_1 ?></div>
					<div class="container_desc_white_mid"> <?php echo $front_title_2 ?></div>
					<div class="container_desc_white_end"> <?php echo $front_title_3 ?></div>
				</div>
	        <?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="description">
	<div class="description_desc">
		<?php echo get_field('description_home_1'); ?>
	</div>
</div>
<div class="world">
	<div class="img_world" style="background-image: url('<?php echo get_field ('img_world')['url'] ?>');"></div>
</div>
<div class="first-section <?php echo get_field('layout2'); ?>">
    <div class="tekst-wrapper">
        <span><?php echo get_field('tekst'); ?></span>
    </div>
    <div class="image-wrapper">
        <img class="img-fluid" src="<?php echo $linkphoto; ?>">
    </div>
</div>

<section class="page_loop">
    <?php if (have_rows('page_loop')) : ?>
        <?php while (have_rows('page_loop')) : the_row();
            $img_box = get_sub_field('img_box');
            $desc_page = get_sub_field('desc_page');
            $desc_page2 = get_sub_field('desc_page2');
            $layout_box = get_sub_field('layout_box');
            if ($layout_box == 'flex-row-reverse') {
                $class = 'flex-row-reverse';
            } else {
                $class = 'flex-row';
            }
        ?>
            <div class="page_loop_single <?php echo $class ?>">
                <div class="img" style="background-image: url('<?php echo $img_box['url'] ?>');">
                </div>
                <div class="content">
                    <span class="desc_1"><?php echo $desc_page ?></span>
                    <span class="desc_2"><?php echo $desc_page2 ?></span>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="page_loop2">
    <?php if (have_rows('page_loop2')) : ?>
        <?php while (have_rows('page_loop2')) : the_row();
            $img_box = get_sub_field('img_box');
            $desc_page = get_sub_field('desc_page');
            $desc_page2 = get_sub_field('desc_page2');
            $layout_box = get_sub_field('layout_box');
            if ($layout_box == 'flex-row-reverse') {
                $class = 'flex-row-reverse';
            } else {
                $class = 'flex-row';
            }
        ?>
            <div class="page_loop_single <?php echo $class ?>">
                <div class="img" style="background-image: url('<?php echo $img_box['url'] ?>');">
                </div>
                <div class="content">
                    <span class="desc_1"><?php echo $desc_page ?></span>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>
<section class="our_salons">
    <?php if (have_rows('our_salons')) : ?>
        <?php while (have_rows('our_salons')) : the_row();
            $title = get_sub_field('title');
            $image = get_sub_field('image');
            $country_1 = get_sub_field('country_1');
            $country_2 = get_sub_field('country_2');
            $country_3 = get_sub_field('country_3');
            $country_4 = get_sub_field('country_4');
            $contracts = get_sub_field('contracts');
            $layout_box = get_sub_field('layout_box');
            $city_1 = get_sub_field('city_1');
            $city_2 = get_sub_field('city_2');
            $city_3 = get_sub_field('city_3');
            $city_4 = get_sub_field('city_4');
            if ($layout_box == 'flex-row-reverse') {
                $class = 'flex-row-reverse';
            } else {
                $class = 'flex-row';
            }
        ?>

            <div class="our_salons_section <?php echo $class ?>">
                <div class="section_one">
                    <span class="title"><?php echo $title ?></span>
                    <ul>
                        <li><?php echo $country_1 ?><span><?php echo $city_1 ?></span></li>
                        <li><?php echo $country_2 ?><span><?php echo $city_2 ?></span></li>
                        <li><?php echo $country_3 ?><span><?php echo $city_3 ?></span></li>
                        <li><?php echo $country_4 ?><span><?php echo $city_4 ?></span></li>
                    </ul>
                    <span class="contracts"><?php echo $contracts ?></span>

                </div>
                <div class="section_second" style="background-image: url('<?php echo $image['url'] ?>');">
                </div>


            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<?php
get_footer();
