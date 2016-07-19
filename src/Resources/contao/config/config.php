<?php
/**
 * Back end modules
 */

/*$GLOBALS['BE_MOD']['content'] = array(
    'amphtml' => array
    (
        'tables'      => array('tl_amphtml'),
        'icon'        => 'system/modules/news/assets/icon.gif',
    )
);*/

$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('\Pdir\AmphtmlHooks', 'ampGetPageLayout');
$GLOBALS['TL_HOOKS']['generateFrontendUrl'][] = array('\Pdir\AmphtmlHooks', 'ampGenerateFrontendUrl');

$count = count($GLOBALS['BE_MOD']['content']);
array_insert($GLOBALS['BE_MOD']['content'],$count, [
    'AMP HTML' => [
        'tables' => ['tl_amphtml']
    ]
]);