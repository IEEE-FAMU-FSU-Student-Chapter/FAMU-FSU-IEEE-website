<?php
  //============================================================
  // File   : Registry.php
  // Author : Dominic Eaton
  // Created: 8/11/2016
  // Updated: 8/22/2016
  // Purpose: Create PageRegistry class.
  // Usage  : Class for
  //============================================================

  class Registry {
    protected $_objects = array();

    function set($name, &$object) {
        $this->_objects[$name] = &$object;
    }

    function &get($name) {
        return $this->_objects[$name];
    }
  }

?>
