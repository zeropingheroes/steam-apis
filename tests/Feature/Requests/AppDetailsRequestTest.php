<?php

use PHPUnit\Framework\Assert;
use Zeropingheroes\SteamApis\SteamStoreApi\SteamStoreApiConnector;
use Zeropingheroes\SteamApis\SteamStoreApi\Data\App;

it('returns app details', function (int $appid): void {
    $apps = app(SteamStoreApiConnector::class)->appDetails($appid);

    Assert::assertInstanceOf(App::class, $apps);
})->with('appids');
