<?php

namespace LightVehikl\LvObjects\GameObjects\Personalities;

use LightVehikl\LvObjects\Enums\Direction;
use LightVehikl\LvObjects\GameObjects\Arena;
use LightVehikl\LvObjects\GameObjects\Personalities\Traits\PicksGoodMoves;
use LightVehikl\LvObjects\GameObjects\Player;

class KeepLane implements Personality
{
    use PicksGoodMoves;

    public function decideMove(Arena $arena, Player $player): ?Direction
    {
        if ($this->goodDirection($arena, $player, $player->direction)) {
            return null;
        }

        return $this->pickGoodMove($arena, $player);
    }
}
