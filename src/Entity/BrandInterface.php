<?php

declare(strict_types=1);

namespace New\SyliusBrandPlugin\Entity;

use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;

interface BrandInterface extends ResourceInterface, CodeAwareInterface, ProductsAwareInterface, ImagesAwareInterface
{
    /**
     * Returns the name of the brand
     *
     * @return string
     */
    public function __toString(): string;

    /**
     * @return int
     */
    public function getId(): ?int;

    /**
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void;
}