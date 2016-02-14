<?php
include 'CF41A.php';

class CF41ATest extends PHPUnit_Framework_TestCase{
    public function setUp(){
        
    }
    
    public function tearDown(){
        
    }
    
    public function testTranslation(){
        $translation = new Translation();
        $result = $translation->reverseByBinary('code', 'edoc');
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("YES\n", $result);
        
        
        $result = $translation->reverseByBinary('abb', 'aba');
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("NO\n", $result);
        
        $result = $translation->reverseByBinary('code', 'code');
        $this->assertInternalType('string', $result);
        $this->assertNotEmpty($result);
        $this->assertEquals("NO\n", $result);
    }
}