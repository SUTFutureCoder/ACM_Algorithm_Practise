<?php
include 'CF82A.php';
class CF82ATest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        
    }
    
    public function tearDown(){
        
    }
    
    public function testDoubleCola(){
        $doubleCola = new DoubleCola();
        
        $result = $doubleCola->index(1);
        
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("Sheldon\n", $result);
        
        $result = $doubleCola->index(6);
        
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("Sheldon\n", $result);
        
        $result = $doubleCola->index(1802);
        
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("Penny\n", $result);
    }
}