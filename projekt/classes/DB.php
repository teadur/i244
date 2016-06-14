<?php 

class DB {

    public $mysqli;

    public function __construct() {
        $this->mysqli = new mysqli("localhost",  "test", "t3st3r123", "test");
    }
}

?>
