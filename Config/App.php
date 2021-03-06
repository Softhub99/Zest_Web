<?php

/* Zest Frameowrk config file */
return [

    //Additional 
    'site' => [
        'g_meta' => '',
    ],

    //Mailer
    'mailer' => [
        'username' => '',
        'password' => '',
        'port'     => 000,
        'host'     => '',
    ],
    /*
     * Basic configuration.
     */
   'Config' => [
        'app_name'                => 'Zest Framework',
        'app_version'             => '3.0.0',
        'SHOW_ERRORS'             => true,
        'language'                => 'en',
        'data_dir'                => '../Storage/Data/',
        'cache_dir'               => '../Storage/Cache/',
        'session_path'            => '../Storage/Session/',
        'theme_path'              => '../App/Views/prenium/',
        'router_cache'            => false,
        'router_cache_regenerate' => 3600,
        'MAINTENANCE'             => false,
        'time_zone'                => 'UTC',
    ],


    /* Encryption */
    'encryption' => [
        /*
        | Supported "openssl" and "sodium"
        */
        'driver' => 'openssl',

        /* Openssl option */
        'openssl' => [
            'key' => 'euyq74tjfdskjFDSGq74taeoqiertp',
        ],
    ],

     /* Hashing */
    'hashing' => [
        /* Default Hash Driver
        | Supported: "bcrypt", "argon2i", "argon2id"
        */
        'driver' => 'bcrypt',

        /*
        | Bcrypt Options

        | Here you may specify the configuration options that should be used when
        | passwords are hashed using the Bcrypt algorithm. This will allow you
        | to control the amount of time it takes to hash the given password.
        |
        */
        'bcrypt' => [
            'cost' => 10,
        ],

        /*
        | Argon Options

        | Here you may specify the configuration options that should be used when
        | passwords are hashed using the Bcrypt algorithm. This will allow you
        | to control the amount of time it takes to hash the given password.
        |
        */
        'argon' => [
            'memory'  => 1024,
            'threads' => 2,
            'time'    => 2,
        ],
    ],

    'cache' => [
        'driver' => 'file',

        'memcache' => [
            'host' => 'memcache-host',
            'port' => 'memcache-port',
        ],
        'memcached' => [
            'host'   => 'memcached-host',
            'port'   => 'memcached-port',
            'weight' => 'memcached-weight',
        ],
        'redis' => [
            'host' => 'redis-host',
            'port' => 'redis-port',            
        ]
    ],
    /*
     * Database configuration.
     */
    'Database' => [
        /* Database DRIVE */
        'DB_DRIVER' => 'mysql', // mysql is recommendeds
        /* Database NAME */
        'DB_NAME' => 'zestweb',
        /* MYSQL HOST */
        'MYSQL_HOST' => 'localhost',
        /* MYSQL PASS */
        'MYSQL_USER' => 'root',
        /* MYSQL PASS*/
        'MYSQL_PASS' => '',
        /* SQLite name with path */
        'SQLITE_NAME' => 'path/to/sqlite',
    ],

    /*
     * Auth configuration.
     */
    'Auth' => [
        /* Auth database name */
        'DB_NAME' => 'zestweb',
        /* Auth database table name*/
        'DB_TABLE' => 'users',
        /* Auth default verification link */
        'VERIFICATION_LINK' => '//verify/',
        /* Auth default password reset link */
        'RESET_PASSWORD_LINK' => '/account/reset/password',
        /* Is send auth relate email over smtp. */
        'IS_SMTP' => false,
        /* Is user need to verify their email */
        'IS_VERIFY_EMAIL' => false,
        /* Is user password should be strong? */
        'STICKY_PASSWORD' => false,
    ],

    /*
     * Email configuration.
     */
    'email' => [
        /* Site Email */
        'SITE_EMAIL' => 'zest@zestframework.xyz', // mysql is recommendeds
        /* SMTP HOST */
        'SMTP_HOST' => 'smtp-host',
        /* SMTP USER */
        'SMTP_USER' => 'smtp-user',
        /* SMTP PASS */
        'SMTP_PASS' => 'smtp-pass',
        /* SMTP PORT*/
        'SMTP_PORT' => 'smtp-port',
    ],

    /* Dependencies */
    /* class that should be automatically resolved by the IOC */
    'dependencies' => [
        //examples
        //'version' => \Zest\Common\Version::class,
    ],

    /*
     * Files Configuration
    */
    'files' => [
        //Default file mine type
        'mine' => [
            'type' => [
                'application/x-zip-compressed',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'image/gif',
                'image/jpeg',
                'image/jpeg',
                'audio/mpeg',
                'video/mp4',
                'application/pdf',
                'image/png',
                'application/zip',
                'application/et-stream',
                'image/x-icon',
                'image/icon',
                'image/svg+xml',
            ],
        ],

        //Default types
        'types' => [
            'image' => ['jpg', 'png', 'jpeg', 'gif', 'ico', 'svg'],
            'zip'   => ['zip', 'tar', '7zip', 'rar'],
            'docs'  => ['pdf', 'docs', 'docx'],
            'media' => ['mp4', 'mp3', 'wav', '3gp'],
        ],
    ],    

    'class_aliases' => [

    ],
];
