<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

$schema['central']['orders']['items']['tags_ext_orders'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'tags_ext.manage',
    'position' => 100
);
$schema['central']['customers']['items']['tags_ext_customers'] = array(
    'attrs' => array(
        'class'=>'is-addon'
    ),
    'href' => 'tags_ext_customers.manage',
    'position' => 100
);

return $schema;