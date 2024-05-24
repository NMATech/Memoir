<?php

namespace App\Enums;

enum Relationship : string
{
    case FRIEND = "friend";
    case BLOCKED = "blocked";
    case FOLLOWING = "following";
}
