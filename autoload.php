<?php

/**
 * @package   MySQLr
 * @module    Autoload
 * @version   0.0.2
 * @since     0.0.1
 * @author    Roderic Linguri
 * @copyright 2018 Digices LLC
 * @license   MIT
 */

namespace digices\mysqlr;

if (!function_exists('digices\\mysqlr\\load_src')) {

  function load_src() {
    $path = __DIR__.DIRECTORY_SEPARATOR.'src';
    $di = new \DirectoryIterator($path);
    foreach ($di as $item) {
      $fn = $item->getFilename();
      if (substr($fn, 0, 1) != '.') {
        require_once $path.DIRECTORY_SEPARATOR.$fn;
      }
    }
  } // ./load_src
  
  \digices\mysqlr\load_src();
  
 } // ./only load if function does not exist

