<?php

namespace FondOfSpryker\Client\CompanyType;

use Codeception\Test\Unit;
use FondOfSpryker\Client\CompanyType\Dependency\Client\CompanyTypeToZedRequestClientInterface;
use FondOfSpryker\Client\CompanyType\Zed\CompanyTypeStubInterface;
use Spryker\Client\Kernel\Container;

class CompanyTypeFactoryTest extends Unit
{
    /**
     * @var \FondOfSpryker\Client\CompanyType\CompanyTypeFactory
     */
    protected $companyTypeFactory;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Spryker\Client\Kernel\Container
     */
    protected $containerMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Client\CompanyType\Dependency\Client\CompanyTypeToZedRequestClientInterface
     */
    protected $companyTypeToZedRequestClientInterfaceMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->containerMock = $this->getMockBuilder(Container::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeToZedRequestClientInterfaceMock = $this->getMockBuilder(CompanyTypeToZedRequestClientInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeFactory = new CompanyTypeFactory();
        $this->companyTypeFactory->setContainer($this->containerMock);
    }

    /**
     * @return void
     */
    public function testCreateZedCompanyTypeStub(): void
    {
        $this->containerMock->expects($this->atLeastOnce())
            ->method('has')
            ->willReturn(true);

        $this->containerMock->expects($this->atLeastOnce())
            ->method('get')
            ->with(CompanyTypeDependencyProvider::CLIENT_ZED_REQUEST)
            ->willReturn($this->companyTypeToZedRequestClientInterfaceMock);

        $this->assertInstanceOf(
            CompanyTypeStubInterface::class,
            $this->companyTypeFactory->createZedCompanyTypeStub()
        );
    }
}
