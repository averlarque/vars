<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'dropdown' => array(
        'caption' => 'Комната',
        'type' => 'dropdown',
        'elements' => '@SELECT pagetitle, id FROM [+PREFIX+]site_content WHERE parent = 19 ORDER BY menuindex ASC'
    ) ,
    'text' => array(
        'caption' => 'Номер комнаты',
        'type' => 'text'
    ),
    'textPrice' => array(
        'caption' => 'Цена за номер в бел. руб',
        'type' => 'text'
    ),
    'roomsList' => array(
        'caption' => 'Список номеров',
        'type' => 'text'
    )


);
$settings['templates'] = array(
    'outerTpl' => '<ul>[+wrapper+]</ul>',
    'rowTpl' => '<li>[+text+][+dropdown+], [+textPrice+], [+roomsList+]</li>'
);
$settings['configuration'] = array(
    'enablePaste' => TRUE,
    'enableClear' => TRUE,
    'csvseparator' => ','
);

?>
