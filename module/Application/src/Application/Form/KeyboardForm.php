<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 5/1/14
 * Time: 7:59 PM
 */

namespace Application\Form;

use Zend\Form\Form;


class KeyboardForm extends Form {
	public function __construct($name = null) {
		parent::__construct('keyboard');

		$this->add([
			'name' => 'name',
			'type' => 'Text',
			'options' => [
				'label' => 'Name'
			]
		]);

		$this->add([
			'name' => 'price',
			'type' => 'Text',
			'options' => [
				'label' => 'Price'
			]
		]);

		$this->add([
			'name' => 'backlighting',
			'type' => 'Select',
			'options' => [
				'label' => 'Backlighting',
				'value_options' => [
					'No' => 'No',
					'Red' => 'Red',
					'Blue' => 'Blue',
					'Green' => 'Green',
					'Purple' => 'White',
					'White' => 'White',
					'RGB' => 'RGB',
				]
			]
		]);

		$this->add([
			'name' => 'switch',
			'type' => 'Select',
			'options' => [
				'label' => 'Switch',
				'value_options' => [
					'Cherry MX Red' => 'Cherry MX Red',
					'Cherry MX Black' => 'Cherry MX Black',
					'Cherry MX Blue' => 'Cherry MX Blue',
					'Cherry MX Green' => 'Cherry MX Green',
					'Cherry MX Brown' => 'Cherry MX Brown',
					'Cherry MX Clear' => 'Cherry MX Clear',
					'Topre' => 'Topre',
					'Buckling Spring' => 'Buckling Spring',
					'Alps' => 'Alps',
					'Matias' => 'Matias',
				]
			]
		]);

		$this->add([
			'name' => 'additionalInfo',
			'type' => 'TextArea',
			'options' => [
				'label' => 'Additional Information'
			]
		]);

		$this->add([
			'name' => 'submit',
			'type' => 'Submit',
			'attributes' => [
				'value' => 'Add Keyboard'
			]
		]);
	}
} 