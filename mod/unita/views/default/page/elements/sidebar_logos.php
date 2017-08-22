<?php
/**
 * Icon module
 *
 */
$path_graphics = elgg_get_site_url()."mod/unita/graphics/sidebar_logos";

echo <<<HTML

<div class="logo-sidebar-block">
	<ul>
		<li>
			<img class="logo-sidebar" src="$path_graphics/goias.jpeg">
		</li>
		<li>
			<img class="logo-sidebar" src="$path_graphics/sed.jpeg">
		</li>
		<li>
			<img class="logo-sidebar" src="$path_graphics/itego.jpeg">
		</li>
	</ul>
</div>

HTML;
