<?php

return [
    'role_structure' => [
        'administrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'redacteur' => [
            'profile' => 'r,u'
        ],
        'gebruiker' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
