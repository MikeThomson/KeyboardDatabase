<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 5/3/14
 * Time: 12:58 PM
 */

namespace Application\Filter;


use Zend\InputFilter\InputFilter;

class AddKeyboardFilter extends InputFilter{
	public function __construct() {
		$factory = new InputFactory();

		$this->add($factory->createInput(array(
			'name' => 'name',
			'required' => true,
			'filters'  => array(
				array('name' => 'StripTags'),
				array('name' => 'StringTrim'),
			),
			'validators' =>array(
				array(
					'name' => 'StringLength',
					'options' => array(
						'encoding' => 'UTF-8',
						'min' => 1,
						'max' => 255
					),
				)
			)
		)));

		$this->add($factory->createInput(array(
			'name' => 'price',
			'required' => true,
			'filters'  => array(
				array('name' => 'Float'),
			),
		)));

		$this->add($factory->createInput(array(
			'name' => 'switch',
			'required' => true
		)));

		$this->add($factory->createInput(array(
			'name' => 'name',
			'required' => false,
		)));

		$this->add($factory->createInput(array(
			'name' => 'name',
			'required' => true,
			'filters'  => array(
				array('name' => 'Int'),
			),
		)));
	}
} 