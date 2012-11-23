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

use Zend\ServiceManager\FactoryInterface;
use StrokerFormSandbox\Controller\TestController;
use Zend\ServiceManager\ServiceLocatorInterface;

class TestControllerFactory implements FactoryInterface
{
	/**
	 * Create service
	 *
	 * @param ServiceLocatorInterface $serviceLocator
	 * @return mixed
	 */
	public function createService(ServiceLocatorInterface $serviceLocator)
	{
		$locator = $serviceLocator->getServiceLocator();
		$formManager = $locator->get('StrokerForm\FormPluginManager');
		$controller = new TestController($formManager);
		return $controller;
	}
}
