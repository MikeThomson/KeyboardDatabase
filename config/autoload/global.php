<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
	'navigation' => array(
		'default' => array(
			array(
				'label' => 'About',
				'route' => 'home',
			),
			array(
				'label' => 'Add Keyboard',
				'route' => 'keyboard',
				'params' => [
					'action' => 'add'
				]
			),
			array(
				'label' => 'Keyboards',
				'route' => 'keyboard',
				'params' => [
					'action' => 'list'
				]
			)
		)
	),
	'service_manager' => array(
		'factories' => array(
			'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
		),
	),
);
