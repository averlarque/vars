<?php
$settings['display'] = 'datatable';
$settings['fields'] = array(
	'title' => array(
		'caption' => 'Title',
		'type' => 'text'
	),
    'subtitle' => array(
		'caption' => 'Short text',
		'type' => 'text'
	),
    'text' => array(
		'caption' => 'Text',
		'type' => 'textarea'
	),

    'link' => array(
        'caption' => 'Link',
        'type' => 'text'
    ),
	'image' => array(
		'caption' => 'Image',
		'type' => 'image'
	),
	'thumb' => array(
		'caption' => 'Thumbnail',
		'type' => 'thumb',
		'thumbof' => 'image'
	),
    'imagePadLand' => array(
		'caption' => 'Image Pad Land',
		'type' => 'image'
	),
	'thumbPadLand' => array(
		'caption' => 'Thumbnail',
		'type' => 'thumb',
		'thumbof' => 'imagePadLand'
	),
    'imagePadPort' => array(
		'caption' => 'Image Pad Port',
		'type' => 'image'
	),
	'thumbPadPort' => array(
		'caption' => 'Thumbnail',
		'type' => 'thumb',
		'thumbof' => 'imagePadPort'
	),
    'imageMobileLand' => array(
        'caption' => 'Image Mobile Land',
        'type' => 'image'
    ),
    'thumbMobileLand' => array(
        'caption' => 'Thumbnail',
        'type' => 'thumb',
        'thumbof' => 'imageMobileLand'
    ),
    'imageMobilePort' => array(
        'caption' => 'Image Mobile Port',
        'type' => 'image'
    ),
    'thumbMobilePort' => array(
        'caption' => 'Thumbnail',
        'type' => 'thumb',
        'thumbof' => 'imageMobilePort'
    )
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
            'subtitle' => array(
            ),
            'text' => array(
            ),
            'link' => array(
            ),
            'image' => array(
            ),
            'thumb' => array(
            ),
            'imagePadLand' => array(
            ),
            'thumbPadLand' => array(
            ),
            'imagePadPort' => array(
            ),
            'thumbPadPort' => array(
            ),
            'imageMobileLand' => array(
            ),
            'thumbMobileLand' => array(
            ),
            'imageMobilePort' => array(
            ),
            'thumbMobilePort' => array(
            )
        )
    )
);
$settings['templates'] = array(
	'outerTpl' => '<ul>[+wrapper+]</ul>',
	'rowTpl' => '<li>[+title+],[+text+], [+link+], [+image+], [+thumb+]</li>'
);
$settings['configuration'] = array(
	'enablePaste' => TRUE,
	'enableClear' => TRUE,
	'csvseparator' => ','
);
?>
