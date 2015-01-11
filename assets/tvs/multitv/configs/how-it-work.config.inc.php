<?php
$settings['display'] = 'datatable';
$settings['fields'] = array(
	'title' => array(
		'caption' => 'Title',
		'type' => 'text'
	),
	'text' => array(
		'caption' => 'Step text',
		'type' => 'richtext'
	)
);
$settings['templates'] = array(
	'outerTpl' => '<ul>[+wrapper+]</ul>',
	'rowTpl' => '<li>[+title+], [+text+]</li>'
);
$settings['columns'] = array(
    array(
        'caption' => 'Title',
        'fieldname' => 'title',
        'render' => '<strong>[+title+]</strong>'
    )
);
$settings['form'] = array(
    array(
        'caption' => 'Title',
        'content' => array(
            'title' => array(
            ),
            'text' => array(
            )
        )
    )
);
$settings['configuration'] = array(
	'enablePaste' => TRUE,
	'enableClear' => TRUE,
	'csvseparator' => ','
);
?>
