q<?php
/**
 * Table tl_amphtml
 */
$GLOBALS['TL_DCA']['tl_amphtml'] = array
(
    // Config
    'config' => array
    (
        'dataContainer'               => 'Table',
        'switchToEdit'                => true,
        'enableVersioning'            => true,
        'onload_callback' => array
        (
        ),
        'onsubmit_callback' => array
        (
        ),
        'sql' => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        )
    ),
    // List
    'list' => array
    (
        'sorting' => array
        (
            'mode'                    => 1,
            'fields'                  => array('title'),
            'headerFields'            => array('title'),
            'flag'                    => 1,
            'panelLayout'             => 'debug;filter;sort,search,limit',
        ),
        'label' => array
        (
            'fields'                  => array('title'),
            'format'                  => '%s',
            'showColumns'             => true,
        ),
        'global_operations' => array
        (
        ),
        'operations' => array
        (
            'edit' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_amphtml']['edit'],
                'href'                => 'table=tl_amphtml',
                'icon'                => 'edit.gif'
            ),
            'editheader' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_amphtml']['editheader'],
                'href'                => 'act=edit',
                'icon'                => 'header.gif',
            ),
            'copy' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_amphtml']['copy'],
                'href'                => 'act=copy',
                'icon'                => 'copy.gif',
            ),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_amphtml']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_amphtml']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
    ),
    // Palettes
    'palettes' => array
    (
        '__selector__'                => array(),
        'default'                     => '{title_legend},title'
    ),
    // Subpalettes
    'subpalettes' => array
    (
    ),
    // Fields
    'fields' => array
    (
        'id' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp' => array
        (
            'sql'                     => "int(10) unsigned NOT NULL default '0'"
        ),
        'title' => array
        (
            'label'                   => &$GLOBALS['TL_LANG']['tl_amphtml']['title'],
            'exclude'                 => true,
            'search'                  => true,
            'inputType'               => 'text',
            'eval'                    => array('mandatory'=>true, 'maxlength'=>255),
            'sql'                     => "varchar(255) NOT NULL default ''",
            'sorting'				  => true
        ),
    )
);