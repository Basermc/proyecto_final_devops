<?php
use PHPUnit\Framework\TestCase;
require_once("code/public/bienvenida.php"); 

class writeMsgtest extends TestCase {
    /** @test */
    public function writeMsg_returns_values_as_expected(){
        $this->assertEquals('Bienvenido', writeMsg());
    }
}


?>