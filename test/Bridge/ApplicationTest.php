<?php declare(strict_types=1);

namespace DesignPatterns\Test\Bridge;

use DesignPatterns\Bridge\Model\Device\Radio;
use DesignPatterns\Bridge\Model\Device\Tv;
use DesignPatterns\Bridge\Model\RemoteControl;
use DesignPatterns\Bridge\Model\RemoteControl\Advanced as AdvancedRemoteControl;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase
{
    public function testBridgeDevices()
    {
        $tv = new Tv();
        $remote = new RemoteControl($tv);
        $device = $remote->togglePower();
        $this->assertTrue($device->isEnabled());

        $radio = new Radio();
        $remoteAdvanced = new AdvancedRemoteControl($radio);
        $deviceAdvanced = $remoteAdvanced->mute();
        $this->assertEquals(0, $deviceAdvanced->getVolume());
    }
}