<?php

namespace AlibabaCloud\Httpdns\V20160201;

use AlibabaCloud\ApiResolverTrait;

/**
 * @method GetResolveCountSummary getResolveCountSummary(array $options = [])
 * @method ListDomains listDomains(array $options = [])
 * @method GetAccountInfo getAccountInfo(array $options = [])
 * @method GetResolveStatistics getResolveStatistics(array $options = [])
 * @method AddDomain addDomain(array $options = [])
 * @method DeleteDomain deleteDomain(array $options = [])
 * @method DescribeDomains describeDomains(array $options = [])
 */
class HttpdnsApiResolver
{
    use ApiResolverTrait;
}

class Rpc extends \AlibabaCloud\Rpc
{
    /** @var string */
    public $product = 'Httpdns';

    /** @var string */
    public $version = '2016-02-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getTimeSpan()
 * @method $this withTimeSpan($value)
 */
class GetResolveCountSummary extends Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class ListDomains extends Rpc
{
}

class GetAccountInfo extends Rpc
{
}

/**
 * @method string getGranularity()
 * @method $this withGranularity($value)
 * @method string getProtocolName()
 * @method $this withProtocolName($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTimeSpan()
 * @method $this withTimeSpan($value)
 */
class GetResolveStatistics extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class AddDomain extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 */
class DeleteDomain extends Rpc
{
}

/**
 * @method string getAccountId()
 * @method $this withAccountId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 */
class DescribeDomains extends Rpc
{
}
