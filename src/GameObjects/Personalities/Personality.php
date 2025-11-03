<?php

namespace Vehikl\LvObjects\GameObjects\Personalities;

use Vehikl\LvObjects\Enums\Direction;
use Vehikl\LvObjects\GameObjects\Arena;

interface Personality
{
    public function decideMove(Arena $arena): Direction|null;
}
