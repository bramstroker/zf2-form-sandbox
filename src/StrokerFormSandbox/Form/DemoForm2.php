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

class DemoForm2 extends Form
{
	public function __construct($name = null)
	{
		// we want to ignore the name passed
		parent::__construct('demo2');
		$this->setAttribute('method', 'post');

		$this->add(array(
			'name' => 'genre',
			'type' => 'Zend\Form\Element\Select',
			'options' => array(
				'label' => 'Genre',
				'value_options' => array(
					'Alternative',
					'Country',
					'Jazz',
					'Rap',
					'Rock'
				)
			)
		));

		$this->add(array(
			'name' => 'club',
			'type' => 'Zend\Form\Element\MultiCheckbox',
			'options' => array(
				'label' => 'Club',
				'value_options' => array(
					'Vitesse', 'Ajax', 'Feyenoord'
				)
			)
		));

		$check = new \Zend\Form\Element\Checkbox('check', array('label' => 'Checkbox'));
		$this->add($check);

		$radio = new \Zend\Form\Element\Radio('radio', array('label' => 'Radio'));
		$radio->setValueOptions(
			array('One', 'Two', 'Three')
		);
		$this->add($radio);

		$text = new \Zend\Form\Element\Text('text', array('label' => 'Text'));
		$this->add($text);

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
			'name'     => 'genre',
			'required' => true,
			'allowEmpty' => false
		));

		$inputFilters->add(array(
			'name'     => 'club',
			'required' => true,
			'allowEmpty' => true
		));

		$inputFilters->add(array(
			'name'     => 'radio',
			'required' => true,
		));

		$this->setInputFilter($inputFilters);
	}
}
