<?php 
use \PHPUnit\Framework\TestCase; 
ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class imageremovalTest extends TestCase{
 
  public function testImageRemoval()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->img_bg_removal("media/imgbg.txt");
      
      $this->assertObjectHasAttribute("result", $result);
    }
    
}

?>