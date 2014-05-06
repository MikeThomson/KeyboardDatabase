<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Entity\Keyboard;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Form\KeyboardForm;
use Application\Form\SearchForm;

class KeyboardController extends AbstractActionController
{
	protected $em;

	public function setEntityManager(EntityManager $em) {
		$this->em = $em;
	}

	public function getEntityManager() {
		if (null === $this->em) {
			$this->em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
		}
		return $this->em;
	}

	public function indexAction()
	{
		return new ViewModel();
	}

	public function addAction() {
		$form = new KeyboardForm();

		if($this->getRequest()->isPost()) {
			$form->setData($this->params()->fromPost());
			if($form->isValid()) {
				$keyboard = new Keyboard($form->getData());
				$this->getEntityManager()->persist($keyboard);
				$this->getEntityManager()->flush();
			}
		}

		return [
			'form' => $form
		];
	}

	public function listAction() {
		$form = new SearchForm();
		$data = [];
		if($this->getRequest()->isPost()) {
			$form->setData($this->params()->fromPost());
			if($form->isValid()) {
				$data = $form->getData();
			}
		}
		$keyboards = $this->getEntityManager()->getRepository('Application\Entity\Keyboard')->findFromSearch($data);
		return [
			'form' => $form,
			'keyboards' => $keyboards
		];

	}
}
