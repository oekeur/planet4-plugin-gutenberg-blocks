<?php
/**
 * Base block class.
 *
 * @package P4GBKS
 */

namespace P4GBKS\Blocks;

/**
 * Class Base_Block
 *
 * @package P4GBKS\Blocks
 */
class Base_Block {

	/**
	 * Outputs an error message.
	 *
	 * @param string $message Error message.
	 */
	public function render_error_message( $message ) {
		// Ensure only editors see the error, not visitors to the website.
		if ( current_user_can( 'edit_posts' ) ) {
			\Timber::render(
				P4GBKS_PLUGIN_DIR . 'templates/block-error-message.twig',
				array(
					'category' => __( 'Error', 'planet4-blocks' ),
					'message'  => $message,
				)
			);
		}
	}
}
