<?php
//============================================================
// File   : Database.php
// Author : Dominic Eaton
// Created: 8/11/2016
// Updated: 8/22/2016
// Purpose: Create Database class.
// Usage  : Class for creation of Database objects
//============================================================

	class Database {
		/* Database connection parameters */
		private $dbName;
		private static $instance; // instance of database object
		private $results;         // results of executing query
		private $numRows;         // number of database table rows
		public $db;               // variable containing instance of the database

		/* Database constructor */
		private function _construct() {

		}

		function __destruct() {
			unset($this->db);
		}

		/* Create the instance of the database object */
		static function getInstance() {
			// If instance of object does not exist
			// create a new instance of the object,
			// else pass back the object that already
			// exists. (Singleton Design Approach)
			if(!self::$instance) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/* Create\Open Database */
		function open_db($dbName, $dbValue, $error) {
			$this->db = sqlite_open($dbName, $dbValue, $error);
		}


		/* Perform query on database */
		public function doQuery($sql) {
			return sqlite_query($this->db, $sql);
		}

		/* Close database */
		public function close_db($db) {
			sqlite_close($db);
		}

		/* Get number of records within table in database */
		public function getRows() {
			/*
			$result = $this->db->query("SELECT * FROM {$this->table}");
			echo $result->numRows()  . " number of rows ";
			return $result->numRows();
			*/
		}
	}
 ?>
