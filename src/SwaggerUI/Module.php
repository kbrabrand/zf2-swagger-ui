<?php
namespace SwaggerUI;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

use SwaggerUI\ConfigAwareInterface;

class Module implements ConfigProviderInterface {
    public function getConfig() {
        return require __DIR__ . '/../../config/module.config.php';
    }

    public function getControllerConfig() {
        return array(
             'initializers' => array(
                function ($instance, $sm) {
                    if ($instance instanceof ConfigAwareInterface) {
                        $locator = $sm->getServiceLocator();
                        $config  = $locator->get('Config');

                        $instance->setConfig(isset($config['swagger-ui']) ? $config['swagger-ui'] : array());
                    }
                }
            )
        );
    }
}