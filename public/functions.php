<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php
/**
* Class and Function List:
* Function list:
* - _d()
* Classes list:
*/
/**
 * Display whatever, but display nicely
 * @param  string|array|whatever $what 
 * @return 0       Print out array nicely
 */
function _d($what) {
	echo '<pre>';
	print_r($what);
	echo '</pre>';
}
