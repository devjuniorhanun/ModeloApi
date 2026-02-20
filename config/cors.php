<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'login'], // Adicione os caminhos necessários
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:3000'], // ESPECIFIQUE A ORIGEM AQUI
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true, // DEVE SER TRUE PARA LOGIN/COOKIES
];
