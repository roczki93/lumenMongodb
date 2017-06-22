<?php

return [

    'default' => 'mongodb',

    'connections' => [

        'mongodb' => array(
            'driver'   => 'mongodb',
            'host'     => '192.168.177.183',
            'port'     => 27017,
            'username' => 'rest',
            'password' => 'rest',
            'database' => 'admin'
        ),

    ],

    'migrations' => 'migrations',
];
