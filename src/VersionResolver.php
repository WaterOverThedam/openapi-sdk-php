<?php

namespace AlibabaCloud;

use AlibabaCloud\Client\Exception\ClientException;

class VersionResolver
{
    /**
     * @var bool
     */
    protected $static = false;

    /**
     * Version Resolver constructor.
     *
     * @param bool $static
     */
    public function __construct($static = false)
    {
        $this->static = $static;
    }

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return (new static(true))->__call($name, $arguments);
    }

    /**
     * @param string $version
     * @param array  $arguments
     *
     * @return mixed
     * @throws ClientException
     */
    public function __call($version, $arguments)
    {
        $serviceName = $this->getServiceName(\get_class($this));

        $version = \ucfirst($version);

        if ($this->static === true) {
            $serviceName = \str_replace('Version', '', $serviceName);
        }

        $class = "AlibabaCloud\\{$serviceName}\\$version\\{$serviceName}ApiResolver";

        if (\class_exists($class)) {
            return new $class();
        }

        throw new ClientException(
            "$serviceName Versions contains no {$version}",
            'SDK.VersionNotFound'
        );
    }

    /**
     * @param string $class
     *
     * @return mixed
     * @throws ClientException
     */
    protected function getServiceName($class)
    {
        $array = \explode('\\', $class);

        if (isset($array[1])) {
            return $array[1];
        }

        throw new ClientException(
            'Service name not found.',
            'SDK.ServiceNotFound'
        );
    }
}
