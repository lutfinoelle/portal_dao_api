<?php

$router->get('/', fn() => 'Hellow');

$router->get('/api/uker', 'UkerController@api');
$router->post('/api/uker/update', 'UkerController@update');
