<?php

declare(strict_types=1);

namespace New\SyliusBrandPlugin\Entity;

use Sylius\Component\Core\Model\ImageInterface;

interface BrandImageInterface extends ImageInterface, BrandAwareInterface
{
}