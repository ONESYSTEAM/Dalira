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
        $dsn = "mysql:host={$this->settings['host']};dbname={$this->settings['db']};charset=utf8mb4";

        try {
            return new PDO($dsn, $this->settings['user'], $this->settings['pass'], [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false
            ]);
        } catch (PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }
}
