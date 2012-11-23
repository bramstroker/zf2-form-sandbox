<?php
return array(
	'stroker_form' => array(
		'forms' => array(
			'factories' => array(
				'demo1' => 'StrokerFormSandbox\Service\DemoForm1Factory',
				'album' => 'StrokerFormSandbox\Service\AlbumFormFactory'
			),
			'invokables' => array(
				'demo2' => 'StrokerFormSandbox\Form\DemoForm2'
			)
		)
	),
	'router' => array(
		'routes' => array(
			'ajax-validate2' => array(
				'type' => 'Segment',
				'options' => array(
					'route' => '/formtest/:form',
					'defaults' => array(
						'controller' => 'StrokerFormSandbox\Controller\Test',
						'action' => 'form',
						'form' => 'demo1',
						'locale' => 'nl'
					),
				)
			),
		)
	),
	'view_manager' => array(
		'template_path_stack' => array(
			__DIR__ . '/../view',
		),
	),
);