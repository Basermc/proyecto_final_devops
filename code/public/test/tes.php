<?php
require 'vendor/autoload.php';
include_once 'bienvenida.php';
use PHPUnit\Framework\TestCase;
class test extends TestCase
{
    /** @test */
    public function writeMsg()
    {
    
      $this->writeMsg('./bienvenida.php') -> see ('Bienvenido DeVops');
    }
}
?>