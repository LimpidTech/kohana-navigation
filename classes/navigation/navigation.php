<?php defined('SYSPATH') or die('No direct script access.');

class Navigation_Navigation
{

	static public function get($identifier, $access_key = true)
	{
		if ($access_key)
			$parent = ORM::factory('navtree', array('access_key' => $identifier))->find();
		else
			$parent = $identifier;

		if ($access_key && !$parent->loaded())
				throw new Kohana_Exception('A navigation tree with access_key "' . $identifier . '" could not be found.');

		$leaves = $parent->leaves->find_all();

		if (count($leaves) > 0)
			return View::factory('navigation/leaves')->set('leaves', $leaves);
	}

}

