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
use Zend\InputFilter\InputFilterProviderInterface;

class FieldsetForm extends Form implements InputFilterProviderInterface
{
	public function __construct($name = null)
	{
		// we want to ignore the name passed
		parent::__construct('fieldset');
		$this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'article',
            'attributes' => array(
                'type'  => 'text',
            ),
            'options' => array(
                'label' => 'Article',
            ),
        ));

        $this->add(array(
            'type' => 'StrokerFormSandbox\Form\BrandFieldset',
        ));

        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id' => 'submitbutton',
            ),
        ));
	}

    /**
     * @return array
    \*/
    public function getInputFilterSpecification()
    {
        return array(
            'article' => array(
                'required' => true,
            )
        );
    }
}
