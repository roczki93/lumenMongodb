<?php

return [
    'mapping'         => 'xml',
    'paths'           => [
        base_path('some/Domain/Path/To/Your/Infrastructure/Resources/ODM'),
        base_path('some/App'),
    ],
    'proxy'           => [
        'directory' => storage_path('doctrine/proxies'),
    ],
    'hydrator'        => [
        'directory' => storage_path('doctrine/proxies'),
    ],
];
