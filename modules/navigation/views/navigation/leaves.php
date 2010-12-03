<?php defined('SYSPATH') or die('No direct script access.'); ?>

<ul>

<?php
	foreach ($leaves as $leaf)
	{
?>

	<li>
		<a href="<?php print $leaf->get_destination(); ?>" title="<?php print $leaf->title; ?>">
			<?php print $leaf->label; ?>
		</a>

		<?php
			print Navigation::get($leaf, false);
		?>
	</li>

<?php
	}
?>

</ul>
