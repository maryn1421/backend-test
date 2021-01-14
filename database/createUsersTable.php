<?php

use MongoDB\BSON\Type;

/**
 * PHP MySQL Create Table Demo
 */
class createUsersTable {

    /**
     * database host
     */
    const DB_HOST = 'localhost';

    /**
     * database name
     */
    const DB_NAME = 'backend_test_db';

    /**
     * database user
     */
    const DB_USER = 'root';
    /*
     * database password
     */
    const DB_PASSWORD = '';

    /**
     *
     * @var type
     */
    private $pdo = null;

    /**
     * Open the database connection
     */
    public function __construct() {
        // open database connection
        $conStr = sprintf("mysql:host=%s;dbname=%s", self::DB_HOST, self::DB_NAME);
        try {
            $this->pdo = new PDO($conStr, self::DB_USER, self::DB_PASSWORD);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    //...
}