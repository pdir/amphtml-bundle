<?php

/**
 * amphtml for Contao Open Source CMS
 *
 * Copyright (C) 2016 pdir / digital agentur
 *
 * @package    amphtml
 * @link       https://github.com/pdir/amphtml-bundle
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Extend Table tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace(';{publish_legend}',';{amphtml_legend},amphtml;{publish_legend}', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);

/**
 * Extend tl_page palettes
 */
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['amphtml'] = 'ampLayout,ampUseInLayout';

/**
 * Add a selector to tl_page
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'amphtml';

$GLOBALS['TL_DCA']['tl_page']['fields']['amphtml'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['amphtml'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('submitOnChange'=>true, 'doNotCopy'=>true),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ampLayout'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['ampLayout'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'foreignKey'              => 'tl_layout.name',
    'options_callback'        => array('tl_page', 'getPageLayouts'),
    'eval'                    => array('chosen'=>true, 'tl_class'=>'w50'),
    'sql'                     => "int(10) unsigned NOT NULL default '0'",
    'relation'                => array('type'=>'hasOne', 'load'=>'lazy')
);

$GLOBALS['TL_DCA']['tl_page']['fields']['ampUseInLayout'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_module']['ampUseInLayout'],
    'default'                 => array('head', 'footer'),
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'options'                 => array('head', 'footer', 'left', 'right'),
    'reference'               => &$GLOBALS['TL_LANG']['MSC'],
    'eval'                    => array('multiple'=>true),
    'sql'                     => "varchar(255) NOT NULL default ''"
);