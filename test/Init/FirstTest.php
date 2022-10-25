<?php declare(strict_types=1);

namespace DesignPatterns\Test\Init;

use DesignPatterns\Init\First;
use PHPUnit\Framework\TestCase;

class FirstTest extends TestCase
{
    private First $sut;

    protected function setUp(): void
    {
        parent::setUp();

        $this->sut = new First();
    }

    public function testExecute()
    {
        $this->assertTrue($this->sut->execute());
    }
}