<?php declare(strict_types=1);

namespace DesignPatterns\AbstractMethod\Model\FurnitureFactory;

use DesignPatterns\AbstractMethod\Model\Chair\Chair;
use DesignPatterns\AbstractMethod\Model\FurnitureFactory;
use DesignPatterns\AbstractMethod\Model\Sofa\Sofa;
use DesignPatterns\AbstractMethod\Model\Chair\Modern as ChairModern;
use DesignPatterns\AbstractMethod\Model\Sofa\Modern as SofaModern;


class Modern implements FurnitureFactory
{
    /**
     * @inheritdoc
     */
    public function createChair(): Chair
    {
        return new ChairModern();
    }

    /**
     * @inheritdoc
     */
    public function createSofa(): Sofa
    {
        return new SofaModern();
    }
}