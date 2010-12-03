<?php defined('SYSPATH') or die('No direct script access.');

class Model_Navmap extends Model_Navigation_Navmap
{
	protected $_belogs_to = array(
		'navleaf' => array(),
		'navtree' => array(),
	);
}

