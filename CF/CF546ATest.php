<?php
include 'CF546A.php';
class CF546ATest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        
    }
    
    public function tearDown(){
        
    }
    
    public function testSoldierAndBananas(){
        $soldierAndBananas = new SolierAndBananas();
        
        $result = $soldierAndBananas->index(3, 17, 4);
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("13\n", $result);
    }
}