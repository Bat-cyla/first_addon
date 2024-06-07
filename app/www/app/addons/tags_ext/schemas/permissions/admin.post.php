<?php
return [
    'default_permission' => true,
    'controllers'        => [
        'tags_ext' => [
        'modes' => [
            'manage' => [
                'permissions' => true
            ],
            'delete' => [
                'permissions' => true
            ],
            'm_update' => [
                'permissions' =>
                [
                    'GET'=>true,
                    'POST'=>true
                ]
               ],
            ],
        ]
    ]
];


