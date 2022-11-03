<?php declare(strict_types=1);

namespace DesignPatterns\Builder\Model;

class Car
{
    private int $seats;
    private string $engine;
    private string $tripComputer;
    private string $GPS;

    /**
     * @param int $seats
     * @return $this
     */
    public function setSeats(int $seats): self
    {
        $this->seats = $seats;

        return $this;
    }

    /**
     * @param string $engine
     * @return $this
     */
    public function setEngine(string $engine): self
    {
        $this->engine = $engine;

        return $this;
    }

    /**
     * @param string $tripComputer
     * @return $this
     */
    public function setTripComputer(string $tripComputer): self
    {
        $this->tripComputer = $tripComputer;

        return $this;
    }

    /**
     * @param string $GPS
     * @return $this
     */
    public function setGPS(string $GPS): self
    {
        $this->GPS = $GPS;

        return $this;
    }

    /**
     * @return int
     */
    public function getSeats(): int
    {
        return $this->seats;
    }
}