<?php

class HomeController extends BaseController {
	
	public function __contruct(){
		paarent::__contruct();
	}
	
	public function viewHome(){
		echo '<h2> Welcome to Home<br>
			<strong> '. $this->getQueryParams()->user.' </strong></h2>';
	}

}

?>