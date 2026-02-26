<?php

use PHPUnit\Framework\Assert;
use Zeropingheroes\SteamApis\SteamWebApi\SteamWebApiConnector;
use Zeropingheroes\SteamApis\SteamWebApi\Data\App;

it('returns app list', function (): void {
    $appList = app(SteamWebApiConnector::class)->getAppList();

    Assert::assertContainsOnlyInstancesOf(App::class, $appList);
});
