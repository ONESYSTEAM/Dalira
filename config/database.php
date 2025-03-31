<?php

/**
 * Class DBConnection
 *
 * Handles database connection using PDO (PHP Data Objects).
 * Provides a secure and efficient way to interact with the database.
 */
class DBConnection
{
    // Database configuration settings.
    private $settings;

    // Database configuration settings
    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    // Establishes a database connection
    public function connect(): PDO
    {
        $dsn = "mysql:host={$this->settings['host']};dbname={$this->settings['db']};charset=utf8mb4";

        try {
            return new PDO($dsn, $this->settings['user'], $this->settings['pass'], [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Enable exceptions for errors
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Set default fetch mode to associative array
                PDO::ATTR_EMULATE_PREPARES   => false                   // Disable emulated prepared statements
            ]);
        } catch (PDOException $e) {
            // Terminate script and display an error message
            die('Database connection failed: ' . $e->getMessage());
        }
    }
}
