<?php

$router->get('mvc', [
    'as'   => 'api_mvc',
    'uses' => 'Controller@mvc_api',
]);