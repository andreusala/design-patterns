<?php declare(strict_types=1);

namespace DesignPatterns\Test\Singleton;

use DesignPatterns\Singleton\Model\Database;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testSingleton()
    {
        $database = Database::getInstance();
        $result = $database->query('SELECT ...');

        $db = Database::getInstance();
        $sql =  $db->query('INSERT INTO ...');

        $this->assertEquals($database, $db);
        $this->assertInstanceOf(Database::class, $database);
        $this->assertInstanceOf(Database::class, $db);
        $this->assertEquals('Querying the follow sql: SELECT ...', $result);
        $this->assertEquals('Querying the follow sql: INSERT INTO ...', $sql);
    }
}