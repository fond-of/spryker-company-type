<?php

namespace FondOfSpryker\Client\CompanyType\Dependency\Client;

use Spryker\Shared\Kernel\Transfer\TransferInterface;

interface CompanyTypeToZedRequestClientInterface
{
    /**
     * @param string $url
     * @param \Spryker\Shared\Kernel\Transfer\TransferInterface $object
     * @param array|null $requestOptions
     *
     * @return \Spryker\Shared\Kernel\Transfer\TransferInterface
     */
    public function call($url, TransferInterface $object, $requestOptions = null): TransferInterface;
}
