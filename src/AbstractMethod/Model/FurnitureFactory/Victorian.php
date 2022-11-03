<?php declare(strict_types=1);

namespace DesignPatterns\AbstractMethod\Model\FurnitureFactory;

use DesignPatterns\AbstractMethod\Model\Chair\Chair;
use DesignPatterns\AbstractMethod\Model\FurnitureFactory;
use DesignPatterns\AbstractMethod\Model\Sofa\Sofa;
use DesignPatterns\AbstractMethod\Model\Chair\Victorian as ChairVictorian;
use DesignPatterns\AbstractMethod\Model\Sofa\Victorian as SofaVictorian;

class Victorian implements FurnitureFactory
{
    /**
     * @inheritdoc
     */
    public function createChair(): Chair
    {
        return new ChairVictorian();
    }

    /**
     * @inheritdoc
     */
    public function createSofa(): Sofa
    {
        return new SofaVictorian();
    }
}