 
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
class client
{
  public function __construct()
  {
    $params= array('location' => 'connect.php',
   'uri' => 'connect.php','trace'=> 1);
 
    $this->instance= new SoapClient(NULL,$params);
  }
  public function getName($id_array)
  {
    return $this->instance->__soapCall('getStudentName',$id_array);
  }
}
$client= new client;?>