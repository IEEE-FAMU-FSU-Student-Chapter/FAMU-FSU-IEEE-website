<?php
//============================================================
// File   : Table.php
// Author : Dominic Eaton
// Created: 8/11/2016
// Updated: 8/22/2016
// Purpose: Create page class.
// Usage  :
//============================================================

abstract class Table {
    protected $id = null;
    protected $table = null;

    function __construct() {

    }

    /* Data handling Functions */
    /* assign data from associative array to data in table object */
    public function bind($data) {
        $this->$data = $data;
        foreach ($data as $key => $value) {
            $this->$key["'$key'"] = $value;
        }
    }

    public function create($id) {
      $this->id = $id;
      $dbc =  database::getInstance();
      $sqlCmd = $this->buildQuery('create');
      $results = $dbc->doQuery($sqlCmd);
    }

    public function load($id) {
        $this->id = $id;
        $dbc =  database::getInstance();
        $sqlCmd = $this->buildQuery('load');
        $results = $dbc->doQuery($sqlCmd);
        return sqlite_fetch_array($results, SQLITE_ASSOC);
    }

    public function store($id) {
        $this->id = $id;
        $dbc =  database::getInstance();
        $sqlCmd = (!$this->load($id)) ? $this->buildQuery('insert') : $this->buildQuery('update');
        $results = $dbc->doQuery($sqlCmd);
    }

    public function delete($id) {
        $this->id = $id;
        $dbc =  database::getInstance();
        $sqlCmd = $this->buildQuery('delete');
        $results = $dbc->doQuery($sqlCmd);
    }


    private function buildQuery($task) {
        switch ($task) {
            case 'create':
                $sqlCmd = "CREATE TABLE {$this->table}(" .
                          "id INTEGER PRIMARY KEY, " .
                          "title VARCHAR(100) NOT NULL, " .
                          "header VARCHAR(50) NOT NULL, " .
                          "content TEXT NOT NULL, " .
                          "stylesheet TEXT NOT NULL)" ;
                break;
            case 'load':
                $sqlCmd = "SELECT * FROM $this->table WHERE id = $this->id";
                break;
            case 'insert':
              $classVars = get_class_vars(get_class($this));
              $keys = "id,";
              $values = "$this->id,";
              $sqlCmd = "INSERT INTO $this->table";
              foreach ($classVars as $key => $value) {
                  if($key == "table" ) {
                      continue;
                  }
                  $keys .= "${key}, ";
                  $values .= "'" . $this->$key["'$key'"] . "', ";
                  echo $this->$key . "</br>";
              }
              $sqlCmd .= "(".substr($keys, 0, -2).") VALUES(".substr($values, 0, -2).")";
              break;
            case 'update':
              $classVars = get_class_vars(get_class($this));
              $sqlCmd = "UPDATE $this->table SET ";
              foreach ($classVars as $key => $value) {
                  if($key == "id" || $key == "table" ) {
                      continue;
                  }
                   $sqlCmd .= "${key} = '" . $this->$key["'$key'"] . "', ";
              }

              $sqlCmd = substr($sqlCmd, 0, -2);
              $sqlCmd .= "WHERE id = {$this->id}";
              break;
            case 'delete':
                $sqlCmd = "DELETE FROM $this->table WHERE id = $this->id";
                break;
        }
        // echo "</br>" . $sqlCmd . "</br>";
        return $sqlCmd;
    }
}
?>
