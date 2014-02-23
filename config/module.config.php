<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'SwaggerUI\Controller\Index' => 'SwaggerUI\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'swagger-ui' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/api/swagger',
                    'defaults' => array(
                        'controller' => 'SwaggerUI\Controller\Index'
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