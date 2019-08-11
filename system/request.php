<?php

class Request {
	
	protected $_arrmixRequest;
	protected $_arrmixData;
	protected $_arrstrQuery;
	protected $_strUrl;
	
	public function __construct($data = [], $url = '', $query = ''){
		$this->_arrmixData = $data;
		$this->_strUrl  = $url;
		$this->_arrstrQuery = $query;
	}
	
	public function getQueryParams(){
		$objQuery = new stdClass();
		
		if( '' != $this->_arrstrQuery ){
			
			$arrstrParams = explode( '&', $this->_arrstrQuery );
			
			foreach( $arrstrParams as $strParam ){
		
				$arrstrParam = explode( '=', $strParam );
				$objQuery->$arrstrParam[0] = (true == array_key_exists(1, $arrstrParam) ) ? $arrstrParam[1] : NULL;
			}
		}
		return $objQuery;
	}
	
	public function getUrl(){
		return $this->_strUrl;
	}
	
}