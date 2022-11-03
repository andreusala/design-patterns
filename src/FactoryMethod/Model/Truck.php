<?php declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\Model;

class Truck implements Transport
{
    public function deliver(): string
    {
        return 'I\'m going to deliver the commodities by road.';
    }
}