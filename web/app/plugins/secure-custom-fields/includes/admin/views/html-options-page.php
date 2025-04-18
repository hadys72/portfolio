<?php
/**
 * Options Page Template
 *
 * Template for displaying the options page interface.
 *
 * @package wordpress/secure-custom-fields
 */

?>
<div class="wrap acf-settings-wrap">
	
	<h1><?php echo esc_html( $page_title ); ?></h1>
	
	<form id="post" method="post" name="post">
		
		<?php

		// render post data
		acf_form_data(
			array(
				'screen'  => 'options',
				'post_id' => $post_id,
			)
		);

		wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false );
		wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false );

		?>
		
		<div id="poststuff" class="poststuff">
			
			<div id="post-body" class="metabox-holder columns-<?php echo 1 === (int) get_current_screen()->get_columns() ? '1' : '2'; ?>">
				
				<div id="postbox-container-1" class="postbox-container">
					
					<?php do_meta_boxes( 'acf_options_page', 'side', null ); ?>
						
				</div>
				
				<div id="postbox-container-2" class="postbox-container">
					
					<?php do_meta_boxes( 'acf_options_page', 'normal', null ); ?>
					
				</div>
			
			</div>
			
			<br class="clear">
		
		</div>
		
	</form>
	
</div>
