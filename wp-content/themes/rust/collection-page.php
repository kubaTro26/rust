<?php
/* Template name: Collection-page */
?>

<?php
get_header();
?>

<?php
$link_data = get_field('video_link');
$link_bg = get_field('bg_front');



if (!empty($link_data)) {
    $link = $link_data['url'];

    if (!empty($link_bg))

        $linkbg = $link_bg['url'];
?>

<?php } ?>
<section class="collections-page">
    <?php if (have_rows('collections_page')) : ?>
        <?php while (have_rows('collections_page')) : the_row();
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
					li2: "<?php the_sub_field('image_2'); ?>",
					li3: "<?php the_sub_field('image_3'); ?>",
					li4: "<?php the_sub_field('image_4'); ?>",
					li5: "<?php the_sub_field('image_5'); ?>",
					li6: "<?php the_sub_field('image_6'); ?>",
					li7: "<?php the_sub_field('image_7'); ?>",
					li8: "<?php the_sub_field('image_8'); ?>",
					li9: "<?php the_sub_field('image_9'); ?>",
					li10: "<?php the_sub_field('image_10'); ?>",
					li11: "<?php the_sub_field('image_11'); ?>",
					li12: "<?php the_sub_field('image_12'); ?>",
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
		<div class="video-section-page">
			<video autoplay="autoplay" muted="" loop="" poster="<?php echo $linkbg; ?>" style="" width="100%" height="100%">
				<source src="<?php echo $link; ?>" type="video/mp4" style="object-fit: cover;">
			</video>
            <div class="collections-section-page <?php echo $class ?>">
                <span class="title"><?php echo $title ?></span>

                <div class="content">
                    <?php echo $desc ?>
                    <div class="img"><img id="image1" height="0" /></div>
                </div>
            </div>
		</div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php
get_footer();
?>