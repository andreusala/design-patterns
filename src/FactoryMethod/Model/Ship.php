<?php declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\Model;

class Ship implements Transport
{
    public function deliver(): string
    {
        return 'I\'m going to deliver the commodities by sea.';
    }
}