<?php

namespace Vehikl\LvObjects\GameObjects\Personalities;

use Vehikl\LvObjects\Enums\Direction;
use Vehikl\LvObjects\GameObjects\Arena;
use Vehikl\LvObjects\GameObjects\Personalities\Traits\PicksGoodMoves;
use Vehikl\LvObjects\GameObjects\Player;

class KeepLane implements Personality
{
    use PicksGoodMoves;

    private Arena $arena;

    public function __construct(private Player $player)
    {
    }

    public function decideMove(Arena $arena): ?Direction
    {
        $this->arena = $arena;

        if ($this->goodDirection($this->player->direction)) {
            return null;
        }

        return $this->pickGoodMove();
    }
}
