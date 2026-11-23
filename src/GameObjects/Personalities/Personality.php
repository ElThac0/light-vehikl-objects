<?php

namespace LightVehikl\LvObjects\GameObjects\Personalities;

use Closure;
use LightVehikl\LvObjects\Enums\Direction;
use LightVehikl\LvObjects\GameObjects\Arena;
use LightVehikl\LvObjects\GameObjects\Player;

abstract class Personality
{
    private Closure $outputMethod;

    abstract public function name(): string;

    abstract public function decideMove(Arena $arena, Player $player): Direction|null;

    public function setOutput(Closure $output)
    {
        $this->outputMethod = $output;
    }
    public function output(string $message): void {
        if (isset($this->outputMethod)) {
            ($this->outputMethod)($message);
        }
    }
}
