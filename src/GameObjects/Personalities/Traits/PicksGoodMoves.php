<?php

namespace LightVehikl\LvObjects\GameObjects\Personalities\Traits;

use LightVehikl\LvObjects\Enums\Direction;
use Illuminate\Support\Arr;
use LightVehikl\LvObjects\GameObjects\Arena;
use LightVehikl\LvObjects\GameObjects\Player;

trait PicksGoodMoves
{
    protected function pickGoodMove(Arena $arena, Player $player): Direction|null
    {
        $goodMoves = [];

        foreach (Direction::cases() as $direction) {
            if ($this->goodDirection($arena, $player, $direction)) {
                $goodMoves[] = $direction;
            }
        }

        if (empty($goodMoves)) {
            return null;
        }

        return Arr::random($goodMoves);
    }

    protected function goodDirection(Arena $arena, Player $player, Direction $direction): bool
    {
        [$x, $y] = $player->getLocation();
        switch ($direction) {
            case Direction::NORTH:
                $y--;
                break;
            case Direction::SOUTH:
                $y++;
                break;
            case Direction::EAST:
                $x++;
                break;
            case Direction::WEST:
                $x--;
                break;
        }
        return $arena->validMove([$x, $y]);
    }
}
