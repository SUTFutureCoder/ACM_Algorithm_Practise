<?php
include 'CF451A.php';

class CF451ATest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        
    }
    
    public function tearDown(){
        
    }
    
    public function testGameWithSticks(){
        $gameWithSticks = new GameWithSticks();
        
        $result = $gameWithSticks->index(2, 2);
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("Malvika\n", $result);
        
        $result = $gameWithSticks->index(2, 3);
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("Malvika\n", $result);
        
        $result = $gameWithSticks->index(3, 3);
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("Akshat\n", $result);
        
        $result = $gameWithSticks->index(2, 1);
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("Akshat\n", $result);
    }
}