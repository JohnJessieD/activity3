<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class user extends Controller {

	public function user(){
		echo 'hello';
	}
}

public function index($index)
  {
      echo $index;
  }
?>
