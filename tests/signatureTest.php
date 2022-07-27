<?php 
use \PHPUnit\Framework\TestCase;

ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class signatureTest extends TestCase{
 
  public function testSignature()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->signature_detection("media/signature.jpg");
      var_dump($result);
      
      $this->assertEquals("successs", $result->message, "Signature Detection API is not working");
    }
    
}

?>