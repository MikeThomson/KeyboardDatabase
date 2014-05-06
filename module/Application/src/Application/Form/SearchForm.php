<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 5/5/14
 * Time: 4:49 PM
 */

namespace Application\Form;


class SearchForm extends KeyboardForm {
	public function __construct() {
		parent::__construct();
		$this->get('switch')->setValueOptions(['' => '-'] + $this->get('switch')->getValueOptions());
		$this->get('backlighting')->setValueOptions(['' => '-'] + $this->get('backlighting')->getValueOptions());
		$this->get('price')->setLabel('Max Price');
		$this->get('submit')->setAttribute('value','Search');
	}
} 