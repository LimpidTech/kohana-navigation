<?php defined('SYSPATH') or die('No direct script access.');

class Model_Navigation_Navtree extends ORM
{

		// A navigation tree is composed of many leaves.
	protected $_has_many = array(
		'leaves' => array(
			'model'   => 'navleaf',
			'through' => 'navmap',
			'far_key' => 'navleaf_id',
		),
	);

}

