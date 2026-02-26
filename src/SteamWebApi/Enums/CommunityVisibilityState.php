<?php

namespace Zeropingheroes\SteamApis\SteamWebApi\Enums;

enum CommunityVisibilityState: int
{
    case Private = 1;
    case Protected = 2;
    case Public = 3;
}
