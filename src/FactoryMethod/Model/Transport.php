<?php declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\Model;

interface Transport
{
    /**
     * @return string
     */
    public function deliver(): string;
}