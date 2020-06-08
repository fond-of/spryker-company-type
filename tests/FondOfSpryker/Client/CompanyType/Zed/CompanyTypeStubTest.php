<?php

namespace FondOfSpryker\Client\CompanyType\Zed;

use Codeception\Test\Unit;
use FondOfSpryker\Client\CompanyType\Dependency\Client\CompanyTypeToZedRequestClientInterface;
use Generated\Shared\Transfer\CompanyTypeTransfer;

class CompanyTypeStubTest extends Unit
{
    /**
     * @var \FondOfSpryker\Client\CompanyType\Zed\CompanyTypeStub
     */
    protected $companyTypeStub;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Client\CompanyType\Dependency\Client\CompanyTypeToZedRequestClientInterface
     */
    protected $companyTypeToZedRequestClientInterfaceMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\CompanyTypeTransfer
     */
    protected $companyTypeTransferMock;

    /**
     * @var string
     */
    protected $url;

    /**
     * @return void
     */
    protected function _before(): void
    {
        $this->companyTypeToZedRequestClientInterfaceMock = $this->getMockBuilder(CompanyTypeToZedRequestClientInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeTransferMock = $this->getMockBuilder(CompanyTypeTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->url = '/company-type/gateway/get-company-type-by-id';

        $this->companyTypeStub = new CompanyTypeStub(
            $this->companyTypeToZedRequestClientInterfaceMock
        );
    }

    /**
     * @return void
     */
    public function testGetCompanyTypeById(): void
    {
        $this->companyTypeToZedRequestClientInterfaceMock->expects($this->atLeastOnce())
            ->method('call')
            ->with(
                $this->url,
                $this->companyTypeTransferMock
            )->willReturn($this->companyTypeTransferMock);

        $this->assertInstanceOf(
            CompanyTypeTransfer::class,
            $this->companyTypeStub->getCompanyTypeById(
                $this->companyTypeTransferMock
            )
        );
    }
}
