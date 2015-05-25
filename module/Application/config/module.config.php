<?php
/**
 * MP3 Player
 *
 * @author    Sammie S. Taunton <diemuzi@gmail.com>
 * @copyright 2014 Sammie S. Taunton
 * @license   https://github.com/diemuzi/mp3/blob/master/LICENSE License
 * @link      https://github.com/diemuzi/mp3 MP3 Player
 */

return [
    'controllers'     => [
        'invokables' => [
            'Application\Controller\Index' => 'Application\Controller\IndexController'
        ]
    ],
    'router'          => [
        'routes' => [
            'home' => [
                'type'    => 'literal',
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index'
                    ]
                ]
            ]
        ]
    ],
    'service_manager' => [
        'aliases'            => [
            'translator' => 'MvcTranslator'
        ]
    ],
    'view_manager'    => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map'             => [
            'layout/layout'           => __DIR__ . '/../view/layout/layout.twig',
            'application/index/index' => __DIR__ . '/../view/application/index/index.twig',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml'
        ],
        'template_path_stack'      => [
            __DIR__ . '/../view'
        ],
        'strategies'               => [
            'ViewJsonStrategy'
        ]
    ]
];
