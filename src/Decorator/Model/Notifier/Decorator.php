<?php declare(strict_types=1);

namespace DesignPatterns\Decorator\Model\Notifier;

use DesignPatterns\Decorator\Model\Notifier;

class Decorator extends Notifier
{
    private Notifier $notifier;

    public function __construct(Notifier $notifier)
    {
        $this->notifier = $notifier;
    }

    /**
     * @inheritdoc
     */
    public function send(string $message): string
    {
        return $this->notifier->send($message);
    }
}