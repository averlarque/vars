<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
	'image' => array(
		'caption' => 'Изображение',
		'type' => 'image'
	),
	'thumb' => array(
		'caption' => 'Thumbnail',
		'type' => 'thumb',
		'thumbof' => 'image'
	),
	'title' => array(
		'caption' => 'Название',
		'type' => 'text'
	)
);
$settings['templates'] = array(
	'outerTpl' => '<div class="images">[+wrapper+]</div>',
	'rowTpl' => '<div class="image"><div class="copyrightwrapper"><img src="[+image+]"  title="[+title+]" /></div></div>'
		)
?>
