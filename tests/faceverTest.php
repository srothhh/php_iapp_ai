<?php 

ini_set("include_path", "app");
require_once 'app\module_api.php';
include 'unittest.php';
$GLOBALS['apikey'] = $apikey;

class faceverTest extends \PHPUnit\Framework\TestCase{
 
  public function testFaceVer1()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_ver1("media/face.jpg", "media/face.jpg", "", "");
      $expect = new api;
      $expect->face_ver1("media/face.jpg", "media/face.jpg", "", "");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
    public function testFaceVer1Config()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_ver1_config("0.5", "0.5", "iApp", "1234");
      $expect = new api;
      $expect->face_ver1_config("0.5", "0.5", "iApp", "1234");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }

    public function testFaceVer2()
    {
      $actual = new api;
      $actual-> apikey($GLOBALS['apikey']);
      $actual->face_ver2("media/face.jpg", "media/face.jpg");
      $expect = new api;
      $expect->face_ver2("media/face.jpg", "media/face.jpg");
        // Assert function to test whether expected
        // value is equal to actual or not
      $this->assertEquals($expect, $actual, "True");
    }
}

?>