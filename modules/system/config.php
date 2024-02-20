<?php
return [
    'components' => [
        // lista de configuraciones de componente
    ],
    'params' => [
        'bsVersion' => "5.x",
        'menus' => [
            'top_left' => [
            ],
            'top_right' => [
            ],
            'top_primary' => [
            ],
            'top_secondary' => [
            ],
            'my_account' => [
                // [
                //     'label' => 'Mi perfil',
                //     'url' => ['/profile'],
                // ],
                // // [
                // //     'label' => 'Cambiar contraseña',
                // //     'url' => ['/site/my-password'],
                // // ],
                // [
                //     'label' => 'Ajustes',
                //     'url' => ['/my-account'],
                // ],
            ],
            'admin' => [
                [
                    'label' => '<i class="bi-house fs-1"></i>',
                    'url' => ['/system/default/index'],
                ],
                [
                    'label' => '<i class="bi bi-card-heading fs-1"></i>',
                    'url' => ['/system/pages/index'],
                ],
                [
                    'label' => '<i class="bi bi-people fs-1"></i>',
                    'url' => ['/system/users/index'],
                ],
                [
                    'label' => '<i class="bi bi-person-gear fs-1"></i>',
                    'url' => ['/system/roles/index'],
                ],
                [
                    'label' => '<i class="bi bi-database-gear fs-1"></i>',
                    'url' => ['/system/options/index'],
                ],
                [
                    'label' => '<i class="bi bi-puzzle fs-1"></i>',
                    'url' => ['/system/modules/index'],
                ],
                [
                    'label' => '<i class="bi bi-person-circle h2"></i>',
                    'items' => [
                        [
                            'label' => 'Mi cuenta',
                            'url' => ['/system/default/my-account'],
                        ],
                    ],
                ],
            ],
        ],
    ],
];