<?php declare(strict_types=1);

namespace DesignPatterns\Composite\Model\Graphic;

use DesignPatterns\Composite\Model\Graphic;

class Composite implements Graphic
{
    /** @var Graphic[]  */
    private array $graphics;

    /**
     * @param Graphic $graphic
     * @return void
     */
    public function add(Graphic $graphic)
    {
        $this->graphics[] = $graphic;
    }

    /**
     * @param Graphic $graphic
     * @return void
     */
    public function remove(Graphic $graphic)
    {
        foreach ($this->graphics as $index => $element) {
            if ($element->getPosition() == $graphic->getPosition()) {
                unset($this->graphics[$index]);
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function move(int $x, int $y): void
    {
        foreach($this->graphics as $graphic) {
            $graphic->move($x, $y);
        }
    }

    /**
     * @inheritdoc
     */
    public function draw(): string
    {
        $draw = '';

        foreach($this->graphics as $graphic) {
            $draw .= $graphic->draw();
        }

        return $draw;
    }

    public function getPosition(): array
    {
        $positions = [];

        foreach($this->graphics as $graphic) {
            $positions[] = $graphic->getPosition();
        }

        return $positions;
    }
}
