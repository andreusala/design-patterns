<?php declare(strict_types=1);

namespace DesignPatterns\Singleton\Model;

class Database
{
    /** @var Database */
    private static $instance;

    private function __construct()
    {
        //private method to disallow call it
    }

    /**
     * @return Database
     */
    public static function getInstance(): Database
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    /**
     * @param string $sql
     * @return string
     */
    public function query(string $sql): string
    {
        return 'Querying the follow sql: ' . $sql;
    }
}