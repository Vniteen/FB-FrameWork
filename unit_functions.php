<?php
// system unit functions
// *****************************************
// validation functions


 function valArr( $arrInput = [] ){
	if( is_array( $arrInput ) && 0 < count( $arrInput ) ) return true;
	return false;
 }
 
 function valStr( $strInput = '' ){
	 if( $strInput != NULL || '' != $strInput ) return true;
	 return false;
 }
 
 function getViewHeader( $strHerader = '' ){
	 return valstr( $strHerader ) ? $strHerader : get_config( ['view','header']);
 }
 
  function getViewFooter( $strFooter = '' ){
	 return valstr( $strFooter ) ? $strFooter : get_config(['view','footer']);
 }

 function get_sys_url(){
 	return get_config( 'sys_url' );
 }

?>