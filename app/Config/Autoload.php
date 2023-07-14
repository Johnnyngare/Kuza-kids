<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

$autoload['controllers'] = array('AuthController');

/**
 * -------------------------------------------------------------------
 * AUTOLOADER CONFIGURATION
 * -------------------------------------------------------------------
 *
 * This file defines the namespaces and class maps so the Autoloader
 * can find the files as needed.
 *
 * NOTE: If you use an identical key in $psr4 or $classmap, then
 * the values in this file will overwrite the framework's values.
 */
class Autoload extends AutoloadConfig
{
    public $psr4 = [
        'App' => APPPATH, // Add the missing single quote before 'App'
        'Config' => APPPATH . 'Config',
        'CodeIgniter' => SYSTEMPATH . 'CodeIgniter',
        'Tests\Support' => TESTPATH . '_support',
    ];
    

    public $classmap = [];

    public $files = [];

    public $helpers = [];
}
