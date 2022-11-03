<?php declare(strict_types=1);

namespace DesignPatterns\AbstractMethod\Model\Chair;

class Modern implements Chair
{
    /**
     * @inheritdoc
     */
    public function hasLegs(): bool
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function sitOn(): string
    {
        return 'I\'m sit on modern chair.';
    }
}