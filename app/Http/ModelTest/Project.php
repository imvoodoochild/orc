<?php

namespace App\Http\ModelTest;

class project {
	public $name;
	public $status;

	public function __construct($name, $status) {
		$this->name = $name;
		$this->status = $status;
	}
}