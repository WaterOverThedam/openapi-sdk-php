<?php

namespace AlibabaCloud\Saf\V20180919;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Client\Request\RpcRequest as Rpc;
use AlibabaCloud\RequestResolverTrait as R;

/**
 * @method ExecuteRequest executeRequest($options = [])
 */
class V20180919
{
    use ApiResolverTrait;
}

/**
 * @method string getServiceParameters
 * @method self withServiceParameters(string $serviceParameters)
 * @method string getService
 * @method self withService(string $service)
 */
class ExecuteRequest extends Rpc
{
    use R;
}