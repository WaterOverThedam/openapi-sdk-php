<?php

namespace AlibabaCloud\Tests\Feature;

use PHPUnit\Framework\TestCase;
use AlibabaCloud\Ecs\EcsVersion;
use AlibabaCloud\Ecs\V20140526\Ecs;
use AlibabaCloud\Client\AlibabaCloud;
use AlibabaCloud\Ecs\V20140526\DescribeRegions;
use AlibabaCloud\Client\Exception\ClientException;
use AlibabaCloud\Client\Exception\ServerException;

/**
 * Class EcsTest
 *
 * @package   AlibabaCloud\Tests\Feature
 */
class EcsTest extends TestCase
{
    /**
     * @throws ClientException
     */
    public function setUp()
    {
        parent::setUp();

        AlibabaCloud::accessKeyClient(
            \getenv('ACCESS_KEY_ID'),
            \getenv('ACCESS_KEY_SECRET')
        )->regionId(\getenv('REGION_ID'))->asDefaultClient();
    }

    public function testVersionResolve()
    {
        $request = AlibabaCloud::ecs()
                               ->v20140526()
                               ->describeRegions()
                               ->connectTimeout(20)
                               ->timeout(25);

        self::assertInstanceOf(DescribeRegions::class, $request);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testEcs()
    {
        $result = AlibabaCloud::ecs()
                              ->v20140526()
                              ->describeRegions()
                              ->connectTimeout(20)
                              ->timeout(25)
                              ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testEcsInVersionStaticMethod()
    {
        $result = EcsVersion::v20140526()
                            ->describeRegions()
                            ->connectTimeout(20)
                            ->timeout(25)
                            ->request();

        self::assertArrayHasKey('Region', $result['Regions']);
    }

    /**
     * @throws ServerException
     * @throws ClientException
     */
    public function testEcsInApiStaticMethod()
    {
        $result = Ecs::describeRegions()
                     ->connectTimeout(20)
                     ->timeout(25)
                     ->request();
        self::assertArrayHasKey('Region', $result['Regions']);
    }
}
