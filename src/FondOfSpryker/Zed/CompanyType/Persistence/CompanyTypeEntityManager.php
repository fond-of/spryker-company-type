<?php

namespace FondOfSpryker\Zed\CompanyType\Persistence;

use Generated\Shared\Transfer\CompanyTypeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypePersistenceFactory getFactory()
 */
class CompanyTypeEntityManager extends AbstractEntityManager implements CompanyTypeEntityManagerInterface
{
    /**
     * {@inheritDoc}
     *
     * @param \Generated\Shared\Transfer\CompanyTypeTransfer $companyTypeTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer
     */
    public function persist(CompanyTypeTransfer $companyTypeTransfer): CompanyTypeTransfer
    {
        $fosCompanyType = $this->getFactory()
            ->createCompanyTypeQuery()
            ->filterByIdCompanyType($companyTypeTransfer->getIdCompanyType())
            ->findOneOrCreate();

        $fosCompanyType = $this->getFactory()
            ->createCompanyTypeMapper()
            ->mapTransferToEntity($companyTypeTransfer, $fosCompanyType);

        $fosCompanyType->save();

        $companyTypeTransfer->setIdCompanyType($fosCompanyType->getIdCompanyType());

        return $companyTypeTransfer;
    }

    /**
     * {@inheritDoc}
     *
     * @param int $idCompanyType
     *
     * @return void
     */
    public function deleteById(int $idCompanyType): void
    {
        $this->getFactory()
            ->createCompanyTypeQuery()
            ->filterByIdCompanyType($idCompanyType)
            ->delete();
    }
}
