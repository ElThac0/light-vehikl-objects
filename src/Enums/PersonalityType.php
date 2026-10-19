<?php

namespace LightVehikl\LvObjects\Enums;

use LightVehikl\LvObjects\GameObjects\Personalities\ChangeDirection;
use LightVehikl\LvObjects\GameObjects\Personalities\KeepLane;

enum PersonalityType: string
{
    case KEEP_LANE = KeepLane::class;
    case CHANGE_DIRECTION = ChangeDirection::class;
}
