<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 5/3/14
 * Time: 11:43 AM
 */

namespace Application\Entity\Helper;


trait RestrictedSetTrait {

	protected $settables = array();

	protected function setSettables($settables) {
		$this->settables = $settables;
	}

	public function __set($var, $val) {
		if(in_array($var, $this->settables))
			$this->{$var} = $val;
	}
} 