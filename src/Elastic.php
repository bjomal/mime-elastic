<?php namespace Vegvesen\MimeElastic;

/**
*  The Main Elastic class that is supposed to contain all ElasticSearch fongiuration for the installation
*
*  @author bjomal
*/
class Elastic{

   /**  @var string $m_SampleProperty define here what this variable is for, do this for every instance variable */
   private $m_SampleProperty = '';
 
  /**
  * Construct
  *
  * Class constructor
  *
  * @param string $serverUrl URL to ElasticSearch installation
  *
  * @return Elastic
  */
   public function __construct($serverUrl){
      return "Hello World";
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
			return "Hello World";
   }
}
