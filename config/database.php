<?php

/**
 * Class DBConnection
 *
 * Handles database connection using PDO (PHP Data Objects).
 * Provides a secure and efficient way to interact with the database.
 */
class DBConnection
{
    /**
     * @var array $settings Database configuration settings.
     */
    private $settings;

    /**
     * DBConnection constructor.
     *
     * @param array $settings Associative array containing database connection details:
     *  - host: Database server hostname or IP.
     *  - db: Database name.
     *  - user: Database username.
     *  - pass: Database password.
     */
    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    /**
     * Establishes a database connection.
     *
     * @return PDO Returns a PDO instance representing the database connection.
     * @throws PDOException If the connection fails, an exception is thrown.
     */
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
