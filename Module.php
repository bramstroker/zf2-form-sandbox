<?php
/**
 * StrokerForm module
 *
 * @category  StrokerForm
 * @package   StrokerForm
 * @copyright 2012 Bram Gerritsen
 * @version   SVN: $Id$
 */
namespace StrokerFormSandbox;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ControllerProviderInterface;
use Zend\Console\Adapter\AdapterInterface;

class Module implements
	AutoloaderProviderInterface,
	ConfigProviderInterface,
	ControllerProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function getAutoloaderConfig()
	{
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
				),
			),
		);
	}

	/**
	 * Returns configuration to merge with application configuration
	 *
	 * @return array|\Traversable
	 */
	public function getConfig()
	{
		return include __DIR__ . '/config/module.config.php';
	}

	/**
	 * Expected to return \Zend\ServiceManager\Config object or array to seed
	 * such an object.
	 *
	 * @return array|\Zend\ServiceManager\Config
	 */
	public function getControllerConfig()
	{
		return array(
			'factories' => array(
				'StrokerFormSandbox\Controller\Test' => 'StrokerFormSandbox\Service\TestControllerFactory'
			)
		);
	}
}

