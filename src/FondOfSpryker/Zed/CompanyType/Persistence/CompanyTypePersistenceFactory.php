<?php

namespace FondOfSpryker\Zed\CompanyType\Persistence;

use FondOfSpryker\Zed\CompanyType\Persistence\Mapper\CompanyMapper;
use FondOfSpryker\Zed\CompanyType\Persistence\Mapper\CompanyMapperInterface;
use FondOfSpryker\Zed\CompanyType\Persistence\Mapper\CompanyTypeMapper;
use FondOfSpryker\Zed\CompanyType\Persistence\Mapper\CompanyTypeMapperInterface;
use Orm\Zed\Company\Persistence\SpyCompanyQuery;
use Orm\Zed\CompanyType\Persistence\FosCompanyTypeQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\CompanyType\Persistence\CompanyTypeRepositoryInterface getRepository()
 */
class CompanyTypePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\CompanyType\Persistence\FosCompanyTypeQuery
     */
    public function createCompanyTypeQuery(): FosCompanyTypeQuery
    {
        return FosCompanyTypeQuery::create();
    }

    /**
     * @return \Orm\Zed\Company\Persistence\SpyCompanyQuery
     */
    public function createCompanyQuery(): SpyCompanyQuery
        {
            return SpyCompanyQuery::create();
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyType\Persistence\Mapper\CompanyTypeMapperInterface
     */
    public function createCompanyTypeMapper(): CompanyTypeMapperInterface
    {
        return new CompanyTypeMapper();
    }

    /**
     * @return \FondOfSpryker\Zed\CompanyType\Persistence\Mapper\CompanyMapperInterface
     */
    public function createCompanyMapper(): CompanyMapperInterface
    {
        return new CompanyMapper();
    }
}
