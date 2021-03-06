<?php 
/**
* Short Description
*
* Long Description
*
* @package      Vegvesen
* @subpackage   MimeElastic
* @category     SearchIndex
* @author       B Malmanger <bjorne.malmanger@vegvesen.no>
*/

namespace Vegvesen\MimeElastic;

/**
* The Main Elastic class is the object that handle connection to Elastic Search instance
*
* @author       B Malmanger <bjorne.malmanger@vegvesen.no>
*/
class Elastic{

   /**  @var string $SampleProperty define here what this variable is for, do this for every instance variable */
   private $sampleProperty = '';
   
   /**  @var string $serverUrl Where ElasticSearch can be accessed  */
   private $serverUrl = '';
   
   /**  @var boolean $serverConnected If connection has been established successfully */
   private $serverConnected = false;
 
  /**
  * Construct
  *
  * Class constructor
  *
  * @param string $serverUrl URL to ElasticSearch installation i.e. 'http://localhost:9200'
  *
  * @return Elastic
  */
   public function __construct($serverUrl)
   {
      $this->serverUrl = $serverUrl;
   }

  /**
  * Connect to Elastic and verify 
  *
  * returns true on success, else false
  *
  * @return boolean
  */
   public function connect() {
      $serverConnected = false;
			return $serverConnected;
   }

  /**
  * Sample method 
  *
  * Always create a corresponding docblock for each method, describing what it is for,
  * this helps the phpdocumentator to properly generator the documentation
  *
  * @param string $param1 A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
  *
  * @return string
  */
   public function method1($param1){
      return "Hello Worldx";
   }


}
