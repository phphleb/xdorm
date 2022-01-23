<?php

// Copy this file to the config directory.

/**
 * This file must be hidden when copying the project, as it contains important information.
 *
 * Этот файл необходимо скрывать при копировании проекта, так как он содержит важную информацию.
 *
 */

define('HLEB_TYPE_DB', 'mysql.name');

define('HLEB_PARAMETERS_FOR_DB', [

    'mysql.name' => [
        'mysql:host=localhost',
        'port=3306',
        'dbname=databasename',
        'charset=utf8',
        'user' => 'username',
        'pass' => 'password'
    ],

    'sqlite.name' => [
        'sqlite:c:/main.db',
        'user' => 'username',
        'pass' => 'password'
    ],

    'postgresql.name' => [
        'pgsql:host=127.0.0.1',
        'port=5432',
        'dbname=databasename',
        'user' => 'username',
        'pass' => 'password'
    ]
]);

