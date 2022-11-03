<?php declare(strict_types=1);

namespace DesignPatterns\Builder\Model;

/**
 * Optional class which knows how to build something sequentially
 */
class Director
{
    /**
     * Make a car with: 5 seats, engine suv, trip and GPS
     * @param BuilderInterface $builder
     * @return Car
     */
    public function createSUV(BuilderInterface $builder): Car
    {
        $builder->create();
        $builder->setSeats(5);
        $builder->setEngine('Engine SUV');
        $builder->setTripComputer('Trip SUV');
        $builder->setGPS('GPS SUV');

        return $builder->getResult();
    }

    /**
     * Make a car with: 2 seats, engine sport
     * @param BuilderInterface $builder
     * @return Car
     */
    public function createSportCar(BuilderInterface $builder): Car
    {
        $builder->create();
        $builder->setSeats(2);
        $builder->setEngine('Engine Sport');

        return $builder->getResult();
    }
}