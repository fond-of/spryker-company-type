<?php

namespace FondOfSpryker\Zed\CompanyType\Business\CompanyTypeExportValidator;

use Generated\Shared\Transfer\EventEntityTransfer;

interface CompanyTypeExportValidatorInterface
{
    /**
     * @param \Generated\Shared\Transfer\EventEntityTransfer $eventEntityTransfer
     *
     * @return bool
     */
    public function validate(EventEntityTransfer $eventEntityTransfer): bool;
}
