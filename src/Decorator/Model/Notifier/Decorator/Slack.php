<?php declare(strict_types=1);

namespace DesignPatterns\Decorator\Model\Notifier\Decorator;

use DesignPatterns\Decorator\Model\Notifier\Decorator;

class Slack extends Decorator
{
    /**
     * @inheritdoc
     */
    public function send(string $message): string
    {
        return parent::send('Slack => ' . $message);
    }
}