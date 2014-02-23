<?php
namespace SwaggerUI\Controller;

use Zend\Mvc\Controller\AbstractActionController,
    Zend\View\Model\ViewModel;

use SwaggerUI\ConfigAwareInterface;

class SwaggerController extends AbstractActionController implements ConfigAwareInterface {
    protected $config;

    public function setConfig($config) {
        $this->config = $config;
    }

    /**
     * Display the SwaggerUI interface
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        $helperManager = $this->getServiceLocator()->get('viewhelpermanager');
        $basePathHelper = $helperManager->get('basePath');

        // Default to /api/docs in case the configurable path is not set
        $swaggerUrl = '/api/docs';

        // Get swagger JSON url/path from config if set
        if (isset($this->config['swagger-json-url'])) {
            $swaggerUrl = $this->config['swagger-json-url'];
        }

        // Run through basePath helper if the string doesn't start with http
        if (substr($swaggerUrl, 0, 4) !== 'http') {
            $swaggerUrl = $basePathHelper->__invoke($swaggerUrl);
        }

        $viewModel = new ViewModel();
        $viewModel->setTerminal(true);
        $viewModel->setVariable('swaggerUrl', $swaggerUrl);

        return $viewModel->setTemplate('swagger-ui.phtml');
    }
}