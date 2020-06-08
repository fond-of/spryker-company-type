<?php

namespace FondOfSpryker\Client\CompanyType;

use Codeception\Test\Unit;
use FondOfSpryker\Client\CompanyType\Zed\CompanyTypeStubInterface;
use Generated\Shared\Transfer\CompanyTypeTransfer;

class CompanyTypeClientTest extends Unit
{
    /**
     * @var \FondOfSpryker\Client\CompanyType\CompanyTypeClient
     */
    protected $companyTypeClient;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Client\CompanyType\CompanyTypeFactory
     */
    protected $companyTypeFactoryMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\CompanyTypeTransfer
     */
    protected $companyTypeTransferMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Client\CompanyType\Zed\CompanyTypeStubInterface
     */
    protected $companyTypeStubInterfaceMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->companyTypeFactoryMock = $this->getMockBuilder(CompanyTypeFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeTransferMock = $this->getMockBuilder(CompanyTypeTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeStubInterfaceMock = $this->getMockBuilder(CompanyTypeStubInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeClient = new CompanyTypeClient();
        $this->companyTypeClient->setFactory($this->companyTypeFactoryMock);
    }

    /**
     * @return void
     */
    public function testGetCompanyTypeById(): void
    {
        $this->companyTypeFactoryMock->expects($this->atLeastOnce())
            ->method('createZedCompanyTypeStub')
            ->willReturn($this->companyTypeStubInterfaceMock);

        $this->companyTypeStubInterfaceMock->expects($this->atLeastOnce())
            ->method('getCompanyTypeById')
            ->with($this->companyTypeTransferMock)
            ->willReturn($this->companyTypeTransferMock);

        $this->assertInstanceOf(
            CompanyTypeTransfer::class,
            $this->companyTypeClient->getCompanyTypeById(
                $this->companyTypeTransferMock
            )
        );
    }
}
