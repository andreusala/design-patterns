<?php declare(strict_types=1);

namespace DesignPatterns\Bridge\Model;

interface Device
{
    /**
     * @return bool
     */
    public function isEnabled(): bool;

    /**
     * @return void
     */
    public function enable(): void;

    /**
     * @return void
     */
    public function disable(): void;

    /**
     * @return int
     */
    public function getVolume(): int;

    /**
     * @return int
     */
    public function getChannel(): int;

    /**
     * @param int $volume
     * @return $this
     */
    public function setVolume(int $volume): self;

    /**
     * @param int $channel
     * @return $this
     */
    public function setChannel(int $channel): self;
}