<?php

$routing = array(
    '/admin\/(.*?)\/(.*?)\/(.*)/' => 'admin/\1_\2/\3'
);

$default['controller'] = 'admins';
$default['action'] = 'getdata/1';
