<?php

namespace FondOfSpryker\Zed\CompanyType\Business\Model;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface;
use Generated\Shared\Transfer\CompanyTypeCollectionTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;

class CompanyTypeReaderTest extends Unit
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface
     */
    protected $companyTypeRepositoryMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\CompanyTypeTransfer
     */
    protected $companyTypeTransferMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\CompanyTypeCollectionTransfer
     */
    protected $companyTypeCollectionTransferMock;

    /**
     * @var \FondOfSpryker\Zed\CompanyType\Business\Model\CompanyTypeReader
     */
    protected $companyTypeReader;


    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->companyTypeRepositoryMock = $this->getMockBuilder(CompanyTypeRepositoryInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeTransferMock = $this->getMockBuilder(CompanyTypeTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeCollectionTransferMock = $this->getMockBuilder(CompanyTypeCollectionTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->companyTypeReader = new CompanyTypeReader($this->companyTypeRepositoryMock);
    }

    /**
     * @return void
     */
    public function testGetById(): void
    {
        $idCompanyType = 1;

        $this->companyTypeTransferMock->expects($this->atLeastOnce())
            ->method('requireIdCompanyType')
            ->willReturn($this->companyTypeTransferMock);

        $this->companyTypeTransferMock->expects($this->atLeastOnce())
            ->method('getIdCompanyType')
            ->willReturn($idCompanyType);

        $this->companyTypeRepositoryMock->expects($this->atLeastOnce())
            ->method('getById')
            ->with($idCompanyType)
            ->willReturn($this->companyTypeTransferMock);

        $this->assertEquals(
            $this->companyTypeTransferMock,
            $this->companyTypeReader->getById($this->companyTypeTransferMock)
        );
    }

    /**
     * @return void
     */
    public function testGetAll(): void
    {
        $this->companyTypeRepositoryMock->expects($this->atLeastOnce())
            ->method('getAll')
            ->willReturn($this->companyTypeCollectionTransferMock);

        $this->assertEquals(
            $this->companyTypeCollectionTransferMock,
            $this->companyTypeReader->getAll()
        );
    }
}
