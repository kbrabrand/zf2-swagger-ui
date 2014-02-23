<?php
namespace SwaggerUI\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /**
     * Display the SwaggerUI interface
     *
     * @return ViewModel
     */
    public function displayAction()
    {
        $viewModel = new ViewModel();
        return $viewModel->setTemplate('index.phtml');
    }
}