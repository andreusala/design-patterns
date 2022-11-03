<?php declare(strict_types=1);

namespace DesignPatterns\AbstractMethod\Model\Sofa;

interface Sofa
{
    /**
     * @return true
     */
    public function hasLegs(): bool;

    /**
     * @return string
     */
    public function sitOn(): string;
}