<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   PersiansDate
 * @author    Hamid Abbaszadeh
 * @license   LGPL-3.0+
 * @copyright 2014-2015
 */


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['parseDate'][] = array('PersianDate', 'parse');

