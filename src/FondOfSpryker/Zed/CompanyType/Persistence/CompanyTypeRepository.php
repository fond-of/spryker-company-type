<?php

namespace FondOfSpryker\Zed\CompanyType\Persistence;

use Generated\Shared\Transfer\CompanyTypeCollectionTransfer;
use Generated\Shared\Transfer\CompanyTypeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypePersistenceFactory getFactory()
 */
class CompanyTypeRepository extends AbstractRepository implements CompanyTypeRepositoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @param int $idCompanyType
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     *
     * @throws
     */
    public function getById(int $idCompanyType): ?CompanyTypeTransfer
    {
        $fosCompanyType = $this->getFactory()
            ->createCompanyTypeQuery()
            ->filterByIdCompanyType($idCompanyType)
            ->findOne();

        if ($fosCompanyType === null) {
            return null;
        }

        return $this->getFactory()
            ->createCompanyTypeMapper()
            ->mapEntityToTransfer($fosCompanyType, new CompanyTypeTransfer());
    }

    /**
     * {@inheritdoc}
     *
     * @param string $name
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\CompanyTypeTransfer|null
     *
     * @throws
     */
    public function getByName(string $name): ?CompanyTypeTransfer
    {
        $fosCompanyType = $this->getFactory()
            ->createCompanyTypeQuery()
            ->filterByName($name)
            ->findOne();

        if ($fosCompanyType === null) {
            return null;
        }

        return $this->getFactory()
            ->createCompanyTypeMapper()
            ->mapEntityToTransfer($fosCompanyType, new CompanyTypeTransfer());
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @return \Generated\Shared\Transfer\CompanyTypeCollectionTransfer
     */
    public function getAll(): CompanyTypeCollectionTransfer
    {
        $fosCompanyTypes = $this->buildQueryFromCriteria(
            $this->getFactory()->createCompanyTypeQuery()
        )->find();

        $companyTypeMapper = $this->getFactory()->createCompanyTypeMapper();

        $companyTypeCollectionTransfer = new CompanyTypeCollectionTransfer();

        foreach ($fosCompanyTypes as $fosCompanyType) {
            $companyTypeTransfer = $companyTypeMapper->mapEntityToTransfer($fosCompanyType, new CompanyTypeTransfer());
            $companyTypeCollectionTransfer->addCompanyType($companyTypeTransfer);
        }

        return $companyTypeCollectionTransfer;
    }
}
