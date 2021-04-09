<?php


namespace Aropixel\SyliusPagesPlugin\Entity;


interface PageInterface
{
    public function getTitle(): ?string;

    public function setTitle(string $title): self;

    public function getSlug(): ?string;

    public function setSlug(string $slug): self;
}
