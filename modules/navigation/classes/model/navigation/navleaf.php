<?php defined('SYSPATH') or die('No direct script access.');

class Model_Navigation_Navleaf extends ORM
{
	protected $_table_name = 'navleaves';

		// and therefore belongs to it's parent, also.
	protected $_belongs_to = array(
		'navleaf' => array(
			'foreign_key' => 'parent',
		),
	);

		// A navigation tree is composed of many leaves, and
		// a navigation leaf has a 'parent' navigation leaf
	protected $_has_many = array(
		'navtrees' => array(
			'through' => 'navmap',
			'foreign_key' => 'navtree_id',
		),
		'navleaves' => array(
			'foreign_key' => 'parent',
		)
	);
}

