<?php

	class TodoController  extends AutorizationController {

		public $layout = "todo";

		public function __construct() {
			if(!isset($_SESSION)) {
				session_start();
			}
			parent::__construct();
		}

		function index() {
			
			//$user = $this->verifyUser();

			//$this->layout = "prueba";
			//$this->partial("asd");
			
		}	



	}


?>
