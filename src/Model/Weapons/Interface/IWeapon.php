<?php

declare(strict_types=1);

namespace Src\Model\Weapons\Interface;

interface IWeapon
{
    public function attack(): void;
}