<?php

namespace Apps\Fintech\Packages\Apis\Providers\Kuvera\Model;

use System\Base\BaseModel;

class AppsFintechApisProvidersKuvera extends BaseModel
{
    public $id;

    public $api_url;

    public $auth_type;

    public $username;

    public $password;

    public $access_token;

    public $authorization;

    public $sync;

    public function onConstruct()
    {
        $this->setSource('apps_fintech_apis_providers');
    }
}