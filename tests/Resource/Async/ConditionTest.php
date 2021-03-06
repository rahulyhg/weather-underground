<?php declare(strict_types=1);

namespace ApiClients\Tests\Client\WeatherUnderground\Resource\Async;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use ApiClients\Client\WeatherUnderground\ApiSettings;
use ApiClients\Client\WeatherUnderground\Resource\Condition;

class ConditionTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return Condition::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
