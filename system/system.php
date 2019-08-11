<?php

class MySystem {

	protected $_strModule;
	protected $_strAction;
	
	protected $_arrstrModuleControllers = [
	'home'  => 'Home'
	
	];
	
	protected $_arrstrActionMethods = [
	'view_home' => 'viewHome',
	'show_menu' => 'showMenu'
	
	];

	public function __construct( $module = 'BaseController', $action = 'showDashboard'){
		$this->_strModule = $module;
		$this->_strAction = $action;
	}
	
	public function getController(){
		if( '' != $this->_strModule && true == array_key_exists( $this->_strModule, $this->_arrstrModuleControllers ) ) {
			return $this->_arrstrModuleControllers[ $this->_strModule ]. 'Controller';
		}
		return 'BaseController';
	}
	
	public function getMethod(){
		if( '' != $this->_strAction && true == array_key_exists( $this->_strAction, $this->_arrstrActionMethods ) ) {
			return $this->_arrstrActionMethods[ $this->_strAction ];
		}
		return 'showDashboard';
	}


}	

?>