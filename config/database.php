<?php

class DBConnection
{
    private $settings;

    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    public function connect(): PDO
    {
        $dsn = "mysql:host={$this->settings['DB_HOST']};dbname={$this->settings['DB_DATABASE']};charset=utf8mb4";

        try {
            return new PDO($dsn, $this->settings['DB_USERNAME'], $this->settings['DB_PASSWORD'], [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false
            ]);
        } catch (PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }
}
