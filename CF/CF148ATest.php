<?php
include 'CF148A.php';
class CF148ATest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        
    }
    
    public function tearDown(){
        
    }
    
    public function testInsomniaCure(){
        $insomniaCure = new InsomniaCure();
        $result = $insomniaCure->index(1, 2, 3, 4, 12);
        
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("12\n", $result);
        
        $result = $insomniaCure->index(2, 3, 4, 5, 24);
        
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("17\n", $result);
    }
}