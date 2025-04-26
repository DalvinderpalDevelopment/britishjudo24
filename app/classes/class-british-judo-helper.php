<?php

/**
 * British Judo Helper class.
 *
 * @author Dalvinderpal Soora
 * @since 1.0.0
 * @package britishjudo24
 */

namespace BritishJudo24;

class Helper {
	/**
	 * Constructor.
	 */
	public function __construct() {}

	/**
	 * Output asset url.
	 *
	 * @param $asset - asset name or full asset url.
	 *
	 * @author Dalvinderpal Soora
	 * @since 1.0.1
	 *
	 * @return string - the url to output.
	 */
	public function asset_url( string $asset ): string {
		$base_path = '/assets/dist';

		// Detect protocol
		$protocol = ( ! empty( $_SERVER['HTTPS'] ) && 'off' !== $_SERVER['HTTPS'] ) ? 'https://' : 'http://';

		// Detect host
		$host = $_SERVER['HTTP_HOST'];

		// Detect if in subfolder (for localhost project folder)
		$subfolder = '';
		if ( false !== strpos( $host, 'localhost' ) ) {
			$subfolder = '/britishjudo24';
		}

		$base_url = $protocol . $host . $subfolder . $base_path;

		// Check if the asset is a full valid URL
		if ( filter_var( $asset, FILTER_VALIDATE_URL ) ) {
			return $asset;
		}

		// Return full URL
		return $base_url . '/' . ltrim( $asset, '/' );
	}
}

?>
