<?php declare(strict_types=1);

namespace DesignPatterns\Bridge\Model;

/**
 * The "abstraction" defines the interface for the "control" part of the two class hierarchies.
 * Holds a reference to an object in the "implementation" hierarchy and delegates all actual work to this object.
 */
class RemoteControl
{
    protected Device $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    /**
     * @return Device
     */
    public function togglePower(): Device
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        } else {
            $this->device->enable();
        }

        return $this->device;
    }

    /**
     * @return void
     */
    public function volumeDown(): void
    {
        $this->device->setVolume($this->device->getVolume() - 10);
    }

    /**
     * @return void
     */
    public function volumeUp(): void
    {
        $this->device->setVolume($this->device->getVolume() + 10);
    }

    /**
     * @return void
     */
    public function channelDown(): void
    {
        $this->device->setChannel($this->device->getChannel() - 1);
    }

    /**
     * @return void
     */
    public function channelUp(): void
    {
        $this->device->setChannel($this->device->getChannel() + 1);
    }
}