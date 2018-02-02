<?php
/**
 * Contao 4 TinyMCE Abbr Plugin
 *
 * @copyright 2011, 2014, 2018 agentur fipps e.K.
 * @author    Arne Borchert
 * @package   fipps\contao-tinymceabbr-bundle
 * @license   LGPL 3.0+
 */

$GLOBALS['TinyMCE']['menu']['insert']['Insert'] = 'abbr lang | '. $GLOBALS['TinyMCE']['menu']['insert']['Insert'];
$GLOBALS['TinyMCE']['external'][] = array('abbr'=> "/bundles/fippstinymceabbr/abbr/plugin.js");

