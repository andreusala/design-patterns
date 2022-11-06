<?php declare(strict_types=1);

namespace DesignPatterns\Decorator\Model;

class Notifier
{
    /**
     * @param string $message
     * @return string
     */
    public function send(string $message): string
    {
        return $message;
    }
}