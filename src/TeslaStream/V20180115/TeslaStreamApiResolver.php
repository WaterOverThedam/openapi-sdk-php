<?php

namespace AlibabaCloud\TeslaStream\V20180115;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method GetJobTopology getJobTopology(array $options = [])
 * @method BatchGetPluginConfigInfo batchGetPluginConfigInfo(array $options = [])
 * @method BatchGetJobMetricInfo batchGetJobMetricInfo(array $options = [])
 */
class TeslaStreamApiResolver
{
    use ApiResolverTrait;
}

class Rpc extends \AlibabaCloud\Rpc
{
    /** @var string */
    public $product = 'TeslaStream';

    /** @var string */
    public $version = '2018-01-15';
}

/**
 * @method string getJobName()
 * @method $this withJobName($value)
 */
class GetJobTopology extends Rpc
{
}

/**
 * @method string getPluginInfos()
 * @method $this withPluginInfos($value)
 */
class BatchGetPluginConfigInfo extends Rpc
{
}

/**
 * @method string getJobInfos()
 * @method $this withJobInfos($value)
 */
class BatchGetJobMetricInfo extends Rpc
{
}
