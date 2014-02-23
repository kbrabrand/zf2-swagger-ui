<?php
namespace SwaggerUI\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModel;

class SwaggerController extends AbstractActionController
{
    /**
     * Display the SwaggerUI interface
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);

        return $viewModel->setTemplate('swagger-ui.phtml');
    }
}