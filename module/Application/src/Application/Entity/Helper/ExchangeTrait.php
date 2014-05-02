<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 5/2/14
 * Time: 1:25 PM
 */
namespace Application\Entity\Helper;

trait ExchangeTrait {

	private $exchangeables = array();

	public function setExchangeables($variables) {
		$this->exchangeables = $variables;
	}

	public function exchangeArray($params) {
		foreach($params as $key => $val) {
			if(count($this->exchangeables) == 0 || in_array($key, $this->exchangeables)) {
				$this->{$key} = $val;
			}
		}
	}
}