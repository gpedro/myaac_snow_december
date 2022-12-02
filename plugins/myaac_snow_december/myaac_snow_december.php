<?php
/**
 * Myaac Snow December
 *
 * @name      myaac_snow_december
 * @author    gpedro <github.com/gpedro>
 * @website   github.com/gpedro
 * @version   1.0.0
 */
defined('MYAAC') or die('Direct access not allowed!');

global $twig_loader;
$twig_loader->prependPath(PLUGINS . 'myaac_snow_december');

if (date('m') === '12') {
    $twig->display('myaac_snow_december.html.twig');
}
