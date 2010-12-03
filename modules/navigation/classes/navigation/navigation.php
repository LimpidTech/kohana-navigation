<?php defined('SYSPATH') or die('No direct script access.');

class Navigation_Navigation
{

	static public function generate($access_key)
	{
		$tree = ORM::factory('navtree', array('access_key' => $access_key))->find();

		if (!$tree->loaded())
			throw new Kohana_Exception('A tree with access_key "' . $access_key . '" does not exist.');

		foreach ($tree->navleaves->find_all() as $leaf)
			print_r($leaf);
	}

}

