<?php defined('SYSPATH') or die('No direct script access.');

class Model_Navigation_Navtree extends ORM
{

		// A navigation tree is composed of many leaves.
	protected $_has_many = array(
		'navleaves' => array(
			'model'   => 'navleaf',
			'through' => 'navmap',
			'foreign_key' => 'navleaf_id',
		),
	);

}

