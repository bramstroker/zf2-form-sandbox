<?php
/**
 * Description
 *
 * @category  Acsi
 * @package   Acsi\
 * @copyright 2012 ACSI Holding bv (http://www.acsi.eu)
 * @version   SVN: $Id$
 */

namespace StrokerFormSandbox\Service;

use Zend\ServiceManager\ServiceLocatorInterface;
use StrokerFormSandbox\Model\Album;

class AlbumFormFactory implements \Zend\ServiceManager\FactoryInterface
{

	/**
	 * Create service
	 *
	 * @param ServiceLocatorInterface $serviceLocator
	 * @return mixed
	 */
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$form = new \StrokerFormSandbox\Form\AlbumForm();

		$album = new Album();
		$form->setInputFilter($album->getInputFilter());

		return $form;
	}
}
