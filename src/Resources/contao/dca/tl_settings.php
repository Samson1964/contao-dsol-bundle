<?php

/**
 * palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{dsol_legend:hide},dsol_dbuser,dsol_dbpass';

/**
 * fields
 */

$GLOBALS['TL_DCA']['tl_settings']['fields']['dsol_dbuser'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['dsol_dbuser'],
	'inputType'     => 'text',
	'eval'          => array('tl_class'=>'w50')
);

$GLOBALS['TL_DCA']['tl_settings']['fields']['dsol_dbpass'] = array
(
	'label'         => &$GLOBALS['TL_LANG']['tl_settings']['dsol_dbpass'],
	'inputType'     => 'text',
	'eval'          => array('tl_class'=>'w50')
);
