<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_breadcrumbs_home_link_add_breadcrumb(&$lang_value, &$link) {
    $home_link = fn_url('YOUR_LINK');

    Tygh::$app['view']->assign('breadcrumb_home_link', $home_link);
}
