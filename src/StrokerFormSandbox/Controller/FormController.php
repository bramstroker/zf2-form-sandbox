<?php
/**
 * Description
 *
 * @category  StrokerFormSandbox
 * @package   StrokerFormSandbox\Controller
 * @copyright 2012 ACSI Holding bv (http://www.acsi.eu)
 * @version   SVN: $Id$
 */

namespace StrokerFormSandbox\Controller;

use Zend\Form\Element;
use Zend\View\Model\ViewModel;
use Zend\Form\Form;

class FormController extends \Zend\Mvc\Controller\AbstractActionController
{
	/**
	 * @param \StrokerForm\FormPluginManager $formManager
	 */
	public function __construct(\StrokerForm\FormPluginManager $formManager)
	{
		$this->formManager = $formManager;
	}

	/**
	 * @return \Zend\View\Model\ViewModel
	 */
	public function formAction()
	{
		$formAlias = $this->getEvent()->getRouteMatch()->getParam('form');

		/** @var $form \Zend\Form\Form */
		$form = $this->formManager->get($formAlias);

		$request = $this->getRequest();
		if ($request->isPost()) {
			$form->setData($request->getPost());
			if ($form->isValid()) {
			}
		}

		$viewModel = new ViewModel(array(
			'formalias' => $formAlias,
			'form' => $form
		));

		$viewModel->setTemplate('stroker-form-sandbox/test/bootstrap-form.phtml');

		return $viewModel;
	}
}
