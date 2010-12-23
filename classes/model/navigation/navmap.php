<?php defined('SYSPATH') or die('No direct script access.');

class Model_Navigation_Navmap extends ORM
{
	protected $_belogs_to = array(
		'navleaf' => array(),
		'navtree' => array(),
	);
}

