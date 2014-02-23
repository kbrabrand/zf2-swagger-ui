<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'SwaggerUI\Controller\Swagger' => 'SwaggerUI\Controller\SwaggerController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'swagger-ui' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/api/swagger',
                    'defaults' => array(
                        'controller' => 'SwaggerUI\Controller\Swagger',
                        'action' => 'index'
                    )
                )
            )
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);