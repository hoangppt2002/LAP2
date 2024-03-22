<?php
require_once("character.php");

class staff extends character {
    private $staffcode;
    private $part;

    public function __construct($fullname_staff, $countrycode, $part) {
        parent::__construct($fullname_staff, $countrycode);
        $this->part = $part;
        $this->staffcode = $this->staffcode_continue();
    }

    public function get_staffcode() {
        return $this->staffcode;
    }

    public function get_part() {
        return $this->part;
    }

    private function staffcode_continue() {
        static $makecode = 1;
        return $makecode++;
    }
}
?>
