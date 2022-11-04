<?php declare(strict_types=1);

namespace DesignPatterns\Bridge\Model\RemoteControl;

use DesignPatterns\Bridge\Model\Device;
use DesignPatterns\Bridge\Model\RemoteControl;

/**
 * Extended class from hierarchy abstracted independently of Device class
 */
class Advanced extends RemoteControl
{
    /**
     * @return Device
     */
    public function mute(): Device
    {
        $this->device->setVolume(0);

        return $this->device;
    }
}