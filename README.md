pasturrin TODO example
======================

1.- Copy pasturrin directory into your www directory.

2.- Create a virtual host for your project.

3.- Edit config/environments/development.php

4.- Edit index.php, BASE_URL with your site url and $cfg->set_default_connection('development') with your environment settings

5.- Create a controller class with the value set into config/environments/development.php 
for example $default = array("todo", "index", ""):

class TodoController  extends AutorizationController {

		public $layout = "todo";

		public function __construct() {
			if(!isset($_SESSION)) {
				session_start();
			}
			parent::__construct();
		}

		function index() {
		}	



	}

6.- Create todo.phtml layout file into app/views/layouts directory.

7.- Create app/views/todo directory into app/views/ directory

8.- Create index.phtml file with "Hello World" inside.