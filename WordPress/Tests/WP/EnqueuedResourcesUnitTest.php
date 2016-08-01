<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package  PHP\CodeSniffer\WordPress-Coding-Standards
 * @link     https://make.wordpress.org/core/handbook/best-practices/coding-standards/
 */

/**
 * Unit test class for the EnqueuedResources sniff.
 *
 * @package   PHP\CodeSniffer\WordPress-Coding-Standards
 * @author    Shady Sharaf <shady@x-team.com>
 */
class WordPress_Tests_WP_EnqueuedResourcesUnitTest extends AbstractSniffUnitTest {

	/**
	 * Skip this test on PHP 5.2.
	 *
	 * @since 0.9.0
	 *
	 * @return bool Whether to skip this test.
	 */
	protected function shouldSkipTest() {
		return version_compare( PHP_VERSION, '5.3.0', '<' );
	}

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			1 => 1,
			2 => 1,
			6 => 1,
			7 => 1,
			10 => 1,
			11 => 1,
		);

	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array();

	}

} // End class.
