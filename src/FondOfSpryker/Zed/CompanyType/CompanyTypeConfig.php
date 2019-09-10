<?php

namespace FondOfSpryker\Zed\CompanyType;

use FondOfSpryker\Shared\CompanyType\CompanyTypeConstants;
use Spryker\Zed\Kernel\AbstractBundleConfig;

class CompanyTypeConfig extends AbstractBundleConfig
{
    protected const DEFAULT_COMPANY_TYPE_KEY = 'default';

    /**
     * @return string
     */
    public function getDefaultCompanyTypeKey(): string
    {
        return $this->get(CompanyTypeConstants::DEFAULT_COMPANY_TYPE_KEY, static::DEFAULT_COMPANY_TYPE_KEY);
    }
}
