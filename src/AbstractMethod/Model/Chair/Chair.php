<?php declare(strict_types=1);

namespace DesignPatterns\AbstractMethod\Model\Chair;

interface Chair
{
    /**
     * @return bool
     */
    public function hasLegs(): bool;

    /**
     * @return string
     */
    public function sitOn(): string;
}