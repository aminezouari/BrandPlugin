<?php

declare(strict_types=1);

namespace New\SyliusBrandPlugin\Repository;

use Loevgaard\SyliusBrandPlugin\Model\BrandInterface;
use Sylius\Component\Core\Repository\ProductRepositoryInterface as BaseProductRepositoryInterface;

interface ProductRepositoryInterface extends BaseProductRepositoryInterface
{
    /**
     * @param BrandInterface $brand
     *
     * @return iterable
     */
    public function createPaginatorForBrand(BrandInterface $brand): iterable;
}