<?php declare(strict_types=1);

namespace DesignPatterns\AbstractMethod\Model\Sofa;

class Modern implements Sofa
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
        return 'I\'m sit on modern sofa.';
    }
}