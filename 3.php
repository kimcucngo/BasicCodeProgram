<?php
define('_WEB_HOST_ROOT', 'http://google.com');
echo _WEB_HOST_ROOT;
echo '<br/>';

const _WEB_PATH_ROOT = 'C:/ xampp/htdocs';
echo _WEB_PATH_ROOT;
echo '<br/>';

//check const
$checkDefine = defined('_WEB_HOST_ROOT');
var_dump($checkDefine);
