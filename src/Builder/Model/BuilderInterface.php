<?php declare(strict_types=1);

namespace DesignPatterns\Builder\Model;

interface BuilderInterface
{
    /**
     * @return void
     */
    public function create(): void;

    /**
     * @param int $seats
     * @return void
     */
    public function setSeats(int $seats): void;

    /**
     * @param string $engine
     * @return void
     */
    public function setEngine(string $engine): void;

    /**
     * @param string $tripComputer
     * @return void
     */
    public function setTripComputer(string $tripComputer): void;

    /**
     * @param string $GPS
     * @return void
     */
    public function setGPS(string $GPS): void;
}