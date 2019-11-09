<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

?>

<h3 class="vlt-post-title"><a href="<?php the_permalink(); ?>"><?php if ( is_sticky() ) { echo '<i class="far fa-bookmark"></i>'; } the_title(); ?></a></h3>
<!-- /.vlt-post-title -->