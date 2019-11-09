<?php

/**
 * @author: VLThemes
 * @version: 1.3.1
 */

?>

<div class="vlt-search-wrapper">

	<form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">

		<input type="text" id="s" name="s" placeholder="<?php esc_attr_e( 'Enter Keyword', 'leedo' ); ?>" value="<?php echo get_search_query(); ?>">

		<p><?php esc_html_e( 'Click "Enter" to submit the form.', 'leedo' ); ?></p>

	</form>

</div>
<!-- /.vlt-search-wrapper -->