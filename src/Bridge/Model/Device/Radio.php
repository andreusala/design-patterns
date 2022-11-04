<?php declare(strict_types=1);

namespace DesignPatterns\Bridge\Model\Device;

use DesignPatterns\Bridge\Model\Device;

class Radio implements Device
{
    private bool $enable = false;
    private int $volume = 0;
    private int $channel = 104;

    /**
     * @inheritdoc
     */
    public function isEnabled(): bool
    {
        return $this->enable;
    }

    /**
     * @inheritdoc
     */
    public function enable(): void
    {
        $this->enable = true;
    }

    /**
     * @inheritdoc
     */
    public function disable(): void
    {
        $this->enable = false;
    }

    /**
     * @inheritdoc
     */
    public function getVolume(): int
    {
        return $this->volume;
    }

    /**
     * @inheritdoc
     */
    public function getChannel(): int
    {
        return $this->channel;
    }

    /**
     * @inheritdoc
     */
    public function setVolume(int $volume): Device
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setChannel(int $channel): Device
    {
        $this->channel = $channel;

        return $this;
    }
}