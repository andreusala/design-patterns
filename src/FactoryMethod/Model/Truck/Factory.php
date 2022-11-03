<?php declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\Model\Truck;

use DesignPatterns\FactoryMethod\Model\TransportFactory;
use DesignPatterns\FactoryMethod\Model\Truck;
use DesignPatterns\FactoryMethod\Model\Transport;

class Factory extends TransportFactory
{
    /**
     * @inheritdoc
     */
    public function create(string $name = null): Transport
    {
        if (!isset(self::$instances[$name])) {
            self::$instances[$name] = new Truck();
        }

        return self::$instances[$name];
    }
}