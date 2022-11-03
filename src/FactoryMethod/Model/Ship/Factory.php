<?php declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\Model\Ship;

use DesignPatterns\FactoryMethod\Model\Ship;
use DesignPatterns\FactoryMethod\Model\Transport;
use DesignPatterns\FactoryMethod\Model\TransportFactory;

class Factory extends TransportFactory
{
    /**
     * @inheritdoc
     */
    public function create(): Transport
    {
        return new Ship();
    }
}