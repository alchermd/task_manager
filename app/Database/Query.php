<?php

namespace App\Database;

use App\Helpers\Logger;

/**
 * Object oriented interface for SQL queries.
 */
class Query
{
    protected $db;
    protected $logger;

    /**
     * @param $db - PDO object used to execute the queries.
     * @param $logger - Logger object for logging error messages.
     */
    public function __construct(\PDO $db, Logger $logger)
    {
        $this->db = $db;
        $this->logger = $logger;
    }

    /**
     * Fetches all the entries from a table.
     *
     * @param $tableName - the name of the table.
     * @param $cls - class name to be used for the fetched data.
     * @return - an array of results.
     */
    public function all(string $tableName, string $cls = \stdClass) : array
    {
        try {
            $statement = $this->db->prepare("SELECT * FROM {$tableName}");
            $statement->execute();

            return $statement->fetchAll(\PDO::FETCH_CLASS, $cls);
        } catch (\Exception $e) {
            $this->logger->log($e->getMessage());
            return [];
        }
    }
}
