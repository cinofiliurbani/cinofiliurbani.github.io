<?php
/**
 * Fields.
 *
 * @package ConvertPro
 */

$text_attributes = array(
	'id'      => 'cp_text_par',
	'type'    => 'text',
	'scripts' => '',
	'styles'  => '',
);

echo wp_json_encode( $text_attributes );
