<?php declare(strict_types=1);

namespace DesignPatterns\Composite\Model;

interface Graphic
{
    /**
     * @param int $x
     * @param int $y
     * @return void
     */
    public function move(int $x, int $y): void;

    /**
     * @return string
     */
    public function draw(): string;

    /**
     * @return array [x,y]
     */
    public function getPosition(): array;
}