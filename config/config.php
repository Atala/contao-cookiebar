<?php

/**
 * cookiebar extension for Contao Open Source CMS
 *
 * Copyright (C) 2013 Codefog
 *
 * @package cookiebar
 * @author  Codefog <http://codefog.pl>
 * @author  Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license LGPL
 */


/**
 * Extension version
 */
@define('COOKIEBAR_VERSION', '1.3');
@define('COOKIEBAR_BUILD', '0');


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('CookieBar', 'addCookiebarScripts');
$GLOBALS['TL_HOOKS']['getCacheKey'][] = array('CookieBar', 'modifyCacheKey');
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('CookieBar', 'addCookiebarBuffer');
