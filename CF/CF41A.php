<?php
class Translation{
    public function reverse($str1, $str2){
        if ($str1 != strrev($str2)){
            return "NO\n";
        } else {
            return "YES\n";
        }
    }
}

$translation = new Translation();
fscanf(STDIN, "%s", $str1);
fscanf(STDIN, "%s", $str2);
echo $translation->reverse($str1, $str2);

//
//class CF41ATest extends PHPUnit_Framework_TestCase{
//    public function setUp(){
//        
//    }
//    
//    public function tearDown(){
//        
//    }
//    
//    public function testTranslation(){
//        $translation = new Translation();
//        $result = $translation->reverse('code', 'edoc');
//        $this->assertInternalType('string', $result);
//        $this->assertNotEmpty($result);
//        $this->assertEquals("YES\n", $result);
//        
//        
//        $result = $translation->reverse('abb', 'aba');
//        $this->assertInternalType('string', $result);
//        $this->assertNotEmpty($result);
//        $this->assertEquals("NO\n", $result);
//        
//        $result = $translation->reverse('code', 'code');
//        $this->assertInternalType('string', $result);
//        $this->assertNotEmpty($result);
//        $this->assertEquals("NO\n", $result);
//    }
//}