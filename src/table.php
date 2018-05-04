<?php

/**
 * @package   MySQLr
 * @module    table
 * @version   0.0.4
 * @since     0.0.4
 * @author    Roderic Linguri
 * @copyright 2018 Digices LLC
 * @license   MIT
 */

namespace digices\mysqlr;

abstract class Table
{

  /** @property \digices\mysqlr\Database **/
  protected $database;

  /** @property string */
  protected $name;

  /** @method Fetch Row By Id
    * @param  string (sql statement)
    * @return integer (affected rows)
    **/
  public function fetchRowById($int) {
    $sql = "SELECT * FROM `".$this->name."` WHERE `id` = ".$int.";";
    if ($rows = $this->database->fetch($sql)) {
      if (count($rows) > 0) {
        return $rows[0];
      }
    }
    return false;
  } // ./fetchRowById

  public function fetchRowsByColumn($column,$value)
  {
    $sql = "SELECT * FROM `".$this->name."` WHERE `".$column."` = '".$value."';";
    if ($rows = $this->database->fetch($sql)) {
      if (count($rows) > 0) {
        return $rows;
      }
    }
    return false;
  }

} // ./Table
