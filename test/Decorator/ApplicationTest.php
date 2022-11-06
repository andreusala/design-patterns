<?php declare(strict_types=1);

namespace DesignPatterns\Test\Decorator;

use DesignPatterns\Decorator\Model\Notifier;
use DesignPatterns\Decorator\Model\Notifier\Decorator\Facebook as FacebookDecorator;
use DesignPatterns\Decorator\Model\Notifier\Decorator\Slack as SlackDecorator;
use DesignPatterns\Decorator\Model\Notifier\Decorator\SMS as SMSDecorator;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    /**
     * @dataProvider getNotifiersProvider
     * @param bool $isFacebookEnabled
     * @param bool $isSMSEnabled
     * @param bool $isSlackEnabled
     * @param string $message
     * @param string $expected
     * @return void
     */
    public function testNotifierSendingMessage(bool $isFacebookEnabled, bool $isSMSEnabled, bool $isSlackEnabled, string $message, string $expected)
    {
        $stack = new Notifier();

        if ($isFacebookEnabled) {
            $stack = new FacebookDecorator($stack);
        }

        if ($isSMSEnabled) {
            $stack = new SMSDecorator($stack);
        }

        if ($isSlackEnabled) {
            $stack = new SlackDecorator($stack);
        }

        $this->assertEquals($expected, $stack->send($message));
    }

    /**
     * @return array[]
     */
    public function getNotifiersProvider(): array
    {
        return [
            '#1 Facebook and Slack' => [
                'fb' => true,
                'sms' => false,
                'slack' => true,
                'message' => '¡Alerta!',
                'expected' => 'Facebook => Slack => ¡Alerta!'
            ],
            '#2 Facebook, SMS, and Slack' => [
                'fb' => true,
                'sms' => true,
                'slack' => true,
                'message' => 'Caution!',
                'expected' => 'Facebook => SMS => Slack => Caution!'
            ],
        ];
    }
}