<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: google/longrunning/operations.proto
//   Date: 2016-07-18 20:45:46

namespace google\longrunning {

  class Operation extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var \google\protobuf\Any */
    public $metadata = null;
    
    /**  @var boolean */
    public $done = null;
    
    /**  @var \google\rpc\Status */
    public $error = null;
    
    /**  @var \google\protobuf\Any */
    public $response = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.longrunning.Operation');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE metadata = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "metadata";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Any';
      $descriptor->addField($f);

      // OPTIONAL BOOL done = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "done";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE error = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "error";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\rpc\Status';
      $descriptor->addField($f);

      // OPTIONAL MESSAGE response = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "response";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\google\protobuf\Any';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\longrunning\Operation
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\longrunning\Operation
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <metadata> has a value
     *
     * @return boolean
     */
    public function hasMetadata(){
      return $this->_has(2);
    }
    
    /**
     * Clear <metadata> value
     *
     * @return \google\longrunning\Operation
     */
    public function clearMetadata(){
      return $this->_clear(2);
    }
    
    /**
     * Get <metadata> value
     *
     * @return \google\protobuf\Any
     */
    public function getMetadata(){
      return $this->_get(2);
    }
    
    /**
     * Set <metadata> value
     *
     * @param \google\protobuf\Any $value
     * @return \google\longrunning\Operation
     */
    public function setMetadata(\google\protobuf\Any $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <done> has a value
     *
     * @return boolean
     */
    public function hasDone(){
      return $this->_has(3);
    }
    
    /**
     * Clear <done> value
     *
     * @return \google\longrunning\Operation
     */
    public function clearDone(){
      return $this->_clear(3);
    }
    
    /**
     * Get <done> value
     *
     * @return boolean
     */
    public function getDone(){
      return $this->_get(3);
    }
    
    /**
     * Set <done> value
     *
     * @param boolean $value
     * @return \google\longrunning\Operation
     */
    public function setDone( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <error> has a value
     *
     * @return boolean
     */
    public function hasError(){
      return $this->_has(4);
    }
    
    /**
     * Clear <error> value
     *
     * @return \google\longrunning\Operation
     */
    public function clearError(){
      return $this->_clear(4);
    }
    
    /**
     * Get <error> value
     *
     * @return \google\rpc\Status
     */
    public function getError(){
      return $this->_get(4);
    }
    
    /**
     * Set <error> value
     *
     * @param \google\rpc\Status $value
     * @return \google\longrunning\Operation
     */
    public function setError(\google\rpc\Status $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <response> has a value
     *
     * @return boolean
     */
    public function hasResponse(){
      return $this->_has(5);
    }
    
    /**
     * Clear <response> value
     *
     * @return \google\longrunning\Operation
     */
    public function clearResponse(){
      return $this->_clear(5);
    }
    
    /**
     * Get <response> value
     *
     * @return \google\protobuf\Any
     */
    public function getResponse(){
      return $this->_get(5);
    }
    
    /**
     * Set <response> value
     *
     * @param \google\protobuf\Any $value
     * @return \google\longrunning\Operation
     */
    public function setResponse(\google\protobuf\Any $value){
      return $this->_set(5, $value);
    }
  }
}

namespace google\longrunning {

  class GetOperationRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.longrunning.GetOperationRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\longrunning\GetOperationRequest
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\longrunning\GetOperationRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\longrunning {

  class ListOperationsRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $filter = null;
    
    /**  @var int */
    public $page_size = null;
    
    /**  @var string */
    public $page_token = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.longrunning.ListOperationsRequest');

      // OPTIONAL STRING name = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING filter = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "filter";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL INT32 page_size = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "page_size";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING page_token = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "page_token";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(4);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\longrunning\ListOperationsRequest
     */
    public function clearName(){
      return $this->_clear(4);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(4);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\longrunning\ListOperationsRequest
     */
    public function setName( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <filter> has a value
     *
     * @return boolean
     */
    public function hasFilter(){
      return $this->_has(1);
    }
    
    /**
     * Clear <filter> value
     *
     * @return \google\longrunning\ListOperationsRequest
     */
    public function clearFilter(){
      return $this->_clear(1);
    }
    
    /**
     * Get <filter> value
     *
     * @return string
     */
    public function getFilter(){
      return $this->_get(1);
    }
    
    /**
     * Set <filter> value
     *
     * @param string $value
     * @return \google\longrunning\ListOperationsRequest
     */
    public function setFilter( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <page_size> has a value
     *
     * @return boolean
     */
    public function hasPageSize(){
      return $this->_has(2);
    }
    
    /**
     * Clear <page_size> value
     *
     * @return \google\longrunning\ListOperationsRequest
     */
    public function clearPageSize(){
      return $this->_clear(2);
    }
    
    /**
     * Get <page_size> value
     *
     * @return int
     */
    public function getPageSize(){
      return $this->_get(2);
    }
    
    /**
     * Set <page_size> value
     *
     * @param int $value
     * @return \google\longrunning\ListOperationsRequest
     */
    public function setPageSize( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <page_token> has a value
     *
     * @return boolean
     */
    public function hasPageToken(){
      return $this->_has(3);
    }
    
    /**
     * Clear <page_token> value
     *
     * @return \google\longrunning\ListOperationsRequest
     */
    public function clearPageToken(){
      return $this->_clear(3);
    }
    
    /**
     * Get <page_token> value
     *
     * @return string
     */
    public function getPageToken(){
      return $this->_get(3);
    }
    
    /**
     * Set <page_token> value
     *
     * @param string $value
     * @return \google\longrunning\ListOperationsRequest
     */
    public function setPageToken( $value){
      return $this->_set(3, $value);
    }
  }
}

namespace google\longrunning {

  class ListOperationsResponse extends \DrSlump\Protobuf\Message {

    /**  @var \google\longrunning\Operation[]  */
    public $operations = array();
    
    /**  @var string */
    public $next_page_token = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.longrunning.ListOperationsResponse');

      // REPEATED MESSAGE operations = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "operations";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\google\longrunning\Operation';
      $descriptor->addField($f);

      // OPTIONAL STRING next_page_token = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "next_page_token";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <operations> has a value
     *
     * @return boolean
     */
    public function hasOperations(){
      return $this->_has(1);
    }
    
    /**
     * Clear <operations> value
     *
     * @return \google\longrunning\ListOperationsResponse
     */
    public function clearOperations(){
      return $this->_clear(1);
    }
    
    /**
     * Get <operations> value
     *
     * @param int $idx
     * @return \google\longrunning\Operation
     */
    public function getOperations($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <operations> value
     *
     * @param \google\longrunning\Operation $value
     * @return \google\longrunning\ListOperationsResponse
     */
    public function setOperations(\google\longrunning\Operation $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <operations>
     *
     * @return \google\longrunning\Operation[]
     */
    public function getOperationsList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <operations>
     *
     * @param \google\longrunning\Operation $value
     * @return \google\longrunning\ListOperationsResponse
     */
    public function addOperations(\google\longrunning\Operation $value){
     return $this->_add(1, $value);
    }
    
    /**
     * Check if <next_page_token> has a value
     *
     * @return boolean
     */
    public function hasNextPageToken(){
      return $this->_has(2);
    }
    
    /**
     * Clear <next_page_token> value
     *
     * @return \google\longrunning\ListOperationsResponse
     */
    public function clearNextPageToken(){
      return $this->_clear(2);
    }
    
    /**
     * Get <next_page_token> value
     *
     * @return string
     */
    public function getNextPageToken(){
      return $this->_get(2);
    }
    
    /**
     * Set <next_page_token> value
     *
     * @param string $value
     * @return \google\longrunning\ListOperationsResponse
     */
    public function setNextPageToken( $value){
      return $this->_set(2, $value);
    }
  }
}

namespace google\longrunning {

  class CancelOperationRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.longrunning.CancelOperationRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\longrunning\CancelOperationRequest
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\longrunning\CancelOperationRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\longrunning {

  class DeleteOperationRequest extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'google.longrunning.DeleteOperationRequest');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \google\longrunning\DeleteOperationRequest
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \google\longrunning\DeleteOperationRequest
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
  }
}

namespace google\longrunning {

  class OperationsClient extends \Grpc\BaseStub {

    public function __construct($hostname, $opts) {
      parent::__construct($hostname, $opts);
    }
    /**
     * @param google\longrunning\GetOperationRequest $input
     */
    public function GetOperation(\google\longrunning\GetOperationRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.longrunning.Operations/GetOperation', $argument, '\google\longrunning\Operation::deserialize', $metadata, $options);
    }
    /**
     * @param google\longrunning\ListOperationsRequest $input
     */
    public function ListOperations(\google\longrunning\ListOperationsRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.longrunning.Operations/ListOperations', $argument, '\google\longrunning\ListOperationsResponse::deserialize', $metadata, $options);
    }
    /**
     * @param google\longrunning\CancelOperationRequest $input
     */
    public function CancelOperation(\google\longrunning\CancelOperationRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.longrunning.Operations/CancelOperation', $argument, '\google\protobuf\Empty::deserialize', $metadata, $options);
    }
    /**
     * @param google\longrunning\DeleteOperationRequest $input
     */
    public function DeleteOperation(\google\longrunning\DeleteOperationRequest $argument, $metadata = array(), $options = array()) {
      return $this->_simpleRequest('/google.longrunning.Operations/DeleteOperation', $argument, '\google\protobuf\Empty::deserialize', $metadata, $options);
    }
  }
}
