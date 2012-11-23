<?php
/**
 * Description
 *
 * @category  Acsi
 * @package   Acsi\
 * @copyright 2012 ACSI Holding bv (http://www.acsi.eu)
 * @version   SVN: $Id$
 */

namespace StrokerFormSandbox\Form;

use Zend\Form\Form;
use Zend\InputFilter\InputFilter;

class DemoForm1 extends Form
{
	public function __construct($name = null)
	{
		// we want to ignore the name passed
		parent::__construct('demo1');
		$this->setAttribute('method', 'post');
		$this->add(array(
			'name' => 'id',
			'attributes' => array(
				'type'  => 'hidden',
			),
		));
		$this->add(array(
			'name' => 'artist',
			'attributes' => array(
				'type'  => 'text',
			),
			'options' => array(
				'label' => 'Artist',
			),
		));
		$this->add(array(
			'name' => 'title',
			'attributes' => array(
				'type'  => 'text',
			),
			'options' => array(
				'label' => 'Title',
			),
		));
		$this->add(array(
			'name' => 'email',
			'attributes' => array(
				'type'  => 'text',
			),
			'options' => array(
				'label' => 'Email',
			),
		));

		$this->add(array(
			'name' => 'email_html5',
			'type' => 'Zend\Form\Element\Email',
			'options' => array(
				'label' => 'Email (html5)',
			),
		));

		$this->add(array(
			'name' => 'uri',
			'attributes' => array(
				'type'  => 'text',
			),
			'options' => array(
				'label' => 'Uri',
			),
		));
		$this->add(array(
			'name' => 'isbn',
			'attributes' => array(
				'type'  => 'text',
			),
			'options' => array(
				'label' => 'ISBN (remote)',
			),
		));
		$this->add(array(
			'name' => 'submit',
			'attributes' => array(
				'type'  => 'submit',
				'value' => 'Go',
				'id' => 'submitbutton',
			),
		));

		$inputFilters = new InputFilter();
		$inputFilters->add(array(
			'name'     => 'title',
			'required' => true,
			'allowEmpty' => true,
			'validators' => array(
				array(
					'name' => 'string_length',
					'options' => array(
						'min' => 8
					)
				)
			)
		));

		$inputFilters->add(array(
			'name'     => 'artist',
			'required' => true,
			'allowEmpty' => true,
			'validators' => array(
				array(
					'name' => 'between',
					'options' => array(
						'min' => 4,
						'max' => 10
					)
				)
			)
		));

		$inputFilters->add(array(
			'name'     => 'email',
			'required' => false,
			'validators' => array(
				array(
					'name' => 'emailAddress'
				)
			)
		));

		$inputFilters->add(array(
			'name'     => 'uri',
			'required' => false,
			'validators' => array(
				array(
					'name' => 'uri',
					'options' => array(
						'allowRelative' => false
					)
				)
			)
		));

		$inputFilters->add(array(
			'name'     => 'isbn',
			'required' => true,
			'validators' => array(
				array(
					'name' => 'isbn'
				)
			)
		));

		$this->setInputFilter($inputFilters);
	}
}
