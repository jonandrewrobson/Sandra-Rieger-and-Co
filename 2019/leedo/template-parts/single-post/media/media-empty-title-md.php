<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

$size = 'leedo-1920x960_crop';

?>

<div class="vlt-single-post-thumbnail">

	<div class="vlt-page-title-empty vlt-page-title-empty--md jarallax">

		<?php echo leedo_get_attachment_image( get_post_thumbnail_id( get_the_ID() ), $size, 'jarallax-img' ); ?>

	</div>

</div>
<!-- /.vlt-single-post-thumbnail -->