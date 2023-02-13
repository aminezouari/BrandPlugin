<?php

declare(strict_types=1);

namespace New\SyliusBrandPlugin\Entity;

use Sylius\Component\Core\Model\ProductInterface as BaseProductInterface;

interface ProductInterface extends BaseProductInterface, BrandAwareInterface
{
}