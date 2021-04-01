<?php 


class Router {	

	private $get = [] , $post = [];

	public function get(String $path,String $script) {
		$this->get[$path] =  $script;
	}

	public function post(String $path,String $script) {
		$this->post[$path] =  $script;
	}

	public function match() {

		$route = $_SERVER['REQUEST_URI'];

		if(array_key_exists($route, $this->get)) {

			if($_SERVER['REQUEST_METHOD'] === 'GET') {
				include $this->get[$route]; exit;
			}
			
		} else if(array_key_exists($route, $this->post)) {

			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				include $this->post[$route]; exit;
			}

		} else {
			echo '404'; die;
		}
	}
}


?>