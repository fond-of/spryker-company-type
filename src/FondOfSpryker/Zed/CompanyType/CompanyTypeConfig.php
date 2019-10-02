<?php

namespace FondOfSpryker\Zed\CompanyType;

use FondOfSpryker\Shared\CompanyType\CompanyTypeConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class CompanyTypeConfig extends AbstractBundleConfig
{
    protected const DEFAULT_COMPANY_TYPE_NAME = 'default';
    protected const MANUFACTURER_COMPANY_TYPE_NAME = 'manufacturer';

    /**
     * @return string
     */
    public function getDefaultCompanyTypeName(): string
    {
        return $this->get(CompanyTypeConstants::DEFAULT_COMPANY_TYPE_NAME, static::DEFAULT_COMPANY_TYPE_NAME);
    }

    /**
     * @return string
     */
    public function getCompanyTypeManufacturer(): string
    {
        return $this->get(CompanyTypeConstants::MANUFACTURER_COMPANY_TYPE_NAME, static::MANUFACTURER_COMPANY_TYPE_NAME);
    }
}
