<?php declare(strict_types=1);

namespace DesignPatterns\Test\AbstractMethod;

use DesignPatterns\AbstractMethod\Model\Chair\Chair;
use DesignPatterns\AbstractMethod\Model\FurnitureFactory;
use DesignPatterns\AbstractMethod\Model\Sofa\Sofa;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    private FurnitureFactory\Modern $modernFactory;
    private FurnitureFactory\Victorian $victorianFactory;

    protected function setUp(): void
    {
        parent::setUp();

        $this->modernFactory = new FurnitureFactory\Modern();
        $this->victorianFactory = new FurnitureFactory\Victorian();
    }

    public function testCreateModernChair()
    {
        $chair = $this->handMeAChair($this->modernFactory);
        $this->assertTrue($chair->hasLegs());
        $this->assertEquals('I\'m sit on modern chair.', $chair->sitOn());
    }

    public function testCreateModernSofa()
    {
        $sofa = $this->handMeASofa($this->modernFactory);
        $this->assertTrue($sofa->hasLegs());
        $this->assertEquals('I\'m sit on modern sofa.', $sofa->sitOn());
    }

    public function testCreateVictorianChair()
    {
        $chair = $this->handMeAChair($this->victorianFactory);
        $this->assertTrue($chair->hasLegs());
        $this->assertEquals('I\'m sit on victorian chair.', $chair->sitOn());
    }

    public function testCreateVictorianSofa()
    {
        $sofa = $this->handMeASofa($this->victorianFactory);
        $this->assertTrue($sofa->hasLegs());
        $this->assertEquals('I\'m sit on victorian sofa.', $sofa->sitOn());
    }

    /**
     * @param FurnitureFactory $factory
     * @return Chair
     */
    private function handMeAChair(FurnitureFactory $factory): Chair
    {
        return $factory->createChair();
    }

    /**
     * @param FurnitureFactory $factory
     * @return Sofa
     */
    private function handMeASofa(FurnitureFactory $factory): Sofa
    {
        return $factory->createSofa();
    }
}