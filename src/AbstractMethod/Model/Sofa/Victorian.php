<?php declare(strict_types=1);

namespace DesignPatterns\AbstractMethod\Model\Sofa;

class Victorian implements Sofa
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
        return 'I\'m sit on victorian sofa.';
    }
}