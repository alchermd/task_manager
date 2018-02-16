<?php

namespace App\Database;

use App\Helpers\Logger;

/**
 * Handles database connections.
 */
class Connection
{
    protected $logger;

    /**
     * @param $logger - Logger object for logging error messages.
     */
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Attempts to create a new PDO connection.
     * 
     * @param $config - array of configuration options.
     */
    public function make(array $config) : \PDO
    {
        try {
            return new \PDO(
                "{$config['connection']};dbname={$config['dbname']}", 
                $config['username'], $config['password'], $config['options']
            );
        }
        catch (\PDOException $e) {
            $this->logger->log($e->getMessage());
        }
    }
}