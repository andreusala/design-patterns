<?php declare(strict_types=1);

namespace DesignPatterns\Builder\Model\Car;

use DesignPatterns\Builder\Model\BuilderInterface;
use DesignPatterns\Builder\Model\Car;

/**
 * Class Builder to create a Car on demand because can avoid long parameter list on constructor
 */
class Builder implements BuilderInterface
{
    private Car $car;

    /**
     * @inheritdoc
     */
    public function create(): void
    {
        $this->car = new Car();
    }

    /**
     * @inheritdoc
     */
    public function setSeats(int $seats): void
    {
        $this->car->setSeats($seats);
    }

    /**
     * @inheritdoc
     */
    public function setEngine(string $engine): void
    {
        $this->car->setEngine($engine);
    }

    /**
     * @inheritdoc
     */
    public function setTripComputer(string $tripComputer): void
    {
        $this->car->setTripComputer($tripComputer);
    }

    /**
     * @inheritdoc
     */
    public function setGPS(string $GPS): void
    {
        $this->car->setGPS($GPS);
    }

    /**
     * @return Car
     */
    public function getResult(): Car
    {
        return $this->car;
    }
}