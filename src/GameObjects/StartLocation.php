<?php
namespace Vehikl\LvObjects\GameObjects;

use Vehikl\LvObjects\Enums\ContentType;
use Vehikl\LvObjects\Enums\Direction;

class StartLocation
{
    public function __construct(
        public ContentType $playerType,
        public Tile $tile,
        public Direction $direction,
    ) {}
}
