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
			'far_key' => 'navtree_id',
		),
		'leaves' => array(
			'model' => 'navleaf',
			'foreign_key' => 'parent_id',
		)
	);

	// TODO: Modify these to more intelligently decide what sort of
	//       destination we have been given.

	public function get_destination()
	{
		return $this->destination;
	}

	public function is_active()
	{
		if ($_SERVER['REQUEST_URI'] == $this->destination)
			return true;

		return false;
	}
}

