<?php

namespace LightVehikl\LvObjects\GameObjects\Personalities;

use LightVehikl\LvObjects\Enums\Direction;
use LightVehikl\LvObjects\GameObjects\Arena;
use LightVehikl\LvObjects\GameObjects\Personalities\Traits\PicksGoodMoves;
use LightVehikl\LvObjects\GameObjects\Player;

class ChangeDirection implements Personality
{
    use PicksGoodMoves;

    private Arena $arena;

    public function __construct(private Player $player)
    {
    }

    public function decideMove(Arena $arena): ?Direction
    {
        $this->arena = $arena;

        return $this->pickGoodMove();
    }
}
