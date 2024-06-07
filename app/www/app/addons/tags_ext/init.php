<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

fn_register_hooks(
    'update_order_details_post',
    'update_user_profile_post',
    'get_orders',
    'get_promotion_data_post'
);