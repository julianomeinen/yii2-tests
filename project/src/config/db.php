<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => getenv('DB_DSN') || 'pgsql:host=postgres;dbname=postgres',
    'username' => getenv('DB_USERNAME') || 'postgres',
    'password' => getenv('DB_PASSWORD') || 'postgres',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
