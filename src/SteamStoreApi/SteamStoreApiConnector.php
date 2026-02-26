<?php

namespace Zeropingheroes\SteamApis\SteamStoreApi;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use Zeropingheroes\SteamApis\SteamStoreApi\Data\App;
use Zeropingheroes\SteamApis\SteamStoreApi\Requests\AppDetailsRequest;

class SteamStoreApiConnector extends Connector
{
    use AcceptsJson;
    use AlwaysThrowOnErrors;

    public function __construct()
    {}

    public function resolveBaseUrl(): string
    {
        return 'https://store.steampowered.com/api';
    }

    public function appDetails(int $appid, ?string $countrycode = null): App
    {
        return $this->send(
            new AppDetailsRequest($appid, $countrycode)
        )->dtoOrFail();
    }
}
