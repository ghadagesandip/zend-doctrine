<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
    	$objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');

    	$user = new \Application\Entity\User();
    	$user->setFullName('Sandip Ghadge');
    	$objectManager->persist($user);
    	$objectManager->flush();
    	die(var_dump($user->getId()));
        //return new ViewModel();
    }
}
