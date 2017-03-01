<?php
//============================================================
// File   : Page.php
// Author : Dominic Eaton
// Created: 8/11/2016
// Updated: 8/22/2016
// Purpose: Create page class.
// Usage  : Class for creation of pages objects which contain
//          the data for the each pages of website.
//============================================================

class Page extends table {
    public $title = null;
    public $header = null;
    public $content = null;
    public $stylesheet = null;
    public $table = "pages";

    function __construct() {
      // Create new SQLite3 database for pages object
      /*
        $dbc = database::getInstance();
        $sql = "CREATE TABLE {$this->table}(" .
                   "id INTEGER PRIMARY KEY, " .
                   "title VARCHAR(100) NOT NULL, " .
                   "header VARCHAR(50) NOT NULL, " .
                   "content VARCHAR(50) NOT NULL, " .
                   "stylesheet VARCHAR(50) NOT NULL)" ;
        $query = $dbc->doQuery($sql, SQLITE_ASSOC, $query_error);
        */


        /*
        //echo $name;
        try {
            $name = $dbc->doQuery("SELECT name FROM sqlite_master WHERE type='table' AND name='$this->table'");
        } catch (Exception $e) {
            $sql = "CREATE TABLE IF NOT EXISTS $this->table(" .
                   "id INTEGER PRIMARY KEY, " .
                   "title VARCHAR(100) NOT NULL, " .
                   "header VARCHAR(50) NOT NULL, " .
                   "content TEXT NOT NULL, " .
                   "stylesheet VARCHAR(50) NOT NULL)" ;
            $query = $dbc->doQuery($sql, SQLITE_ASSOC, $query_error);
        }
        */
    }

    /* Registry Functions */
    public function __set($key, $val) {
        // $this->content[$key] = $val;
        $dbc = database::getInstance();
        $this->$key = $val;
        //$dbc->doQuery("ALTER TABLE {$this->table} ADD COLUMN {$this->$key} VARCHAR(50)");
        //$sql = "INSERT INTO ($this->table)($key";
    }

    public function __get($key) {
        // return $this->content[$key];
        return $this->$key;
    }
    /*
    public addPage() {
    }
    */

    // Return number of pages of the site
    public function getPages() {
        return $this->$numPages;
    }

    // Create new site page
    public function createPage() {

    }

    // Delete site page (deletes by ID)
    public function deletePage($pageID) {

    }
}
?>
