<?php

/*
 * This file is part of the Webception package.
 *
 * (c) James Healey <jayhealey@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Load Silex's Autoloader, so Codeception tests can load Webceptions library.
if (file_exists(dirname(__FILE__)  . '/../../../../vendor/autoload.php')) {
    require dirname(__FILE__)  . '/../../../../vendor/autoload.php';

} else if (file_exists(dirname(__FILE__)  . '/../../vendor/autoload.php')) {
    require dirname(__FILE__)  . '/../../vendor/autoload.php';
}

// Load Webceptions custom bootstrap for helper functions.
require dirname(__FILE__)  . '/../bootstrap.php';
