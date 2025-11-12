<?php
namespace LightVehikl\LvObjects\GameObjects;

use LightVehikl\LvObjects\Enums\ContentType;
use LightVehikl\LvObjects\Enums\Direction;

class StartLocation
{
    public function __construct(
        public ContentType $playerType,
        public Tile $tile,
        public Direction $direction,
    ) {}
}
