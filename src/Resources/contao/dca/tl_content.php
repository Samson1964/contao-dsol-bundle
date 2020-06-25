<?php

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['dsol'] = '{type_legend},type,headline;{dsol_legend},dsol_mode;{protected_legend:hide},protected;{expert_legend:hide},guest,cssID,space;{invisible_legend:hide},invisible,start,stop';

/**
 * Fields
 */

// Template zuweisen

$GLOBALS['TL_DCA']['tl_content']['fields']['dsol_mode'] = array
(
	'label'                => &$GLOBALS['TL_LANG']['tl_content']['dsol_mode'],
	'exclude'              => true,
	'inputType'            => 'select',
	'options'              => $GLOBALS['TL_LANG']['tl_content']['dsol_mode_options'],
	'eval'                 => array('tl_class'=>'w50'),
	'sql'                  => "char(1) NOT NULL default ''"
);

class tl_content_dsol extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}

}
