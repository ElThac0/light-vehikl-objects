<?php

namespace LightVehikl\LvObjects\GameObjects\Personalities;

use LightVehikl\LvObjects\Enums\Direction;
use LightVehikl\LvObjects\GameObjects\Arena;
use LightVehikl\LvObjects\GameObjects\Player;

interface Personality
{
    public function decideMove(Arena $arena): Direction|null;
    public function updatePlayer(Player $player): static;
}
