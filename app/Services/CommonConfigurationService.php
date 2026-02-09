<?php

namespace App\Services;

use App\Http\Contract\ConfigurationInterface;

class CommonConfigurationService
{
    private ConfigurationInterface $configurationInterface;

    public function __construct(ConfigurationInterface $configurationInterface)
    {
        $this->configurationInterface = $configurationInterface;
    }

    public function getConfigurationList($type)
    {
        return $this->configurationInterface->list($type);
    }

    public function getAllConfiguration()
    {
        return $this->configurationInterface->allConfig();
    }

}
