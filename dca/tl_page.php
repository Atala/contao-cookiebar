<?php

/*
 * Cookiebar extension for Contao Open Source CMS
 *
 * Copyright (C) 2011-2018 Codefog
 *
 * @author  Codefog <https://codefog.pl>
 * @author  Kamil Kuzminski <https://github.com/qzminski>
 * @license MIT
 */

/**
 * Extend the palettes.
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'cookiebar_enable';
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] .= ';{cookiebar_legend},cookiebar_enable';

$GLOBALS['TL_DCA']['tl_page']['subpalettes']['cookiebar_enable'] = 'cookiebar_message,cookiebar_button,cookiebar_link,cookiebar_position,cookiebar_placement,cookiebar_combineAssets,cookiebar_includeCss,cookiebar_jumpTo,cookiebar_url';

/*
 * Add the fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_enable'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_enable'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['submitOnChange' => true, 'tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_message'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_message'],
    'exclude' => true,
    'inputType' => 'textarea',
    'eval' => ['mandatory' => true, 'tl_class' => 'clr'],
    'sql' => 'text NULL',
];

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_jumpTo'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_jumpTo'],
    'exclude' => true,
    'inputType' => 'pageTree',
    'eval' => ['fieldType' => 'radio', 'tl_class' => 'clr'],
    'sql' => "int(10) unsigned NOT NULL default '0'",
];

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_url'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_url'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['decodeEntities' => true, 'tl_class' => 'clr'],
    'sql' => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_position'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_position'],
    'default' => 'top',
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['top', 'bottom'],
    'reference' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_position'],
    'eval' => ['tl_class' => 'w50'],
    'sql' => "varchar(8) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_placement'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_placement'],
    'default' => 'body_end',
    'exclude' => true,
    'inputType' => 'select',
    'options' => ['body_end', 'before_wrapper'],
    'reference' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_placement'],
    'eval' => ['tl_class' => 'w50'],
    'sql' => "varchar(16) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_button'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_button'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['mandatory' => true, 'maxlength' => 128, 'tl_class' => 'w50'],
    'sql' => "varchar(128) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_link'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_link'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => ['maxlength' => 128, 'tl_class' => 'w50'],
    'sql' => "varchar(128) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_combineAssets'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_combineAssets'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'eval' => ['tl_class' => 'clr w50'],
    'sql' => "char(1) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_page']['fields']['cookiebar_includeCss'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_page']['cookiebar_includeCss'],
    'exclude' => true,
    'inputType' => 'checkbox',
    'default' => 1,
    'eval' => ['tl_class' => 'w50'],
    'sql' => "char(1) NOT NULL default ''",
];
