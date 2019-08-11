<?php 
require_once 'system/request.php';
class BaseController extends Request {

	public function __construct(){
		$data = $_POST;
		$query = $_SERVER['QUERY_STRING'];
		$url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
		parent::__construct( $data, $url, $query );
	}
	
	public function notFound(){
		echo '<h2>Error. 404 </h2>
				<br>
				<h6> Requested URL not found in system. Please check and try again.</h6>';
	}
	
	public function renderView($strView = '', $arrmixData = [], $header = '', $footer = '' ){
		
		if( '' == $strView ) trigger_error( 'Unable to render view', E_ERROR );
		
		if( valArr( $arrmixData ) ){
			foreach( $arrmixData as $var => $data ){
				$$var = $data;
			}
		}

		require_once 'view/' . getViewHeader( $header ) . '.php';
		require_once 'view/' . $strView . '.php';
		require_once 'view/' . getViewFooter( $footer ) . '.php';
		
	}

	public function showDashboard(){

		$this->renderView( 'default_dashboard' );
	}

}
?>