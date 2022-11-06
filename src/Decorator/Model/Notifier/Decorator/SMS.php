<?php declare(strict_types=1);

namespace DesignPatterns\Decorator\Model\Notifier\Decorator;

use DesignPatterns\Decorator\Model\Notifier\Decorator;

class SMS extends Decorator
{
    /**
     * @inheritdoc
     */
    public function send(string $message): string
    {
        return parent::send('SMS => ' . $message);
    }
}