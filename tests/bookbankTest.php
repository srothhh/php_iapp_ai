<?php 
use PHPUnit\Framework\TestCase;
ini_set("include_path", "app");
require_once 'app/module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class bookbankTest extends TestCase{
 
  public function testBookbankOcr()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $result = $actual->bookbank_ocr("media/1.jpg");

      var_dump($result);
      $this->assertEquals("Success", $result->message, "iApp BookBank OCR API is not working.");
    }   
}
?>