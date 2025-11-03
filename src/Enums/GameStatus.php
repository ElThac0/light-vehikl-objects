<?php

namespace Vehikl\LvObjects\Enums;

enum GameStatus: string
{
    case WAITING = 'waiting';
    case ACTIVE = 'active';
    case COMPLETE = 'complete';
}
