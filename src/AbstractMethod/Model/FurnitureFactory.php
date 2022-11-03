<?php declare(strict_types=1);

namespace DesignPatterns\AbstractMethod\Model;

use DesignPatterns\AbstractMethod\Model\Chair\Chair;
use DesignPatterns\AbstractMethod\Model\Sofa\Sofa;

interface FurnitureFactory
{
    /**
     * @return Chair
     */
    public function createChair(): Chair;

    /**
     * @return Sofa
     */
    public function createSofa(): Sofa;
}