<?php

namespace Apps\Fintech\Packages\Apis\Providers\Kuvera;

use Apps\Fintech\Packages\Apis\Providers\Providers;

class ApisProvidersKuvera extends Providers
{
    public function init($apiConfig = null, $api = null, $httpOptions = null, $monitorProgress = null)
    {
        if (!isset($apiConfig['category'])) {
            $apiConfig['category'] = 'Providers';
        }
        if (!isset($apiConfig['provider'])) {
            $apiConfig['provider'] = 'Kuvera';
        }

        parent::init($apiConfig, $api, $httpOptions, $monitorProgress);

        return $this;
    }
}