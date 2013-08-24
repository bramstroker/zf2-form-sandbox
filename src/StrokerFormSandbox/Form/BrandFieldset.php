<?php
namespace StrokerFormSandbox\Form;

use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Form\Fieldset;

class BrandFieldset extends Fieldset implements InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('brand');

        $this->add(array(
            'name' => 'name',
            'options' => array(
                'label' => 'Name of the brand'
            ),
        ));

        $this->add(array(
            'name' => 'url',
            'type' => 'Zend\Form\Element\Url',
            'options' => array(
                'label' => 'Website of the brand'
            ),
        ));

        $this->add(array(
            'name' => 'isbn',
            'type' => 'text',
            'options' => array(
                'label' => 'ISBN (ajax)'
            ),
        ));
    }

    /**
     * @return array
    \*/
    public function getInputFilterSpecification()
    {
        return array(
            'name' => array(
                'required' => true,
            ),
            'isbn' => array(
                'required' => true,
                'validators' => array(
                    array(
                        'name' => 'isbn'
                    )
                )
            )
        );
    }
}
