<?php
return array(
	'stroker_form' => array(
		'forms' => array(
			'factories' => array(
				'demo1' => 'StrokerFormSandbox\Service\DemoForm1Factory',
				'album' => 'StrokerFormSandbox\Service\AlbumFormFactory'
			),
			'invokables' => array(
				'demo2' => 'StrokerFormSandbox\Form\DemoForm2',
                'fieldset' => 'StrokerFormSandbox\Form\FieldsetForm'
			)
		)
	),
	'router' => array(
		'routes' => array(
			'strokerform-form' => array(
				'type' => 'Segment',
				'options' => array(
					'route' => '/formtest[/:form]',
					'defaults' => array(
						'controller' => 'StrokerFormSandbox\Controller\Form',
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
		'template_map' => array(
            		'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
        	)
	),
);
