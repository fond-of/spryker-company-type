<?php

namespace FondOfSpryker\Zed\CompanyType\Business;

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
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     */
    public function getCompanyTypeById(CompanyTypeTransfer $companyTypeTransfer): ?CompanyTypeTransfer
    {
        return $this->getFactory()->createCompanyTypeReader()->getById($companyTypeTransfer);
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer
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
        // TODO: Implement createCompanyType() method.
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
        // TODO: Implement updateCompanyType() method.
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return void
     */
    public function deleteCompanyType(CompanyTypeTransfer $companyTypeTransfer): void
    {
        // TODO: Implement deleteCompanyType() method.
    }
}
