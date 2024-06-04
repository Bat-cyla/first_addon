<?php
$schema['tags_ext_orders']=array(
    'permissions' => 'manage_tags',
    'modes' => array(
        'update' => array(
            'permissions' => array(
                'GET' => 'view_tags',
                'POST' => 'manage_tags'
            ),
        ),
        'manage' => array(
            'permissions' => 'view_tags',
        ),
        'delete' => array(
            'permissions' => 'manage_tags',
        ),
    ),
);
$schema['tools']['modes']['update_status']['param_permissions']['table']['banners'] = 'manage_tags';
return $schema;