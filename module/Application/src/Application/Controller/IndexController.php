<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use LosBase\Entity\EntityManagerAwareTrait;

class IndexController extends AbstractActionController
{
    use EntityManagerAwareTrait;

    public function indexAction()
    {
        \LosLog\Log\StaticLogger::save('Log to Z-Ray', null, null);
    }
}
