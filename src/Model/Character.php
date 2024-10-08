<?php

declare(strict_types=1);

namespace Src\Model;

use Src\Model\Weapons\Interface\IWeapon;

abstract class Character
{
    public function __construct(
        protected ?IWeapon $weapon,
        protected int $healthPoint,
        protected int $manaPoint,
        protected int $strength,
        protected int $agility,
        protected int $intelligence,
    ) {
    }
}