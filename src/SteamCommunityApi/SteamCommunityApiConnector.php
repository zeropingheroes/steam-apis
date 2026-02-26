<?php

namespace Zeropingheroes\SteamApis\SteamCommunityApi;

use Illuminate\Support\Collection;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;
use Zeropingheroes\SteamApis\SteamCommunityApi\Data\LocationCity;
use Zeropingheroes\SteamApis\SteamCommunityApi\Data\LocationCountry;
use Zeropingheroes\SteamApis\SteamCommunityApi\Data\LocationState;
use Zeropingheroes\SteamApis\SteamCommunityApi\Requests\QueryLocationsRequest;

class SteamCommunityApiConnector extends Connector
{
    use AcceptsJson;
    use AlwaysThrowOnErrors;

    public function __construct() {}

    public function resolveBaseUrl(): string
    {
        return 'https://steamcommunity.com';
    }

    /**
     * @return Collection<array-key, LocationCountry|LocationState|LocationCity>
     */
    public function queryLocations(?string $countrycode = null, ?string $statecode = null): Collection
    {
        return $this->send(
            new QueryLocationsRequest($countrycode, $statecode)
        )->dtoOrFail();
    }
}
