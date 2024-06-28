<?php
use Tygh\CpFileReader\CpXlsColumnException;
use Tygh\Tygh;
use Tygh\Storage;
use Tygh\CpFileReader\CpFileReader;
use Tygh\CpFileUploader\CpFileUploader;

if (!defined('BOOTSTRAP')) {
    die('Access denied');
}

$view = Tygh::$app['view'];
$cart = &Tygh::$app['session']['cart'];
$auth = &Tygh::$app['session']['auth'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    return;
}
if ($mode == 'view') {
    if (defined('AJAX_REQUEST')) {
        if (empty($auth['user_id'])) {
            Tygh::$app['ajax']->assign('force_redirection', fn_url('auth.login_form'));
        } else {
            $view->display('addons/cp_generate_cart_from_file/views/export_view.tpl');


        }
    }

    exit();
}