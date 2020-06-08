<?php

namespace FondOfSpryker\Client\CompanyType;

use Codeception\Test\Unit;
use Spryker\Client\Kernel\Container;

class CompanyTypeDependencyProviderTest extends Unit
{
    /**
     * @var \FondOfSpryker\Client\CompanyType\CompanyTypeDependencyProvider
     */
    protected $companyTypeDependencyProvider;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Spryker\Client\Kernel\Container
     */
    protected $containerMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->containerMock = $this->getMockBuilder(Container::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeDependencyProvider = new CompanyTypeDependencyProvider();
    }

    /**
     * @return void
     */
    public function testProvideServiceLayerDependencies(): void
    {
        $this->assertInstanceOf(
            Container::class,
            $this->companyTypeDependencyProvider->provideServiceLayerDependencies(
                $this->containerMock
            )
        );
    }
}
