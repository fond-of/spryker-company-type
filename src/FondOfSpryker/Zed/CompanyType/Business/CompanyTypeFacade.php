<?php

namespace FondOfSpryker\Zed\CompanyType\Business;

use Generated\Shared\Transfer\CompanyCollectionTransfer;
use Generated\Shared\Transfer\CompanyResponseTransfer;
use Generated\Shared\Transfer\CompanyTypeCollectionTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Business\CompanyTypeBusinessFactory getFactory()
 * @method \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeEntityManagerInterface getEntityManager()
 * @method \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface getRepository()
 */
class CompanyTypeFacade extends AbstractFacade implements CompanyTypeFacadeInterface
{
    /**
     * {@inheritdoc}
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     * @api
     *
     */
    public function getCompanyTypeById(CompanyTypeTransfer $companyTypeTransfer): ?CompanyTypeTransfer
    {
        return $this->getFactory()->createCompanyTypeReader()->getById($companyTypeTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer
     * @api
     *
     */
    public function getCompanyTypes(): CompanyTypeCollectionTransfer
    {
        return $this->getFactory()->createCompanyTypeReader()->getAll();
    }

    /**
     * {@inheritdoc}
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function createCompanyType(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer
    {
        return $this->getFactory()->createCompanyTypeWriter()->create($companyTypeTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function updateCompanyType(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer
    {
        return $this->getFactory()->createCompanyTypeWriter()->update($companyTypeTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return void
     * @api
     *
     */
    public function deleteCompanyType(CompanyTypeTransfer $companyTypeTransfer): void
    {
        $this->getFactory()->createCompanyTypeWriter()->deleteById($companyTypeTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @param int $idCompanyType
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     * @api
     *
     */
    public function findCompanyTypeById(int $idCompanyType): ?CompanyTypeTransfer
    {
        return $this->getRepository()->getById($idCompanyType);
    }

    /**
     * {@inheritdoc}
     *
     * @param array $companyTypeIds
     *
     * @return \Generated\Shared\Transfer\CompanyCollectionTransfer|null
     */
    public function findCompaniesByCompanyTypeIds(array $companyTypeIds): ?CompanyCollectionTransfer
    {
        return $this->getRepository()->findCompaniesByCompanyTypeIds($companyTypeIds);
    }

    /**
     * {@inheritdoc}
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function getCompanyTypeByName(CompanyTypeTransfer $companyTypeTransfer): ?CompanyTypeTransfer
    {
        return $this->getFactory()->createCompanyTypeReader()->getByName($companyTypeTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\CompanyResponseTransfer $companyResponseTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyResponseTransfer
     *
     * @throws
     */
    public function assignDefaultCompanyTypeToNewCompany(CompanyResponseTransfer $companyResponseTransfer
    ): CompanyResponseTransfer {
        return $this->getFactory()
            ->createCompanyTypeAssigner()
            ->assignDefaultCompanyTypeToNewCompany($companyResponseTransfer);
    }

    /**
     * @return string|null
     */
    public function getCompanyTypeManufacturerName(): ?string
    {
        return $this->getFactory()->getConfig()->getCompanyTypeManufacturer();
    }
}
