<?php declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\Model;

abstract class TransportFactory
{
    // could have reuse instances that already have been created
    protected static array $instances = [];

    /**
     * @return Transport
     */
    public abstract function create(): Transport;

    /**
     * Deliver directly from factory to create an instance and implement the method
     *
     * @return string
     */
    public function deliver(): string
    {
        $transport = $this->create();

        return $transport->deliver();
    }
}